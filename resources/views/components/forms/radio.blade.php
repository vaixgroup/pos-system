 @foreach($list as $value => $label)
<div @class([
        'form-check',
        'form-check-inline mb-0 pt-2' => $isInline
])>
    <input class="form-check-input" type="radio"
           name="{{ $name }}"
           id="radio_{{ $name .'_'. $value  }}"
           value="{{ $value }}"
        @checked( $checked == $value)/>
    <label class="form-check-label" for="radio_{{ $name .'_'. $value }}">
        {{ $label }}
    </label>
</div>
@endforeach


