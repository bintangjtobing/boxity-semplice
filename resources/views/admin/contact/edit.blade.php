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
                                    <label for="">Whatsapp <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="whatsapp">+62</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="895xxxxx"
                                            aria-describedby="whatsapp" name="whatsapp_number"
                                            value="{{ $data->whatsapp_number }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md">
                                    <label for="">No. Telp <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="phone_number">+62</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="895xxxxx"
                                            aria-describedby="phone_number" name="phone_number"
                                            value="{{ $data->phone_number }}">
                                    </div>
                                </div>
                            </div>
                            <x-input type="text" label="Email" id="email" placeholder=""
                                value="{{ $data->email }}" require="true" />
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
    $('#formData').submit(function(e) {
        $(".submit").prop('disabled', true);
        e.preventDefault();
        var formData = $('#formData').serialize();
        $.ajax({
            url: "{{ route('business-contact_edit_patch') }}",
            type: "PATCH",
            data: formData,
            success: function(res) {
                Toast.fire({
                    icon: 'success',
                    title: res.success
                });
                setTimeout(function() {
                    window.location.href = "{{ route('business-contact_view_index') }}";
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
    })
</script>
