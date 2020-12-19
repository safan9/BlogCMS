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
<h2 class="p-5 font-semibold text-xl text-gray-800 leading-tight">Add New Blog</h2>
<div class="p-10 container">
  <div class="row">
    <div class="col-md-6 col-lg-8 col-xl-8">
      <form method="POST" action="{{url('/articles')}}" enctype="multipart/form-data">
          @csrf
        <div class="form-group">
          <x-jet-label for="title" value="{{ __('Title') }}" />
          <x-jet-input type="text" class="form-control" id="title" name="title" placeholder="my blog title" />
        </div>
        <div class="form-group">
          <x-jet-label for="description" value="{{ __('Body (300-400 words)') }}" />
          <textarea class="form-control" id="description" name="description" rows="15"></textarea>
        </div>
        <div class="form-group">
          <x-jet-label for="image" value="{{ __('Choose Image') }}" />
          <x-jet-input type="file" class="form-control" name="blog_img" id="blog_img" />
        </div>
      </div>
      <div class="col-md-6 col-lg-6 col-xl-4 p-4">
        <x-jet-button type="submit" name="btnSave" id="btnSave" class="btn btn-success">Save</x-jet-button>
      </form>
    </div>
  </div>
</div>
@endsection