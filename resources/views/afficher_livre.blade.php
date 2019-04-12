@extends('master')


@section('title')

    Afficher Livre

@endsection

@section('content')


    <h1>Titre : {{$livre->titre}} </h1>
    <h1>Auteur : {{$livre->auteur}} </h1>
    <h2>Synopsis :</h2>
    <p> {{$livre->description}} </p>



    @endsection
