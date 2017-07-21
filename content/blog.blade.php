@extends('_includes.base')

@section('pageTitle', '- Blog')

@section('body')

@foreach($paginatedBlogPosts as $post)
    <article>
        <h3>{{ $post->title }}</h3>
        <small>{{ $post->date }}</small>
        <hr>
        {{ str_limit($post->brief, 130) }}
        <br>
        <a class="btn btn-default" href="@url($post->path)">Read More</a>
    </article>
@endforeach


@stop
