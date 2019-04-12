<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page contact</title>
</head>
<body>


<h1>Hello From the contact view</h1>


<form action="{{route('postContact')}}" method="post">

    @csrf


    <input type="text" name="nom" placeholder="tapez votre nom et prénom">

    <br>
    <br>

    <input type="text" name="email" placeholder="tapez votre email">

    <br>
    <br>


    <input type="submit" value="Envoyer">
</form>

</body>
</html>
