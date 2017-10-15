@extends('layouts.app')

@section('content')

   @guest
   <div class="container alert_connexion">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <h3>
                    Veuillez vous connecter pour pouvoir commander.
                    </h3>
                    </div>
                </div>
            </div>
       </div>            
    </div>            
   @else
    <div class="container container-list-product">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                   <?php if(auth()->user()->role != 0){ ?>
                   <a style="margin-left:10px;margin-top:10px" class="link_route" href="{{ route('items.create') }}">&rarr; Création de produits &larr;</a> <?php } ?>
                    <div class="panel-heading"><h1>Liste des produits</h1></div>
                    <div class="zone_filter">
                        <button class="button-filter-all">All</button>
                        <button class="button-filter">Dessert</button>
                        <button class="button-filter">Plat</button>
                        <button class="button-filter">Entree</button>
                        <button class="button-filter">Boisson</button>
                    </div>
                    <div class="panel-body">
                        <ul>
                            @foreach ($items as $item)
                                <li class="item {{ $item->Filtre }}">
                                    <img src="{{asset( $item->Image )}}" alt="" width="100px">
                                       <div class="detail_product">
                                     <div class="nom_product">{{ $item->Nom }}</div> : <i>{{ $item->Description }}</i>
                                    <div class="prix_product">{{ $item->Prix }} €</div>

                                      <button class="button" id="{{$item->id}}">Ajouter</button>
                                       </div>

                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading"><h1>Liste des produits sélectionnés</h1></div>

                    <div class="panel-body panel-selected product_list_choice">
                    <p class="no_item">Aucun Item ajouté à la liste</p>
                    </div>
                    <div class="panel-footer">
                        <p class="nom_total">Total :</p> <p class="total"></p>
                        <p class="qty_total">Quantité : </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endguest
@endsection