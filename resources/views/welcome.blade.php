@extends('layouts.app')

@section('title', 'Advertex | Digital Solutions for Publisher Growth')

@section('meta_description', 'Advertex helps publishers maximize revenue with Google AdX Approval, Google Ad Manager setup, Header Bidding, inventory optimization and premium digital monetization solutions.')

@section('meta_keywords', 'Google AdX Approval, Google Ad Manager, Header Bidding, Publisher Revenue, AdSense Approved Website, Inventory Management, Digital Solutions, Advertex')

@section('og_title', 'Advertex | Digital Solutions for Publisher Growth')

@section('og_description', 'Helping publishers grow revenue with Google AdX, Header Bidding and premium monetization strategies.')

@section('twitter_title', 'Advertex | Digital Solutions')

@section('twitter_description', 'Helping publishers maximize revenue with premium monetization solutions.')






@section('content')







@include('home.hero')

@include('home.trusted')

@include('home.about')

{{-- @include('home.services') --}}

@include('home.why-us')

@include('home.dashboard-preview')

@include('home.industries')

@include('home.cta')

@include('home.payment-methods')

@include('home.faq')

@include('home.contact')

@endsection