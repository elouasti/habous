@extends('layouts.app')

@section('content')

<div class="article">
    <img src="{{'/storage/'.$post->image}}" alt="">
    <p>{!!$post->body!!}</p>
</div>

   
@endsection