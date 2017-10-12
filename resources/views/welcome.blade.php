@extends('layouts.app')
@section('content')

            <div class="content">
                <div class="title m-b-md">
                   @guest
                    Bonjour Invité
                    @else
                    Bonjour {{ Auth::user()->name }}
                    @endguest
<!--                    //recup variable-->
                </div>

                <div class="links">
                    <a href="/items">Commander</a>
                    -
                    <a href="#">A propos de</a>
                    -
                    <a href="#">Contact</a>
                    -
                </div>
            </div>
        </div>
@endsection