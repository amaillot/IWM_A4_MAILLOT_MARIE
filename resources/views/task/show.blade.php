@extends('layouts.app') 


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1><a href="{{ route('tasks.index') }}">--> Retour à la liste des tâches</a></h1></div>

                <div class="panel-body">
                <h1>Description</h1> {{ $task->description }}
                <br> Propriétaire : @if ( !empty ( $task->user->name ) ) {{ $task->user->name }} @endif 
                </div>
            </div>
        </div>
    </div>
</div>
 @endsection