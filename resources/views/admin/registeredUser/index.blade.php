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
                            Registered User List
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
    <div class="pd-20 card-box mb-30">
        <div class="pd-20">
            <h4 class="text-blue h4">Registered User List</h4>

        </div>
        <div class="pb-20">
            <table class="data-table table stripe hover nowrap">
                <thead>
                    <tr>
                        <th class="table-plus datatable-nosort">S.No</th>
                        <th>Image</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Phone No</th>
                        <th>Status</th>
                        <th class="datatable-nosort">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($registeredUsers as $key => $registeredUser)
                        <tr>
                            <td class="table-plus">{{ $loop->iteration }}</td>
                            <td>
                                <img class="rounded-circle" src="{{ $registeredUser?->registeredUserDetail?->cover_image }}" alt="Property registeredUser Image"
                                    width="100" height="100">
                            </td>


                            <td>{{ $registeredUser->username }}</td>
                            <td>{{ $registeredUser->email }}</td>
                            <td>{{ $registeredUser->phone_no }}</td>
                            <td>{{ $registeredUser->is_active }}</td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                        href="#" role="button" data-toggle="dropdown">
                                        <i class="dw dw-more"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                        <a class="dropdown-item"
                                            href="{{ route('admin.registeredUser.show', $registeredUser) }}"><i class="icon-copy bi bi-eye"></i> Show</a>

                                        <form action="{{ route('admin.registeredUser.destroy', $registeredUser) }}" method="post"
                                            style="display: inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dropdown-item"
                                                onclick="return confirm('Are You sure want to delete')"> <i
                                                    class="dw dw-delete-3"></i>Delete </button>

                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $registeredUsers->links() }}
        </div>
    </div>


@endsection
