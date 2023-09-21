<div class="col-md">
    <div class="row mb-3">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div id="imageHeader">
                <img id="uploadedHeader" src="{{ asset('template/bg-business.png') }}" alt="Gambar Header"
                    style="width:500px; max-height:180px; border-radius: 30px;" />
            </div>
        </div>
        <div class="col-md">
            <input type="file" name="file_photo_header" id="file_photo_header" hidden>
            <a href="javascript:void(0)" class="btn btn-secondary" id="uploadHeaderButton">Upload Gambar Header</a>
            <small class="text-danger">Ukuran gambar maks. 5MB</small>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md">
            <textarea name="business_description" id="business_description" class="form-control" cols="30" rows="10"
                placeholder="Ceritakan dengan singkat tentang bisnis kamu..."></textarea>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#uploadHeaderButton').click(function() {
            $('#file_photo_header').click();
        });

        $('#file_photo_header').change(function() {
            var file = this.files[0];
            var fileType = file.type;
            var fileSize = file.size;
            var match = ['image/jpeg', 'image/png', 'image/jpg'];
            var maxSize = 5 * 1024 * 1024;

            if (!(fileType == match[0] || fileType == match[1] || fileType == match[2])) {
                alert('Sorry, only JPG, JPEG, & PNG files are allowed to upload.');
                $('#file_photo_header').val('');
                return false;
            }
            if (fileSize > maxSize) {
                alert('Sorry, your file is too large to upload.');
                $('#file_photo_header').val('');
                return false;
            }
            showImagePreviewHeader(this)
        });
    });

    function showImagePreviewHeader(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#uploadedHeader').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
