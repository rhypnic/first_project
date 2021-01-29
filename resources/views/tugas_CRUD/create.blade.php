@extends('tugas_laravel_2.blank')

@section ('content')
<div class="card card-primary ml-3 mt-3">
    <div class="card-header">
      <h3 class="card-title">Create your post</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/pertanyaan" method="POST">
        @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="title">judul</label>
          <input type="title" class="form-control" id="title" name ="judul" value="{{old('judul', '') }}" placeholder="buat judul" required>
          @error('judul')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="form-group">
          <label for="body">isi</label>
          <input type="body" class="form-control" id="body" name="isi" value="{{old('isi', '') }}" placeholder="buat isi" required>
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