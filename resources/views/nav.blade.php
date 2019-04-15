<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="{{route('index')}}">{{$titre}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('index')}}">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="{{route('getLivres')}}">Liste Des Livres</a>
                    <a class="dropdown-item" href="{{route('ajouterLivre')}}">Ajouter Un Livre</a>
                </div>
            </li>


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catégories</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">

                    @foreach($categories as $category)
                        <a class="dropdown-item" href="{{route('getCategory', $category->id)}}">{{$category->name}}</a>


                    @endforeach


                </div>
            </li>


        </ul>
        <form class="form-inline my-2 my-lg-0" method="POST" action="{{route('searchBook')}}">
            @csrf
            <input class="form-control mr-sm-2" type="text" placeholder="Chercher Un Livre" aria-label="Search" name="search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Chercher</button>
        </form>
    </div>
</nav>
