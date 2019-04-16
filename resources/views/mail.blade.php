@extends('master')


@section('content')


<h1 class="my-5">Contactez-nous</h1>

    <form method="post" action="{{route('postEmail')}}">

        @csrf

        <div class="form-group">
            <label for="exampleInputPassword1">Nom</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Votre nom" name="nom">
        </div>


        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
        </div>



        <div class="form-group">
            <label for="exampleFormControlTextarea1">Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



    @endsection
