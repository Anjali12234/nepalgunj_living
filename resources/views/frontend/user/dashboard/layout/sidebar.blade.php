
<ul class="space-y-3">
    <li class="active:bg-purple-700 gap-28 py-1 hover:bg-gray-400 px-4 flex">
        <a href="{{ route('user.timeline') }}">Timeline</a>
        <p class="ml-auto">0</p>
    </li>
    <li class="active:bg-purple-700 gap-28 py-1 hover:bg-gray-400 px-4 flex">
        <a href="{{ route('user.profile.index') }}">Profile Edit</a>
        <p class="ml-auto">0</p>
    </li>
    <li class="active:bg-purple-700 gap-28 py-1 hover:bg-gray-400 px-4 flex">
        {{-- <a href="{{ route('user.propertyList') }}">Property List</a> --}}
        <a href="{{ route('user.property/propertyLists') }}">Property List</a>
        <p class="ml-auto">0</p>
    </li>
    <li class="active:bg-purple-700 gap-28 py-1 hover:bg-gray-400 px-4 flex">
        {{-- <a href="{{ route('user.propertyList') }}">Property List</a> --}}
        <a href="{{ route('user.halthCare') }}">Health Care</a>
        <p class="ml-auto">0</p>
    </li>

</ul>
