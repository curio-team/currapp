@extends('layouts.app')

@section('buttons')
	<a href="#" class="btn btn-outline-gray"><i class="fas fa-plus"></i> Nieuwe periode</a>
@endsection

@section('subnav')
	<nav class="navbar subnav navbar-dark bg-secondary align-items-center justify-content-start">
		<h2 class="mr-3">{{ $qualification->title }} {{ $cohort->title }}</h2>
		<ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('qualifications.cohorts.show', [$qualification, $cohort]) }}">Overzicht</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('qualifications.cohorts.terms.index', [$qualification, $cohort]) }}">Periodes</a>
            </li>
        </ul>
	</nav>
@endsection

@section('content')

	//TODO

@endsection
