@extends('_master')


@section('content')
	<h1>URL Shortener</h1>
	<br>
	<div class = 'form'>
	{{ Form::open(array('url' => '/generate')) }}

		{{ Form::text('URL', null, array('placeholder'=>'Enter URL to Shorten'))}}

		{{ Form::submit('Shorten', ['class' => 'button', 'id' => 'text-form']) }}
	{{ Form::close() }}


	@if(!Auth::check())
		<p class = 'login-warning'>Reminder: you are not logged in. Guests are not guaranteed to recieve unique redirect links. If you plan on tracking statistics for your links, please log in to ensure your redirect is unique.</p>
	@endif
</div>
@stop