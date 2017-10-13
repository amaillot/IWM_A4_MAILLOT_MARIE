@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Création de Sushi
                        <div class="pull-right">
                            <a href="{{ route('items.index') }}">--> Retour à la liste des produits</a>
                        </div>
                    </div>

                    <div class="panel-body">
                        <form method="POST" action="{{ route('items.store') }}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="Nom">Titre</label>
                                <input class="form-control" type='text' placeholder='Titre' name="Nom" id="Nom">
                            </div>
                            <div class="form-group">
                                <label for="Description">Description</label>
                                <textarea class="form-control" placeholder='Description' name="Description" id="Description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="Prix">Prix</label>
                                <input class="form-control" type="number" placeholder='Prix' name="Prix" id="Prix">
                            </div>
                            <div class="form-group">
                                <label for="Image">Image</label>
                                <textarea class="form-control" placeholder="Lien de l'image" name="Image" id="Image"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="Filtre">type de produit</label>
                                <input class="form-control" placeholder="Type de produit" name="Filtre" id="Filtre">
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