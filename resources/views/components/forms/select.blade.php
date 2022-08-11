<select name="{{ $name }}" class="form-select" {{ $plugins }} {{ $placeholder }} {{ $multiple }} {{ $dataAttributes }}>
    @foreach($options as $value => $text)
    <option value="{{ $value }}" {{ $isSelected($value) }}>{{ $text }}</option>
    @endforeach
</select>
