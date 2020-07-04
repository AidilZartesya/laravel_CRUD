@extends('adminlte.master')

@section('content')

<div class="ml-3">
	<form action="/pertanyaan/{{$pertanyaan->id}}" method="POST">
	@csrf
	@method('PUT')
	  <div class="form-group">
	    <label for="judul">Judul</label>
	    <input type="text" class="form-control" name="judul" value="{{$pertanyaan->judul}}" placeholder="Enter judul" id="judul">
	  </div>
	  <div class="form-group">
	    <label for="isi">Isi:</label>
	    <input type="text" class="form-control" placeholder="Enter isi" name="isi" value="{{$pertanyaan->isi}}" id="isi">
	  </div>
	  <button type="submit" class="btn btn-primary">Update</button>
	</form>
</div>

@endsection