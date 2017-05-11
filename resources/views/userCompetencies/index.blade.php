
@extends('layouts.app')

@section('title')
    Kies competenties

@endsection

@section('content')

	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif

<h2>Dag {{ Auth::user()->name }} ,selecteer hier je competenties</h2>


	<table class="table table-striped table-hover" style="width:100%">
		<thead>
			<th class="col-sm-4">Naam</th>
			<th class="col-sm-4">Afkorting</th>
		</thead>

		@foreach ($comps as $comp)
			<tr class="row-link" style="cursor: pointer;">
				<td class="table-text">
					<a href="{{url("/competency/$comp->id")}}"> {{ $comp->name }}</a>
				</td>
				<td>
					{{ $comp->abbreviation }}
				</td>
				<td class="table-text">
					<div class="col-md-1">
					{{ Form::open(['route' => ['userCompetencies.store'], 'method'=>'POST']) }}
					{{ Form::hidden('comp_id', $comp->id) }}
					{!! Form::submit('Kiezen', array('class'=>'btn btn-primary')) !!}
					{{ Form::close() }}
					</div>
				</td>
			</tr>
		@endforeach

	</table>



@endsection
@section('scripts')
	{{--<script>--}}
		{{--<?php--}}
			{{--if( $name == NULL) {--}}
				{{--header('Location: welcome.blade.php ');--}}
			{{--} else--}}



		{{--?>--}}

	{{--</script>--}}
<script>
	jQuery(document).ready(function($) {
	    $(".row-link").click(function() {
	        window.document.project = $(this).data("href");
	    });
	    $('#cohort-tabs a:first').tab('show') // Select first tab
	});
</script>
@endsection
