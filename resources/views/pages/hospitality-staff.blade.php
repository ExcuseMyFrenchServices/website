@extends('layouts.main')

@section('head')
	<meta name="description" content="Sharp, smart and bubbly, our dedicated Sydney team of experienced food catering and hospitality staff will make an impact on every corner of the room, bringing true French style and flair to your next function.">
	<title>EMFS Services - Hospitality Staff</title>
@stop


@section('content')
	@include('templates.hospitality-staff-header')
	@include('templates.staff-body')
	@include('templates.quote')
@stop