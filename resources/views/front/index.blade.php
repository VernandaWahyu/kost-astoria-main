@extends('layouts.front.app')
@section('description')
@endsection
@section('title')
Selamat Datang di Kost Astoria
@endsection


@section('content')
@include('front.banner')
<br><br><br>
@if ($promo->count() > 0)
@include('front.sliderCard')
@endif
<br><br><br>
@include('front.cardContent')
<br><br><br>
{{-- @include('front.byKota') --}}

@endsection