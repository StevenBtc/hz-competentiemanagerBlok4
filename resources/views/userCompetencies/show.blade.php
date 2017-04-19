
@extends('layouts.app')

@section('title')
  Your competencies
@endsection

@section('content')

    <h2>Dag {{ Auth::user()->name }}, hier zijn jouw competenties</h2>


        <table class="table table-striped table-hover">
            <thead>
                <th>Jouw Competenties</th>
            </thead>
            <tbody>
            <tr>
                <td>
                    <input type="hidden" name="Language" value= <?= $userComps = DB::table('user_competencies')->pluck('competency_id');?>>

                </td>
            </tr>

            @foreach ($userComps as $userComp)
                <tr>
                    <td>
                        {{$compName = DB::table('competencies')->where('id', $userComp)->value('name')}}
                    </td>
                </tr>
            @endforeach
            </tbody>
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
