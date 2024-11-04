@extends('admin.admin-layout')

@section('content')
<div class="body-wrapper-inner">
    <div class="container-fluid">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
        <form action="{{ route('docs.store') }}" method="post">
            @csrf
            <input type="hidden" value="{{ Auth::id() }}">

            <label for="title_name" class="mb-3">Title</label>
            <input type="text" class="form-control mb-3 @error('title_name') is-invalid @enderror"  value="{{ old('title_name') }}" placeholder="Title_name" name="title_name">

            <label for="categories" class="mb-3">Categories</label>
            <input type="text" class="form-control mb-3 @error('categories_name') is-invalid @enderror" value="{{ old('categories_name') }}" placeholder="Categories - Example: Geting Started " name="categories_name">

            <label for="content" class="mb-3">Your content</label>
            <textarea name="content" value="{{ old('content') }}" class="@error('content') is-invalid @enderror">
            </textarea>
            <button type="submit" class="btn btn-info mt-3">Create New Post</button>
            <a href="{{ route('docs.index') }}" class="btn btn-danger mt-3">Back</a>
        </form>
    </div>
</div>
@endsection