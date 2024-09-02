@extends('layout.app')
@section('container')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Category Edit</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Category List
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <div class="dropdown">
                        <a class="btn btn-danger" href="{{ route('admin.category.index') }}" role="button">
                            Back
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <div class="pd-20 card-box mb-30">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('admin.category.update', $category) }}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="col-md-12 row">

                    <div class="form-group col-md-6">
                        <label>Main Category</label>
                        <select class="custom-select2 form-control" name="category_id" style="width: 100%; height: 38px">
                            <option value="">Choose Main Category</option>
                            @foreach ($categories as $categoryList)
                                <option value="{{ $categoryList->id }}"
                                    {{ old('category_id', $category->category_id) == $categoryList->id ? 'selected' : '' }}>
                                    {{ $categoryList->title_ne }}
                                </option>
                            @endforeach
                        </select>

                        <span class="text-warning">
                            @error('category_id')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="title_ne">Nepali Title</label>
                        <input class="form-control" id="title_ne" name="title_ne" type="text"
                            value="{{ old('title_ne', $category->title_ne) }}" placeholder="Nepali title" />
                        <span class="text-warning">
                            @error('title_ne')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="col-md-12 row">


                    <div class="form-group col-md-6">
                        <label for="title_en">English Title</label>
                        <input class="form-control" id="title_en" name="title_en"
                            value="{{ old('title_en', $category->title_en) }}" type="text" />
                        <span class="text-warning">
                            @error('title_en')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="image">Image</label>
                        <img src="{{ $category->image }}" height="100" width="100" alt="">
                        <input class="form-control" id="image" name="image" type="file"
                            value="{{ old('image') }}" />
                    </div>
                </div>
                <div class="col-md-12 row">

                    <div class="form-group col-md-6">
                        <label for="position">Position</label>
                        <input class="form-control" id="position" name="position"
                            value="{{ old('position', $category->position) }}" type="number" />
                    </div>
                    <div class="form-group col-md-6">
                        <label for="slug">Slug</label>
                        <input class="form-control" id="slug" name="slug"
                            value="{{ old('slug', $category->slug) }}" type="text" />
                    </div>
                </div>

                <div>
                    <button class="btn btn-danger" type="submit">Submit</button>
                </div>
            </form>

        </div>
    </div>



@endsection
