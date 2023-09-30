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
                            <x-input type="text" label="Alamat lengkap" id="address" placeholder=""
                                value="{{ $data->address }}" require="true" />
                            <x-input type="text" label="Link Google Business / Lokasi Map" id="link_location"
                                placeholder="" value="{{ $data->link_location }}" require="true" />
                            @if ($data->is_show_location == 1)
                                <x-checkbox label="Tampilkan pada Tema?" id="is_show_location" value="1"
                                    require="true" checked="true" />
                            @else
                                <x-checkbox label="Tampilkan pada Tema?" id="is_show_location" value="1"
                                    require="true" checked="false" />
                            @endif
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
            url: "{{ route('business-location_edit_patch') }}",
            type: "PATCH",
            data: formData,
            success: function(res) {
                Toast.fire({
                    icon: 'success',
                    title: res.success
                });
                setTimeout(function() {
                    window.location.href = "{{ route('business-location_view_index') }}";
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
