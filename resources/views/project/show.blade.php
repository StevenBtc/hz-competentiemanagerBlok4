@extends('layouts.app')

@section('title')
    <div class="row">
        <div class="col-sm-10">
            ({{$project->id}}) {{$project->name}}
        </div>

    </div>

@endsection
@section('content')
    <table class="table table-striped table-hover">

        <tbody>
        <tr class="row-link" style="cursor: pointer;"
            data-href="{{action('ProjectController@show', ['id' => $project->id]) }}">
            <td class="table-text">{{ $project->id }}</td>
            <td class="table-text">{{ $project->name }}</td>
            <td class="table-text">{{ $project->description }}</td>

        </tr>
        </tbody>
    </table>
@endsection
