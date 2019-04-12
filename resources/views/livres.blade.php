@extends('master')


@section('title')

     Livres

@endsection

@section('content')
    <h1 class="my-5">Liste des Livres</h1>

    {{$livres->links()}}

    <table class="table table-light mb-5">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titre</th>
            <th scope="col">Auteur</th>
            <th scope="col">Catégories</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>



        @foreach($livres as $livre)
            <tr>
                <th scope="row">{{$livre->id}}</th>
                <td>{{$livre->titre}}</td>
                <td>{{$livre->auteur}}</td>
                <td>{{$livre->category->name}}</td>
                <td>
                    <a class="btn btn-warning" href="{{route('afficherLivre', $livre->id)}}" role="button">Afficher</a>
                    <a class="btn btn-success" href="{{route('getModifierLivre', $livre->id)}}" role="button">Modifier</a>
                    <a class="btn btn-danger" href="{{route('getSupprimerLivre', $livre->id)}}" role="button">Supprimer</a>

                </td>



            </tr>
            @endforeach


        </tbody>
    </table>


    {{$livres->links()}}


    <h3 class="text-left">{{$livres->count()}} livres affichés sur {{$livres->total()}}</h3>


@endsection
