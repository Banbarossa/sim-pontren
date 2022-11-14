
@props(['customClass'=>''])


<div {{ $attributes->merge(['class'=>'form-group '.$customClass]) }}>
    <label for="{{ $id }}">{{ $label }}</label>

    <input type="{{ $type }}" name="{{ $name }}" id="{{ $id }}" class="form-control @error("{{ $name }}") is-invalid @enderror" 
    @if ($model)
        wire:model="{{ $model }}"
    @endif
    >
    
    @error('{{ $name }}')
    <span class="invalid-feedback">
        {{ $message }}
    </span>
    @enderror
    

</div>
