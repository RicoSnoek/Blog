<div class="week-post">
    <h2 class="post-header"><a href="{{ action('PostsController@show', [$post->id]) }}">{{ $post->title }}</a></h2>
    <p class="post-date">{{ $post->created_at->format('d M Y') }}</p>
    <hr>
    <div class="info-week">
        <p class="info-text">{{ $post->text }}</p>
    </div>
    <hr>
    <div class="info-button">
    			<p class="info-block"><i class="fa fa-clock-o"></i>{{ $post->uren }}</p>
            <a class="btn" href="{{ action('PostsController@show', [$post->id]) }}">Lees meer</a>
    </div>
</div>  