<div class="col-md">
    <div class="row mb-3">
        <div class="col-md">
            <div class="accordion" id="accordionExample">
                @for ($i = 1; $i <= 3; $i++)
                    <div class="card">
                        <div class="card-header" id="heading{{ $i }}">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                    data-target="#product{{ $i }}" aria-expanded="true"
                                    aria-controls="product{{ $i }}" style="color: black; font-weight: bold;">
                                    Produk {{ $i }}
                                </button>
                            </h2>
                        </div>

                        <div id="product{{ $i }}" class="collapse"
                            aria-labelledby="heading{{ $i }}" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="product_name_{{ $i }}"
                                            name="product_name_{{ $i }}" placeholder="Nama Produk" required>
                                    </div>
                                    <div class="col-md">
                                        <label for="file_product">Gambar Product</label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <textarea name="product_description_{{ $i }}" id="product_description_{{ $i }}"
                                            class="form-control" cols="30" rows="10" placeholder="Ceritakan tentang produk" required></textarea>
                                    </div>
                                    <div class="col-md">
                                        <div id="myDropzone{{ $i }}" class="dropzone"></div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="row">
                                            @foreach ($product_types as $pt)
                                                <div class="col-md">
                                                    <a href="javascript:void(0)"
                                                        class="btn btn-outline-secondary btn{{ $i }}"
                                                        style="width: 100%"
                                                        onclick="toggleProductType(this, '{{ $pt->id }}', '{{ $i }}')">{{ $pt->name }}</a>
                                                </div>
                                            @endforeach
                                            <input type="hidden" name="product_type_id{{ $i }}"
                                                id="product_type_id{{ $i }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    Dropzone.autoDiscover = false;
    var myDropzone1 = new Dropzone("#myDropzone1", {
        url: "/upload",
        maxFiles: 4,
        acceptedFiles: 'image/*',
        autoProcessQueue: false,
        autoQueue: false,
        addRemoveLinks: true,
    });

    myDropzone1.on("maxfilesreached", function(file) {
        alert("Anda telah mencapai batas maksimum file yang diizinkan.");

        var excessFiles = myDropzone1.files.slice(3);
        excessFiles.forEach(function(fileToRemove) {
            myDropzone1.removeFile(fileToRemove);
        });
    });

    var myDropzone2 = new Dropzone("#myDropzone2", {
        url: "/upload",
        maxFiles: 4,
        acceptedFiles: 'image/*',
        autoProcessQueue: false,
        autoQueue: false,
        addRemoveLinks: true,
    });

    myDropzone2.on("maxfilesreached", function(file) {
        alert("Anda telah mencapai batas maksimum file yang diizinkan.");

        var excessFiles = myDropzone2.files.slice(3);
        excessFiles.forEach(function(fileToRemove) {
            myDropzone2.removeFile(fileToRemove);
        });
    });

    var myDropzone3 = new Dropzone("#myDropzone3", {
        url: "/upload",
        maxFiles: 4,
        acceptedFiles: 'image/*',
        autoProcessQueue: false,
        autoQueue: false,
        addRemoveLinks: true,
    });

    myDropzone3.on("maxfilesreached", function(file) {
        alert("Anda telah mencapai batas maksimum file yang diizinkan.");

        var excessFiles = myDropzone3.files.slice(3);
        excessFiles.forEach(function(fileToRemove) {
            myDropzone3.removeFile(fileToRemove);
        });
    });

    function toggleProductType(element, typeId, pid) {
        // Dapatkan elemen yang memiliki class "active" dan hapus class tersebut
        var activeElement = document.querySelector('.btn' + pid + '.active');
        if (activeElement) {
            activeElement.classList.remove('active');
        }
        element.classList.add('active');
        $('#product_type_id' + pid).val(typeId)
    }
</script>
