@extends('dashboard')

@section('content')

    <div class="p-12 container">
        <div class="row">
            <div class="col-md-6 col-lg-8 col-xl-8">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ $blog->title }}</h2>
                <div>
                    <img src="/images/blog_images/{{ $blog->image }}" class="img-fluid">
                </div>
                <hr>
                <p>{!! $blog->description !!}</p>
            </div>
            <hr>
            <div class="col-md-6 col-lg-6 col-xl-4 p-4"> 
                <form action="/articles/{{ $blog->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <x-jet-button type="submit" class="btn btn-danger">Delete</x-jet-button>
                    <a href="{{url('/articles')}}" class="btn btn-warning">Back</a>
                </form>
            </div>
        </div>
    </div>

@endsection