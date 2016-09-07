@extends('layout')

@section('content')
    <div class="info-container">
        <h1 class="info-title">Overzicht</h1>
        <h3 class="info-subtitle"></h3>
        <p class="info-text">Dit is het overzicht met alle weekverslagen, je kan hieronder met tags iets makkelijker zoeken.</p>
		<div>
			<ul>
				@foreach ($tags as $tag)
					<li><a href="/tags/{{ $tag->name }}">{{ $tag->name }}</a></li>
				@endforeach	
			</ul>
		</div>
    </div>	
	<div class="container">	
    @foreach ($posts as $post)
		@include('partials/blogpost')
    @endforeach
    </div>
@stop