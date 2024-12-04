@extends('base.admin')
@section('title', 'About')

@section('content')
    @include('components.header')
    @include('components.banner', [
        'title' => 'About Us',
        'link' => 'About',
    ])
    @include('components.about')
    @include('components.brand')
    @include('components.testimoni')
    @include('components.news-letter')
    @include('components.footer')
@endsection
