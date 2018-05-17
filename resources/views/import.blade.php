@extends('app')

@section('content')
<div class="container">
  <h1>Импорт</h1>
  <hr>
  <form action="{{ route('importation') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="exampleFormControlFile1">Файл .xlsx</label>
      <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
      <p class="help-block">Максимальный размер файла {{ ini_get('upload_max_filesize') }}</p>
    </div>
    <button type="submit" class="btn btn-success">Импорт</button>
  </form>
</div>
@endsection