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

    function getFileSizeInKB(filePath) {
        var fileSizeBytes = 0;
        var xhr = new XMLHttpRequest();
        xhr.open("HEAD", filePath, false);
        xhr.send();

        if (xhr.status == 200) {
            fileSizeBytes = xhr.getResponseHeader("Content-Length");
            var fileSizeKB = Math.round(fileSizeBytes / 1024);
            return fileSizeKB;
        } else {
            console.error('Gagal mendapatkan ukuran file.');
            return null;
        }
    }

    existingFiles.forEach(function(file) {
        var realFileName = file.photo.split('/').pop();

        var filePath = "{{ asset('') }}" + file.photo;
        var realFileSizeKB = getFileSizeInKB(filePath);

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

        var fileUrl = "{{ asset('') }}" + file.photo;

        myDropzone.emit('thumbnail', mockFile, fileUrl);
        myDropzone.files.push(mockFile);
    });

    myDropzone.on("maxfilesreached", function(file) {
        alert("Anda telah mencapai batas maksimum file yang diizinkan.");

        var excessFiles = myDropzone.files.slice(3);
        excessFiles.forEach(function(fileToRemove) {
            myDropzone.removeFile(fileToRemove);
        });
    });

    $('#formData').submit(function(e) {
        $(".submit").prop('disabled', true);
        e.preventDefault();
        var formData = new FormData(this);
        myDropzone.files.forEach(function(file) {
            formData.append('file_product[]', file);
        });
        $.ajax({
            url: "{{ route('product_edit_patch', $data->id) }}",
            type: "PATCH",
            data: formData,
            contentType: false,
            processData: false,
            success: function(res) {
                Toast.fire({
                    icon: 'success',
                    title: res.success
                });
                setTimeout(function() {
                    window.location.href = "{{ route('product_view_index') }}";
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
