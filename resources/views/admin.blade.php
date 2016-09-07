@extends('layout')

@section('content')
		<div class="container">
			{!! Form::open(['class' => 'post-form']) !!}
				@if (session('message'))
			    <div class="alert alert-success">
			        {{ session('message') }}
			    </div>
				@endif
				@include('errors.list')
				@include('partials/form', ['submitbutton' => 'Maak weekverslag aan'])
			{!! Form::close() !!}
		</div>
@stop
