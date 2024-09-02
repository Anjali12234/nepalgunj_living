
@props([
    'label',
    'name',
    'type',
    'placeholder' => '',
    'id' => '',
    'class' => '',
    'value' => null,
])
<div class="block lg:flex items-center mb-3">
    <label for="{{ $id }}" class="text-gray-400 w-36 text-xs flex items-center">
        <span>{{ $label}}</span>
        <span class="text-xl text-gray-400 ml-1">*</span>
    </label>
    <input type="{{ $type }}" id="{{ $id }}" name="{{ $name }}" value="{{ $value }}"
        class=" text-xs px-2 pt-1 pb-2 w-80 md:w-96 border-b-2 focus:border-[#333] outline-none  bg-white" />
        <span class="text-warning">
            @error('$name')
                {{ $message }}
            @enderror
        </span>
</div>
