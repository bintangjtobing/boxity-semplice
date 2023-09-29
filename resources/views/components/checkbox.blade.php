<div class="form-group mb-25 ">
    <label for="{{ $id }}" style="margin-bottom: 12px; font-size:16px; line-height:22.4px;">{{ $label }}
        @if ($require == 'true')
            <small class="text-danger">*</small>
        @endif
    </label>
    <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input" id="{{ $id }}" value="{{ $value }}"
            name="{{ $id }}" @if ($checked == 'true') checked @endif>
        <label class="custom-control-label" for="{{ $id }}">On</label>
    </div>
</div>
