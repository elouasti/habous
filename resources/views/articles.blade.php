@extends('layouts.app')

@section('content')

<div class="container">
    @foreach ($posts as $post) 
    <div class="card">
      <div class="card-header">
        <img src="{{asset('/storage/'.$post->image)}}" alt="rover" />
      </div>
      <div class="card-body">
        <h4>
            <a href="/article/{{$post->id}}">{{$post->title}}</a>
        </h4>
        <p>
            {{$post->excerpt}}
        </p>
      </div>
    </div>
    @endforeach 
</div>
<div class="articles_pagination">
    {{$posts->links()}}
</div>
@endsection