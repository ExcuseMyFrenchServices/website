@extends('layouts.main')

@section('head')
	<meta name="description" content="EMF take the hassle out of organising a function; whether it’s private or corporate event planning, our team of Sydney event planners can manage a full suite of services.">
	<title>EMFS Services - Event Management</title>
@stop


@section('content')
	@include('templates.event-header')
	@include('templates.event-body')
	@include('templates.quote')
@stop