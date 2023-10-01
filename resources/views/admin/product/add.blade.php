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
                    <x-input type="text" label="Nama Produk" id="name" placeholder="" value=""
                        require="true" />
                    <x-text-area label="Deskripsi Produk" id="description" placeholder="" value=""
                        require="true" />
                    <div class="form-group">
                        <x-label label="Gambar Produk" id="file_product" require="true" />
                        <div id="myDropzone" class="dropzone">
                        </div>
                    </div>
                    <x-select label="Tipe Produk" id="product_type_id">
                        @foreach ($product_type as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
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
            url: "{{ route('product_add_post') }}",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(res) {
                if (res.status == false) {
                    Toast.fire({
                        icon: 'error',
                        title: res.error
                    });
                } else {
                    Toast.fire({
                        icon: 'success',
                        title: res.success
                    });
                    setTimeout(function() {
                        window.location.href = "{{ route('product_view_index') }}";
                    }, 2000);
                }
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
    })
</script>
