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
                    <x-input type="text" label="Nama Client / Customer" id="client_name" placeholder=""
                        value="" require="true" />
                    <x-text-area label="Pesan Testimoni" id="message" placeholder="" value="" require="true" />
                    <x-checkbox label="Tampilkan pada Tema?" id="is_show" value="1" require="true"
                        checked="false" />
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
        var formData = new FormData(this);
        $.ajax({
            url: "{{ route('testimoni_add_post') }}",
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
                        window.location.href = "{{ route('testimoni_view_index') }}";
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
