@extends('base.admin')
@section('title', 'Dashboard')

@section('content')
    @include('components.admin.sidebar')
    <section class="portfolio_area admin" id="portfolio">
        @include('components.portfolio', [
            'RowButton' => '',
        ])
    </section>
@endsection
