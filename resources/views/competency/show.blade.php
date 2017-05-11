    @extends('layouts.app')

@section('title')
<div class="row">
	<div class="col-sm-10">
			({{$competency->id}}) {{$competency->name}}
	</div>
	<div class="col-sm-1">
		 <a class="btn btn-default" href="{{action('CompetencyController@edit', $competency->id)}}">Bewerken</a>
	</div>
	<div class="col-sm-1">
			{!! Form::open(['route' => ['competency.destroy', $competency->id], 'method'=>'DELETE']) !!}
			{!! Form::submit('Verwijderen', array('class'=>'btn btn-danger')) !!}
			{!! Form::close() !!}
	</div>
</div>
@endsection

@section('content')
<table class="table table-striped table-hover">
	<thead>
		<th class="col-sm-1">ID</th>
		<th class="col-sm-3">Naam</th>
		<th class="col-sm-1">Afkorting</th>
		<th class="col-sm-1">EC waarde</th>
		<th class="col-sm-1">CU code</th>
	</thead>
	<tbody>
		<tr class="row-link" style="cursor: pointer;"
			data-href="{{action('CompetencyController@show', ['id' => $competency->id]) }}">
			<td class="table-text">{{ $competency->id }}</td>
			<td class="table-text">{{ $competency->name }}</td>
			<td class="table-text">{{ $competency->abbreviation }}</td>
			<td class="table-text">{{ $competency->ec_value }}</td>
			<td class="table-text">{{ $competency->cu_code }}</td>
		</tr>
		<tr>
			<td><b>Description:</b></td>
			<td class="table-text">{{ $competency->description }}</td>
		</tr>
	</tbody>
</table>
@endsection
