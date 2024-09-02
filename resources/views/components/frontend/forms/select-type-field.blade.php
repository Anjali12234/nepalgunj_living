@props([
    'label',
    'name',
    'type',
    'id' => '',
    'value' => ''
])

<div class="block lg:flex items-center mb-3">
    <label for="{{ $id }}" class="text-gray-400 w-36 text-xs flex items-center">
        <span>{{ $label }}</span>
        <span class="text-xl text-gray-400 ml-1">*</span>
    </label>
    <select name="{{ $name }}"
        class="px-2 pt-1 pb-2  w-80 md:w-96 border-b-2 focus:border-[#333] outline-none text-xs bg-white"
        name="category_id" value="{{ $value }}">
        <option value="">Choose Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>

    </select>

</div>
