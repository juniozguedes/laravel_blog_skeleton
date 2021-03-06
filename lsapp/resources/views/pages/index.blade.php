@extends('layouts.app')

@section('content')
        <h1>{{$title}}</h1>
        <p>Index</p>
	@if(count($posts) > 0)
    	@foreach($posts as $post)
 			<h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
 			<p>{!!$post->body!!}</p>
 			<small>Data: {{$post->created_at}} por {{$post->user['name']}}</small>
 			@if($post->filename !== 'none')
 				<!--<p><a href="/storage/app/public/files/{{$post->filename}}">Exibir anexo</a></p>-->
 				<p><a href="{{ url('storage/files/'.$post->filename) }}" target="_blank">Exibir anexo2</a></p>
 				<!--<img src="/storage/app/files/{{$post->filename}}">-->
				<img src="{{ url('storage/files/'.$post->filename) }}" alt="" title="" /> 				

 			@endif
        @endforeach
        {{$posts->links()}}
	@else
		<p>No posts found</p>
	@endif
@endsection
