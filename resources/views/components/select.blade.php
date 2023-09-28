<div class="form-group mb-24">
    <label for="{{ $id }}">{{ $label }}</label>
    <div class="atbd-select ">
        <select name="{{ $id }}" id="select-size-4" class="form-control form-control-default">
            {{ $slot }}
        </select>
    </div>
</div>
