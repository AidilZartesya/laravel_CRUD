@extends('adminlte.master')

@section('content')
	<div class="ml-3">
		<h3>Detail Pertanyaan</h3>
		<p>Judul : {{$pertanyaan->judul}} </p>
		<p>Isi : {{$pertanyaan->isi}} </p>
		<p>Tanggal dibuat : {{$pertanyaan->created_at}}
		<p>Tanggal diupdate : {{$pertanyaan->updated_at}} </p>
	</div>
@endsection