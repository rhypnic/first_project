@extends('tugas_laravel_2.blank')

@section ('content')
<div class="mt-3 ml-3">
 <tr>
<h1> {{$posts->judul}}</h1>
<p> {{$posts->isi}}</p>
</tr> 
</div>

@endsection