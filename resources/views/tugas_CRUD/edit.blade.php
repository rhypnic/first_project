@extends('tugas_laravel_2.blank')

@section ('content')
<div class="card card-primary ml-3 mt-3">
    <div class="card-header">
      <h3 class="card-title">edit post{{$posts->id}}</h3>
    </div>
    <!-- card-header -->
    <!-- form start -->
    <form role="form" action="/pertanyaan/{{$posts->id}}" method="POST">
       
        @csrf
        @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="title">judul</label>
          <input type="title" class="form-control" id="title" name ="judul" value="{{ old('judul', $posts->judul) }}" placeholder="buat judul" required>
          @error('judul')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="form-group">
          <label for="body">isi</label>
          <input type="body" class="form-control" id="body" name="isi" value="{{old('isi',  $posts->isi) }}" placeholder="buat isi" required>
          @error('isi')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
       
        
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Create</button>
      </div>
    </form>
  </div>
@endsection