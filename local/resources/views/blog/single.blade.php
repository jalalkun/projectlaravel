@extends('layouts.master')<!-- extends layout tetap dengan nama master.blade -->
<!-- simple -->
@section('title','Blog Single Farah')
<!-- struktur yg panjang -->

@section('content')
<h1>Selamat datang di Blog Kami</h1>
<h2>{{ $blog }} !!</h2>

	@foreach($nama as $userx)
		<li>{{$userx->username.' -> passwordnya : '.$userx->password}}</li>
	@endforeach

	@if(count($nama) > 5)
		<p>User lebih dari 5</p>
	@else
		<p>User kurang dari 5</p>
	@endif
@endsection