<div class="col-md">
    <div class="row mb-3">
        <div class="col-md-6">
            <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Nama Produk">
        </div>
        <div class="col-md">
            <label for="file_product">Gambar Product</label>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <textarea name="product_description" id="product_description" class="form-control" cols="30" rows="10"
                placeholder="Ceritakan tentang produk"></textarea>
        </div>
        <div class="col-md">
            <div id="myDropzone" class="dropzone"></div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md">
                    <a href="javascript:void(0)" class="btn btn-outline-secondary" style="width: 100%">Produk
                        Trending</a>
                </div>
                <div class="col-md">
                    <a href="javascript:void(0)" class="btn btn-outline-secondary" style="width: 100%">Produk Umum</a>
                </div>
                <div class="col-md">
                    <a href="javascript:void(0)" class="btn btn-outline-secondary" style="width: 100%">Produk Best
                        Seller</a>
                </div>
            </div>
        </div>
    </div>
    <a href="javascript:void(0)" class="btn btn-primary" style="width: 100%">Simpan & Tambah Produk</a>
    <button type="submit" class="btn btn-primary" style="width: 100%" id="btnSave">Save</button>
</div>
<script type="text/javascript">
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
</script>