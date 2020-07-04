@extends('adminlte.master')

@section('content')
<div class="ml-3">
	<h1> JAWABAN </h1>

	<table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Jawaban</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($jawaban as $key => $jawab)
      <tr>
        <td> {{ $key + 1 }} </td>
        <td> {{ $jawab->isi }} </td>
        <td>
        	<a href="/jawaban/{{$jawab->id}}/edit" class="btn btn-sm btn-success">edit</a>
        	<form action="/jawaban/{{$jawab->id}}" method="post" style="display: inline">
        		@csrf
        		@method('DELETE')
        		<button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> </button>
        	</form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a href="/jawaban/create" class="btn btn-primary">
		Create new Jawaban
	</a>
  <a href="/pertanyaan" class="btn btn-warning">
    Pertanyaan
  </a>
</div>

@endsection