@extends('layouts.main')

@section('head')
	<meta name="description" content="Set up one of our coffee carts at a breakfast seminar or organise a quick caffeine fix for an employee training session at the office.">
	<title>EMFS Services - Coffee Service</title>
@stop


@section('content')
	@include('templates.coffee-header')
	@include('templates.coffee-body')
	@include('templates.quote')
@stop