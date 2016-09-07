{!! Form::text('title', null, ['placeholder' => 'Titel']) !!}
{!! Form::text('uren', null, ['placeholder' => 'Uren']) !!}
{!! Form::textarea('text', null, ['placeholder' => 'Text']) !!}
{!! Form::select('tag_list[]', $tags, null, ['id' => 'tag_list','multiple']) !!}
{!! Form::submit($submitbutton) !!}

@section('footer')
	<script>
	$('#tag_list').select2();
	</script>
@endsection