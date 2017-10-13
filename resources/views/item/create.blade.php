@extends('layouts.app')




@section('content')
   @guest
   <div class="container alert_connexion">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <h3>
                    Veuillez vous connecter pour pouvoir accèder à cette page.
                    </h3>
                    </div>
                </div>
            </div>
       </div>            
    </div>            
   @else
    
    <?php if(auth()->user()->role != 0){ ?>

    <div class="container container-create-product">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                   <div class="pull-right">
                            <a class="link_route" href="{{ route('items.index') }}">&rarr; Retour à la liste des produits &larr;</a>
                        </div>
                    <div class="panel-heading">Création de produits
                        
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
                                <select id="select" class="form-control" name="Filtre">
                                    <option value="Dessert">Dessert</option>
                                    <option value="Plat" selected>Plat</option>
                                    <option value="Entree">Entree</option>
                                    <option value="Boisson">Boisson</option>
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
<?php    
}
else{
    echo('<div class="container alert_connexion">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <h3>
                    Vous devez être administrateur pour pouvoir accèder à cette page.
                    </h3>
                    </div>
                </div>
            </div>
       </div>            
    </div>');
};
?>
@endguest    
@endsection