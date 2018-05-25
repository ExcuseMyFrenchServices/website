@extends('layouts.main')

@section('head')
	<meta name="description" content="Tailored to suit your style and taste, we offer bartender hire as well as mobile bar hire and an array of beverage packages to ensure your guests stay merry throughout your event.">
	<title>EMFS Services - Bar Service</title>
@stop


@section('content')
	@include('templates.bar-service-header')
	@include('templates.bar-service-services-body')
	@include('templates.quote')
@stop