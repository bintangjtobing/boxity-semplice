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
                    <x-select label="Marketplace" id="social_media_site_type_id">
                        @foreach ($social_media_site_type as $item)
                            <option value="{{ $item->id }}" @if ($data->social_media_site_type_id == $item->id) selected @endif>
                                {{ $item->name }}</option>
                        @endforeach
                    </x-select>
                    <x-input type="text" label="Link" id="link" placeholder="" value="{{ $data->link }}"
                        require="true" />
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
            url: "{{ route('business-social_media_site_edit_patch', $data->id) }}",
            type: "PATCH",
            data: formData,
            success: function(res) {
                Toast.fire({
                    icon: 'success',
                    title: res.success
                });
                setTimeout(function() {
                    window.location.href =
                        "{{ route('business-social_media_site_view_index') }}";
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
