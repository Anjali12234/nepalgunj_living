{{--
@extends('frontend.user.dashboard.dashboard')
@section('content')
    <div  class="">
     <p class="text-gray-500 ">{{ Auth::guard('registered-user')->user()->username }} hasn't posted anything. </p>

    </div>

@endsection --}}

@extends('frontend.user.dashboard.dashboard')

@section('content')
<div class="col-span-3">
    <p class="text-gray-500 px-7">{{ Auth::guard('registered-user')->user()->username }} hasn't posted anything. </p>

            </div>
@endsection
