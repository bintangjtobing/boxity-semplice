<div class="form-group mb-25 ">
    <label for="{{ $id }}" style="margin-bottom: 12px; font-size:16px; line-height:22.4px;">{{ $label }}
        @if ($require == 'true')
            <small class="text-danger">*</small>
        @endif
    </label>
    <input type="{{ $type }}" class="form-control" id="{{ $id }}" name="{{ $id }}"
        value="{{ $value }}" {{ $placeholder }}>
</div>
