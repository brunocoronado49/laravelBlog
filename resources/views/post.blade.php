@extends('layouts.base')

@section('content')

<!-- Contenido -->
<section class="container-fluid content py-5">
    <div class="row justify-content-center">

        <!-- Post -->
        <div class="col-12 col-md-7 text-center">
            <h1>{{$post->title}}</h1>
            <hr>
            <img src="{{asset($post->featured)}}" alt="{{$post->title}}" class="img-fluid rounded">
            <br> 
            <br>
            <p class="text-left">
                {{$post->content}}
            </p>
            <p class="text-left post-txt"><i>Categoría: {{$post->category->name}}</i></p>
        </div>

        <!-- Entradas recientes -->
        <div class="col-md-3 offset-md-1">
            <p>Últimas entradas</p>
            @foreach ($lastPosts as $post)
            <div class="row mb-4">
                <div class="col-4 p-0">
                    <a href="{{route('post', $post->id)}}">
                        <img src="{{asset($post->featured)}}" class="img-fluid rounded" width="100" alt="{{$post->title}}">
                    </a>
                </div>
                <div class="col-7 pl-0">
                    <a href="{{route('post', $post->id)}}" class="link-post">{{$post->title}}</a>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
    
@endsection