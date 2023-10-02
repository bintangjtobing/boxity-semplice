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
                            <div class="row mb-3">
                                <div class="col-md">
                                    <div id="imageHeader">
                                        <img id="uploadedHeader"
                                            src="{{ asset($data->photo ?? 'template/bg-business.png') }}"
                                            alt="Gambar Header"
                                            style="width:500px; max-height:180px; border-radius: 30px;" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <input type="file" name="file_photo_header" id="file_photo_header" hidden>
                                    <a href="javascript:void(0)" class="btn btn-secondary" id="uploadHead">Upload Gambar
                                        Header</a>
                                    <small class="text-danger">Ukuran gambar maks. 5MB</small>
                                </div>
                            </div>
                            <x-text-area label="Deskripsi Bisnis" id="description" placeholder=""
                                value="{{ $data->description }}" require="true" />
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
    // $('#formData').submit(function(e) {
    //     // $(".submit").prop('disabled', true);
    //     e.preventDefault();
    //     var formData = $('#formData').serialize();
    //     $.ajax({
    //         url: "{{ route('business-about_edit_patch') }}",
    //         type: "PATCH",
    //         data: formData,
    //         success: function(res) {
    //             Toast.fire({
    //                 icon: 'success',
    //                 title: res.success
    //             });
    //             setTimeout(function() {
    //                 window.location.href = "{{ route('business-about_view_index') }}";
    //             }, 2000);
    //         },
    //         error: function(res) {
    //             if (res.status != 422)
    //                 Toast.fire({
    //                     icon: 'error',
    //                     title: 'Something went wrong'
    //                 });
    //             showError(res.responseJSON.errors, "#formData");
    //             $.each(res.responseJSON.errors, function(idx, item) {
    //                 Toast.fire({
    //                     icon: 'error',
    //                     title: idx = item
    //                 });
    //             });
    //         }
    //     });
    //     return false;
    // })

    $('#uploadHead').click(function() {
        $('#file_photo_header').click();
    });

    $('#formData').submit(function(e) {
        $(".submit").prop('disabled', true);
        e.preventDefault();
        var formData = new FormData($('#formData')[0]);
        $.ajax({
            url: "{{ route('business-about_edit_patch') }}",
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
                    window.location.href = "{{ route('business-about_view_index') }}";
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
