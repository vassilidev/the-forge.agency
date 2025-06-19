@extends('layouts.app')

@section('content')
    @include('partials.hero')
    @include('partials.clients')
    @include('partials.services')
    @include('partials.discover')
    @include('partials.why-tfa')
    @include('partials.technologies')
{{--    @include('partials.blog')--}}
    @include('partials.contact')
@endsection
