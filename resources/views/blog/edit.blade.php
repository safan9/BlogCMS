@extends('dashboard')


@section('header_files')
  <script src="https://cdn.tiny.cloud/1/vqgfmk8ff0c8s2tg70qpgiek5wg922zxtmfw2imnahc43w5w/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

  <script>
    tinymce.init({
      selector: '#description',
      menubar: false
    });
  </script>
@endsection

@section('content')
<h2 class="p-5 font-semibold text-xl text-gray-800 leading-tight">Edit Blog</h2>
<div class="p-10 container">
  <div class="row">
    <div class="col-md-6 col-lg-8 col-xl-8">
      <form method="POST" action="/articles/{{ $blog->id }}">
          @csrf
          @method('patch') 

        <div class="form-group">
          <x-jet-label for="title" value="{{ __('Title') }}" />
          <x-jet-input type="text" class="form-control" id="title" name="title" 
              value="{{ $blog->title }}"    placeholder="my blog title" />
        </div>
        <div class="form-group">
          <x-jet-label for="description" value="{{ __('Body') }}" />
          <textarea class="form-control" id="description" name="description" rows="15">
              {{ $blog->description }}
          </textarea>
        </div>
    </div>
    <div class="col-md-6 col-lg-6 col-xl-4 pt-4">
        <x-jet-button type="submit" name="btnUpdate" id="btnUpdate" class="btn btn-success">Save Changes</x-jet-button>
        <a href="{{url('/articles')}}" class="btn btn-danger">Cancel</a>
      </form>
    </div>
  </div>
</div>
@endsection