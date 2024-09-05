@extends('frontend.user.dashboard.dashboard')

@section('content')
<div class="content px-7 col-span-3">
    <h1 class="font-semibold text-3xl">All Posts</h1>
    <div>
        <a href=" {{ route('user.create',$subCategory) }}" type="button" class="btn bg-red-300">Property</a>
</div>
</div>


@endsection
