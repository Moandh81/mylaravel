@component('mail::message')
# Introduction


Vous avez reçu un email de la part de :

# Nom :
{{$data['nom']}}


<h1> Nom : {{$data['nom']}} </h1>

<h1> Email  : {{$data['email']}} </h1>

<h1> Message  : {{$data['message']}} </h1>


@component('mail::button', ['url' => ''])

    Cliquer Ici !




@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
