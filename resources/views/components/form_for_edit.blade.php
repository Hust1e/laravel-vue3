<div class="form-group">
    <label>{{ $label }}</label>
    <input type="{{ $type }}" required class="form-control @error("$field") is-invalid @enderror" name="{{ $field }}"
           id="{{ $field }}" value="{{ $user }}" placeholder="{{ $field }}">
    @error("$field")
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
