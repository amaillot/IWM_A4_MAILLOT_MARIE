@extends('layouts.app')

@section('content')

   @guest
   CONNECTE TOI
   @else
    <div class="container container-list-product">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h1>Liste des produits</h1></div>
                    <button class="button-filter-all">All</button>
                    <button class="button-filter">Dessert</button>
                    <button class="button-filter">Plat</button>
                    <button class="button-filter">Entree</button>
                    <button class="button-filter">Boisson</button>
                    <div class="panel-body">
                        <ul>
                            @foreach ($items as $item)
                                <li class="item {{ $item->Filtre }}">
                                    <img src="{{ $item->Image }}" alt="" width="100px">
                                       <div class="detail_product">
                                     <div class="nom_product">{{ $item->Nom }}</div> : <i>{{ $item->Description }}</i>
                                    <div class="prix_product">{{ $item->Prix }} €</div>
                                       </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading"><h1>Liste des produits sélectionnés</h1></div>

                    <div class="panel-body panel-selected">

                    </div>
                    <div class="panel-footer">
                        Total : <p class="total">

                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endguest
@endsection