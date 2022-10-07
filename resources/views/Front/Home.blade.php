@extends('Front.Master')

@section('title', 'Home')

@section('content')
<br>
    <div class="container">
        @if(session()->has('message'))
            <div class="alert alert-success" align="center">
                {{ session()->get('message') }}
            </div>
        @endif
    </div>
    <br>
     <div class="container">
        @auth
        
    @endauth

    @guest
        <div class="alert alert-primary text-center">
            créer un nouveau compte pour accéder au tableau de bord
      </div>
    @endguest
   </div>
@include('Front.Forms')
@include('Front.just')

@include('Front.QuiNous')
@include('Front.Services')
@include('Front.Owl')

@stop
