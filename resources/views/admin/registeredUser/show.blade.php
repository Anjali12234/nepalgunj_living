@extends('layout.app')
@section('container')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>All Registered User</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Registered User
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <div class="dropdown">
                        <a class="btn btn-primary " href="" role="button">
                            Add
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                <div class="pd-20 card-box">
                    <h5 class="h4 text-blue mb-20">Customtab Tab</h5>
                    <div class="tab">
                        <ul class="nav nav-tabs customtab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home2" role="tab"
                                    aria-selected="true">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#profile2" role="tab"
                                    aria-selected="false">All Document</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#contact2" role="tab"
                                    aria-selected="false">List Of Ad</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="home2" role="tabpanel">
                                <div class="pd-20">
                                    <div class="col-md-12">
                                        <div class="row">

                                            <div class="col-12 col-md-6">
                                                <div class="d-flex">
                                                    <p class="me-2">Name:</p>
                                                    <p>{{ $registeredUser->username }}</p>
                                                </div>
                                                <div class="d-flex">
                                                    <p class="me-2">Email:</p>
                                                    <p>{{ $registeredUser->email }}</p>
                                                </div>
                                                <div class="d-flex">
                                                    <p class="me-2">Phone Number:</p>
                                                    <p>{{ $registeredUser->phone_no }}</p>
                                                </div>
                                                <div class="d-flex">
                                                    <p class="me-2">Gender:</p>
                                                    <p>{{ $registeredUser->gender }}</p>
                                                </div>
                                                <div class="d-flex">
                                                    <p class="me-2">Date Of Birth:</p>
                                                    <p>{{ $registeredUser->d_o_b }}</p>
                                                </div>
                                                <div class="d-flex">
                                                    <p class="me-2">Address:</p>
                                                    <p>{{ $registeredUser?->registeredUserDetail?->address }}</p>
                                                </div>
                                                <div class="d-flex">
                                                    <p class="me-2">Citizenship No:</p>
                                                    <p>{{ $registeredUser?->registeredUserDetail?->citizenship_no }}</p>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile2" role="tabpanel">
                                <div class="pd-20">
                                    <div class="col-12 col-md-6">
                                        <div class="">
                                            <p>Cover Image</p>
                                            <img src="{{ $registeredUser?->registeredUserDetail?->cover_image }}"
                                                class="img-fluid mb-2 " height="100" width="100"
                                                alt="Cover Image"> <br>
                                        </div>
                                        <div class="">
                                            <p>Profile Image</p>
                                            <img src="{{ $registeredUser?->registeredUserDetail?->image }}"
                                                class="img-fluid" height="100" width="100" alt="Profile Image">

                                        </div>
                                        <div class="">
                                            <p>Citizenship Image (Front)</p>
                                            <img src="{{ $registeredUser?->registeredUserDetail?->citizenship_image_front }}"
                                                class="img-fluid" height="100" width="100" alt="Profile Image">


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact2" role="tabpanel">
                                <div class="pd-20">
                                    You have to verify your account in order to post classified ads on Qatar Living. These
                                    are the steps to take to verify your account:

                                    Edit your account and add your mobile phone number
                                    An SMS will be sent to your phone that you have to enter on this page. It may take up to
                                    5 minutes for the SMS to arrive.
                                    Your can now post classified ads. Previously posted ads will be published within
                                    minutes.

                                    Verify your account by adding a mobile phone number to your account. Edit your account.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    @endsection
