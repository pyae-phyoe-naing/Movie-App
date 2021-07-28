<div class="form-group">
    <label for="">{{ ucfirst($name) }}</label>
    <input type="{{ $type }}" name="{{ $name }}" value="{{ $value ?? old($name) }}"
        class="form-control @error($name) is-invalid @enderror">
    @error($name)
        <small class="text text-danger">{{ $message }}</small>
    @enderror
</div>
