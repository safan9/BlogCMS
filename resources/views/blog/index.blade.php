@extends('dashboard')

@section('content')

    <h2 class="p-5 font-semibold text-xl text-gray-800 leading-tight">All Blogs</h2>
    @if(session('msgSaved'))
        <div class="container">
            <div class="alert alert-success" role="alert">
                {{ session('msgSaved') }}
            </div>
        </div>
    @endif

    @if(session('msgDeleted'))
        <div class="container">
            <div class="alert alert-warning" role="alert">
                {{ session('msgDeleted') }}
            </div>
        </div>
    @endif
    <div class="p-10 container">
        @foreach($blogs as $blog)
            <div class="p-5 alert alert-secondary">
                <div class="text-left"><b>{{ $blog->title }}</b></div>
                <div class="text-right"><b>Created At:</b> {{ $blog->created_at}}</div>
                <div class="text-right"><b>Updated At:</b> {{ $blog->updated_at}}</div>
                <div class="text-left">
                    <img src="/images/blog_images/{{ $blog->image }}" width="100" height="100">
                </div>  
                <div class="text-right">
                    <a href="/articles/{{ $blog->id }}" 
                        class="items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase">View</a>
                    <a href="/articles/{{ $blog->id }}/edit" class="btn btn-info">Edit</a>
                </div>
            </div>
            <hr>
        @endforeach
    </div>
    {{ $blogs->links() }}
@endsection