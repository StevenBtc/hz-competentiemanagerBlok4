@extends('layouts.app')

@section('title')
	Bewerk {{ $competency->name }}
@endsection

@section('content')
<div class = "container-fluid">
{!! Form::model($competency, ['route' => ['competency.update', $competency->id], 'method' => 'put', 'class' => 'form-horizontal']) !!}
<div class="form-group">

		<div class="col-md-4">
			{!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Naam']) !!}
		</div>
	</div>

	<div class="form-group">

			<div class="col-md-4">
				{!! Form::label('abbreviation', 'Abbreviation', ['class' => 'control-label']) !!}
				{!! Form::text('abbreviation', null, ['class' => 'form-control', 'placeholder' => 'Afkorting']) !!}
			</div>
		</div>

		<div class="form-group">

				<div class="col-md-4">
					{!! Form::label('description', 'Description', ['class' => 'control-label']) !!}
					{!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Beschrijving']) !!}
				</div>
			</div>

			<div class="form-group">

					<div class="col-md-4">
						{!! Form::label('EC-value', 'Ec-value', ['class' => 'control-label']) !!}
						{!! Form::text('EC-value', null, ['class' => 'form-control', 'placeholder' => 'Aantal ECs']) !!}
					</div>
				</div>

				<div class="form-group">

						<div class="col-md-4">
							{!! Form::label('CU-code', 'Cu-code', ['class' => 'control-label']) !!}
					    {!! Form::text('CU-code', null, ['class' => 'form-control', 'placeholder' => 'CU code']) !!}
						</div>
					</div>

	<div class="form-group">
		<div class="col-md-6">
			<button type="submit" class="btn btn-primary">
				Opslaan
			</button>
		</div>
	</div>
</div>


{!! Form::close() !!}

@endsection
