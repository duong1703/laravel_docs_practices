@extends('admin.admin-layout')

@section('content')
<div class="body-wrapper-inner">
    <div class="container-fluid">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table id="example" class="cell-border" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Categories</th>
                    <th>Content</th>
                    <th>Create by</th>
                    <th>Function</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $count = 1;
                @endphp
                @foreach ($post as $posts)
                    <tr>
                        <td>{{ $count++ }}</td>
                        <td>{{ $posts->title_name }}</td>
                        <td>{{ $posts->categories_name }}</td>
                        <td>{{  strip_tags($posts->content)  }}</td>
                        <td>{{ $posts->user->name ?? 'N/A' }}</td>
                        <td>
                            <a href="" class="btn btn-primary">Edit</a>
                            <form action="{{ route('docs.destroy', ['id' => $posts->id]) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
