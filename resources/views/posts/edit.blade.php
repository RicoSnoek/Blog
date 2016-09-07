@extends('layout')

@section('content')
			<div class="container">	
			<div class="week-post">
				<h2 class="post-header">{!! $post->title !!}</h2>
					<div class="info-week">						
						{!! Form::model($post, ['method' => 'PATCH', 'action' => ['PostsController@update', $post->id], 'class' => 'post-form']) !!}
							@if (session('message'))
								<div class="alert alert-success">
								{{ session('message') }}
								</div>
							@endif
							@include('errors.list')
							@include('partials/form', ['submitbutton' => 'Aanpassingen opslaan'])
						{!! Form::close() !!}
					</div>
					<div class="info-button">
					</div>
			</div>
		</div>
@stop