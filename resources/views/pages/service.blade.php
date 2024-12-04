@extends('base.admin')
@section('title', 'About')

@section('content')
    @include('components.header')
    @include('components.banner', [
        'title' => 'Service',
        'link' => 'Service',
    ])
    <section class="features_area section_gap_top">
        @include('components.features')
    </section>
    @include('components.testimoni')
    @include('components.news-letter')
    @include('components.footer')
@endsection
