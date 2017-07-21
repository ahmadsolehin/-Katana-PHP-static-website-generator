@extends('_includes.base')

@section('pageDescription')@yield('post::brief')@endsection

@section('body')
    <a href="@url('blog')">Back to blog</a>
    <h1>@yield('post::title')</h1>
    <small>@yield('post::date')</small>
    <hr>
    @yield('post_body')
@stop
