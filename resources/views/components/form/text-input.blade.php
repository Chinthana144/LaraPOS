<label for="">{{ $label }}</label>
<input
    type="{{ $type }}"
    name="{{ $name }}"
    placeholder="{{ $placeholder }}"
    {{$attributes->merge(['class'=>'form-control']) }}
>
