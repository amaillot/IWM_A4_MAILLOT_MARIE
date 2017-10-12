@extends('layouts.app') 

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Liste des tâches</h1></div>

                <div class="panel-body">
                
                 <ul> @foreach($tasks as $task)
                <li> <a href="{{ route('tasks.show', $task->id) }}">
                {{ $task->title }}
                
                @if($task->done)
                <span class="label label-success">Success</span>
                @else
                <span class="label label-danger">Fail</span>
                @endif
                
                </a> </li> @endforeach </ul>
                </div>
            </div>
        </div>
    </div>
</div>
 @endsection