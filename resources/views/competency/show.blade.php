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
	<div class = "container-fluid">
		<div class="panel panel-default col-lg-6">
		  <div class="panel-heading">
		    <h3 class="panel-title">{{ $competency->name }}</h3>
		  </div>
		  <div class="panel-body">
		    <ul class="list-group">
			  <li class="list-group-item">
			    <span class="badge">{{ $competency->name }}</span>
			    Name:
			  </li>
			  <li class="list-group-item">
			    <span class="badge">{{ $competency->abbreviation }}</span>
			    Abbreviation:
			  </li>
			  <li class="list-group-item">
			    <span class="badge">{{ $competency->description }}</span>
			    Description:
			  </li>
			  <li class="list-group-item">
			    <span class="badge">{{ $competency->ec_value }}</span>
			    EC Value:
			  </li>
			  <li class="list-group-item">
			    <span class="badge">{{ $competency->cu_code }}</span>
			    CU code:
			  </li>
			</ul>
		  </div>
		  <div class="panel-footer"><a href="{{url('competency')}}" class="btn btn-danger">Back</a></div>
		</div>
	</div>
@endsection
