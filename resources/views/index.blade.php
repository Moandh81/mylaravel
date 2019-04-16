@extends('master')


@section('content')

        <h1>Home Page</h1>

        @auth

                   <h1 class="text-center mt-3">{{trans('messages.welcome' , ['name'=> Auth::user()->name])}}</h1>

        @endauth

    @endsection
