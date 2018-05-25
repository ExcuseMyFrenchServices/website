@extends('layouts.main')

@section('head')
	<meta name="description" content="At EMF, we’ve worked with a variety of partners across Sydney, private and corporate, specialising in weddings, engagements, cocktail soirees, work functions and more.">
	<title>EMFS Events - Boutique Event Agency in Sydney</title>
@stop


@section('content')
	@include('templates.events-header')
	@include('templates.events-showcase')	
@stop