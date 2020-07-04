@extends('adminlte.master')

@section('content')

<div class="ml-3">
	<form action="/jawaban/{{$jawaban->id}}" method="POST">
	@csrf
	@method('PUT')
	  <div class="form-group">
	    <label for="isi">Isi:</label>
	    <input type="text" class="form-control" placeholder="Enter isi" name="isi" value="{{$jawaban->isi}}" id="isi">
	  </div>
	  <button type="submit" class="btn btn-primary">Update</button>
	</form>
</div>

@endsection