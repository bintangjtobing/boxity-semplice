<div class="col-md">
    <div class="row mb-3">
        <div class="col-md text-center" style="display: grid; justify-items:center;">
            <div id="imagePhoto" class="mb-3">
                <img id="uploadedImage" src="" alt="Gambar Profil" width="110px" style="border-radius: 90px;" />
            </div>
            <input type="file" name="file_photo_owner" id="file_photo_owner" hidden>
            <a href="javascript:void(0)" class="btn btn-secondary" id="uploadButton">Upload Gambar Profil</a>
            <small class="text-danger">Ukuran gambar maks. 5MB</small>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md">
            <input type="text" class="form-control" id="name" name="name" placeholder="Nama Owner">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md">
            <textarea name="bio" id="bio" class="form-control" cols="30" rows="10" placeholder="Bio"></textarea>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#uploadButton').click(function() {
            $('#file_photo_owner').click();
        });

        $('#file_photo_owner').change(function() {
            var file = this.files[0];
            var fileType = file.type;
            //ukuran max 5mb
            var fileSize = file.size;
            var match = ['image/jpeg', 'image/png', 'image/jpg'];

            if (!(fileType == match[0] || fileType == match[1] || fileType == match[2])) {
                alert('Sorry, only JPG, JPEG, & PNG files are allowed to upload.');
                $('#file_photo_owner').val('');
                return false;
            }
            if (fileSize > 49876) {
                alert('Sorry, your file is too large to upload.');
                $('#file_photo_owner').val('');
                return false;
            }
            showImagePreview(this)
        });
    });

    function showImagePreview(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#uploadedImage').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
