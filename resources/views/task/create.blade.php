@extends('layouts.app') 

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Création de Sushi
                <div class="pull-right">
                <a href="{{ route('tasks.index') }}">--> Retour à la liste des tâches</a>
                </div>
                </div>

                <div class="panel-body">
                   <form method="POST" action="{{ route('tasks.store') }}">
                      {{csrf_field()}}
                       <div class="form-group">
                           <label for="title">Titre</label>
                           <input class="form-control" type='text' placeholder='Titre' name="title" id="title">
                       </div>
                       <div class="form-group">
                           <label for="description">Description</label>
                           <textarea class="form-control" placeholder='Description' name="description" id="description"></textarea>
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