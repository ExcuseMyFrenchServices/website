@extends('layouts.main')

@section('head')
	<meta name="description" content="We can provide catering, cocktail and barista staff as well as a full suite of event management services. Our tailored packages meet the needs of any event size, location or level of complexity.">
	<title>EMFS Services - Services</title>
@stop


@section('content')
	@include('templates.services-header')
	@include('templates.services-body')
	@include('templates.quote')
@stop