@extends('adminlte.master')

@section('content')
<div class="ml-3">
	<h1> PERTANYAAN </h1>

	<table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Isi</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($pertanyaan as $key => $tanya)
      <tr>
        <td> {{ $key + 1 }} </td>
        <td> {{ $tanya->judul }} </td>
        <td> {{ $tanya->isi }} </td>
        <td>
        	<a href="/pertanyaan/{{$tanya->id}}" class="btn btn-sm btn-info">show</a>
        	<a href="/pertanyaan/{{$tanya->id}}/edit" class="btn btn-sm btn-success">edit</a>
        	<form action="/pertanyaan/{{$tanya->id}}" method="post" style="display: inline">
        		@csrf
        		@method('DELETE')
        		<button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> </button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  	<a href="/pertanyaan/create" class="btn btn-primary">
		Create new Pertanyaan
	</a>
</div>

@endsection