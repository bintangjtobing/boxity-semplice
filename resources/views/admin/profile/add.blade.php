<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">{{ ucfirst(Helper::changeRouteName()) }} Data</h4>
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
                    <div class="row">
                        <div class="col-md">
                            <div class="row">
                                <div class="col-md text-center" style="display: grid; justify-items:center;">
                                    <div id="imagePhoto" class="mb-3">
                                        <img id="uploadOwnerImage" src="{{ asset('template/bg-owner.png') }}"
                                            alt="Gambar Profil" width="110px" style="border-radius: 90px;" />
                                    </div>
                                    <input type="file" name="file_photo" id="file_photo" hidden>
                                    <a href="javascript:void(0)" class="btn btn-secondary" id="uploadButtons">Upload
                                        Gambar Profil</a>
                                    <small class="text-danger">Ukuran gambar maks. 5MB</small>
                                </div>
                            </div>
                            <x-input type="text" label="Nama" id="name" placeholder="" value=""
                                require="true" />
                            <x-text-area label="Biodata Owner" id="description" placeholder="" value=""
                                require="true" />
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <button type="submit" class="btn btn-lg btn-primary btn-submit submit">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#uploadButtons').click(function() {
            $('#file_photo').click();
        });

        $('#file_photo').change(function() {
            var file = this.files[0];
            var fileType = file.type;
            var fileSize = file.size;
            var match = ['image/jpeg', 'image/png', 'image/jpg'];

            if (!(fileType == match[0] || fileType == match[1] || fileType == match[2])) {
                alert('Sorry, only JPG, JPEG, & PNG files are allowed to upload.');
                $('#file_photo').val('');
                return false;
            }
            if (fileSize > 498760) {
                alert('Sorry, your file is too large to upload.');
                $('#file_photo').val('');
                return false;
            }
            showProfileImage(this)
        });
    });

    function showProfileImage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#uploadOwnerImage').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    $('#formData').submit(function(e) {
        $(".submit").prop('disabled', true);
        e.preventDefault();
        var formData = new FormData($('#formData')[0]);
        $.ajax({
            url: "{{ route('profile-owner_edit_patch') }}",
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
                    window.location.href = "{{ route('profile-owner_view_index') }}";
                }, 2000);
            },
            error: function(res) {
                $(".submit").prop('disabled', false);
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
