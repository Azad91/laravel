@extends('back.layouts.master')
@section('title', 'Sayfa olustur')
@section('content')
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary float-right">
        @yield('title')
      </h6>
    </div>
    <div class="card-body">
      @if($errors->any())
        <div class="alert alert-danger">
          @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
          @endforeach
        </div>
      @endif
      <form method="post" action="{{route('admin.page.create.post')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label>Sayfa basligi</label>
          <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Sayfa fotografi</label>
          <input type="file" name="image" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Sayfa icerigi</label>
          <textarea name="content" id="editor" rows="4" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block">Sayfayi olsutur</button>
        </div>
      </form>
  </div>
@endsection
@section('css')
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('js')
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#editor').summernote({
        'height':250
      });
    });
  </script>
@endsection
