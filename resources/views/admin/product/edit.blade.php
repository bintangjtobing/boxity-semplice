<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">{{ ucfirst(Helper::changeRouteName()) }} Add Data</h4>
            </div>
        </div>
    </div>
</div>
<div class="card card-default card-md mb-4">
    <div class="card-body">
        <div class="basic-form-wrapper">
            <form id="formData">
                @csrf
                <div class="form-basic">
                    <x-input type="text" label="Nama Produk" id="name" placeholder=""
                        value="{{ $data->name }}" require="true" />
                    <x-text-area label="Deskripsi Produk" id="description" placeholder=""
                        value="{{ $data->description }}" require="true" />
                    <div class="form-group">
                        <x-label label="Gambar Produk" id="file_product" require="true" />
                        <div id="myDropzone" class="dropzone">
                        </div>
                    </div>
                    <x-select label="Tipe Produk" id="product_type_id">
                        @foreach ($product_type as $item)
                            <option value="{{ $item->id }}" @if ($data->product_type_id == $item->id) selected @endif>
                                {{ $item->name }}</option>
                        @endforeach
                    </x-select>
                    <div class="form-group mb-0">
                        <button type="submit" class="btn btn-lg btn-primary btn-submit submit">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    Dropzone.autoDiscover = false;

    var myDropzone = new Dropzone("#myDropzone", {
        url: "/upload",
        maxFiles: 4,
        acceptedFiles: 'image/*',
        autoProcessQueue: false,
        autoQueue: false,
        addRemoveLinks: true,
    });

    var existingFiles = @json($data->productImages);

    function getFileSizeInKB(fileUrl, callback) {
        fetch(fileUrl)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Gagal mendapatkan ukuran file.');
                }
                return response.headers.get('content-length');
            })
            .then(contentLength => {
                var fileSizeKB = Math.round(contentLength / 1024);
                callback(fileSizeKB);
            })
            .catch(error => {
                console.error(error);
                callback(null);
            });
    }

    existingFiles.forEach(function(file) {
        var realFileName = file.photo.split('/').pop();
        var fileUrl = file.photo;
        getFileSizeInKB(fileUrl, function(realFileSizeKB) {
            var mockFile = new File([realFileName], realFileName, {
                type: 'image/*',
                lastModified: Date.now()
            });

            myDropzone.emit('addedfile', mockFile);

            var fileNode = myDropzone.files.find(function(node) {
                return node.name === realFileName;
            });

            if (fileNode) {
                fileNode.upload.total = realFileSizeKB;
                fileNode.upload.bytesSent = realFileSizeKB;
            }

            myDropzone.emit('thumbnail', mockFile, fileUrl);
            myDropzone.files.push(mockFile);
        });
    });

    myDropzone.on("addedfile", function(file) {
        var total = 3;
        if (myDropzone.files.length > total) {
            myDropzone.removeFile(file);
            Toast.fire({
                icon: 'error',
                title: 'Anda telah mencapai batas maksimum file yang diizinkan (' + total + ' file).'
            });
        }
    });

    $('#formData').submit(function(e) {
        // $(".submit").prop('disabled', true);
        e.preventDefault();
        var formData = new FormData(this);
        myDropzone.files.forEach(function(file) {
            formData.append('file_product[]', file);
        });
        $.ajax({
            url: "{{ route('product_edit_patch', $data->id) }}",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(res) {
                Toast.fire({
                    icon: 'success',
                    title: res.success
                });
                setTimeout(function() {
                    // window.location.href = "{{ route('product_view_index') }}";
                }, 2000);
            },
            error: function(res) {
                if (res.status != 422)
                    Toast.fire({
                        icon: 'error',
                        title: 'Something went wrong'
                    });
                showError(res.responseJSON.errors, "#formData");
                $.each(res.responseJSON.errors, function(idx, item) {
                    Toast.fire({
                        icon: 'error',
                        title: idx = item
                    });
                });
            }
        });
        return false;
    });
</script>
