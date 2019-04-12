@extends('master')

@section('title')

    Modifier livre

@endsection

{{-- methode alternative pour inclure le titre --}}
{{-- @section('title', 'Ajouter livre') --}}


@section('content')

    <h1>Ajout de Livres</h1>

    <div class="container-fluid">


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form method="post" action="{{route('postModifierLivre' , $livre->id)}}">
            @csrf
            <div class="form-group">
                <label for="titre">Titre</label>
                <input type="text" class="form-control"  placeholder="Mettez le titre" name="titre" value="{{old('titre', $livre->titre)}}">
            </div>

            <div class="form-group">
                <label for="auteur">Auteur</label>
                <input type="text" class="form-control"  placeholder="Auteur" name="auteur" value="{{old('auteur', $livre->auteur)}}">
            </div>


            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control"  rows="5" name="description"> {{old('auteur', $livre->description)}}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>



    </div>


@endsection
