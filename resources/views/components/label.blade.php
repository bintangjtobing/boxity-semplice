<label for="{{ $id }}" style="margin-bottom: 12px; font-size:16px; line-height:22.4px;">{{ $label }}
    @if ($require == 'true')
        <small class="text-danger">*</small>
    @endif
</label>
