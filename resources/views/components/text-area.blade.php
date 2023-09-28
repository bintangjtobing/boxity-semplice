<div class="form-group mb-25 ">
    <label for="{{ $id }}" style="margin-bottom: 12px; font-size:16px; line-height:22.4px;">{{ $label }}
        @if ($require == 'true')
            <small class="text-danger">*</small>
        @endif
    </label>
    <textarea name="{{ $id }}" id="{{ $id }}" cols="45" rows="10" class="form-control"
        style="resize: none" placeholder="{{ $placeholder }}">{{ $value }}</textarea>
</div>
