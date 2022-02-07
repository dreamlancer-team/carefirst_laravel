<div class="mb-5">
    <label class="required form-label">{{ $label }}</label>
    <select class="form-select form-select-solid" aria-label="Select example" name="{{ $name }}">
        <option hidden>Select {{ $label }}</option>
        @foreach ($items as $item)
            <option value="{{ $item -> id }}">{{ $item -> name }}</option>
        @endforeach
    </select>
</div>