@extends('layouts.app') 

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edition de Sushi
                <div class="pull-right">
                <a href="{{ route('tasks.index') }}">--> Retour à la liste des tâches</a>
                </div>
                </div>

                <div class="panel-body">
                   <form method="POST" action="{{route('tasks.update', $task->id)}}">
                      {{csrf_field()}}
                      
                      <input type="hidden" name="_method" value="PUT">
                       <div class="form-group">
                           <label for="title">Titre</label>
                           <input class="form-control" type='text' placeholder='Titre' name="title" id="title" value="{{$task->title}}">
                       </div>
                       <div class="form-group">
                           <label for="description">Description</label>
                           <textarea class="form-control" placeholder='Description' name="description" id="description">{{ $task->description }}</textarea>
                       </div>
                       
                        <div class="form-group">
                           <label for="done">Done or not ?</label>
                          <select name="done" class="form-control">
                              <option value="0">Fail</option>
                              <option value="1" {{$task->done ? 'selected': '' }}>Done</option>
                          </select>
                       </div>
                       <button type="submit" class="btn btn-default">Sauvegarder</button>
                       </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
 @endsection