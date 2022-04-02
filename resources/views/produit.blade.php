<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>produits</title>
</head>

<body>

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-danger">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse p-3 mb-2 bg-danger " id="navbarTogglerDemo01">
                <a class="navbar-brand text-uppercase text-white " href="{{route('accueil')}}">Accueil</a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link  text-white " href="{{route('pharmacie')}}">Les pharmacies </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-white " href="{{route('employe')}}">Les employés</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-white " href="{{route('utilisateur')}}">Les utilisateurs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-white " href="{{route('commande')}}">Les commandes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-white " href="{{route('lignecommande')}}">Détail des commandes</a>
                    </li>

                </ul>
            </div>
        </nav>
        <div class="card " style="text-align: center;">
            <h3 class="card-header text-center font-weight-bold text-uppercase py-4 p-3 mb-2 bg-primary text-white">Les produits</h3>
        </div>
        <div class="d-flex justify-content-between">
            {{ $produits->links()}}
            <p align="center">
                <a class="btn btn-primary " type="button" href="{{route('produit.create')}}">
                    Ajouter un produit
                </a>
            </p>

        </div>



        <div id="table" class="table-editable bg-light">
            <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
            @if(session()->has('successDelete'))
            <div class="alert alert-success">
                <h3>{{session()->get('successDelete')}}</h3>
            </div>
            @endif
            <table class="table table-bordered table-responsive-md table-striped text-center">
                <thead>
                    <tr>
                        <th class="text-center"> Libellé du produit</th>
                        <th class="text-center"> Prix unitaire du produit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($produits as $produit)
                    <tr>
                        <td class="pt-3-half"> {{$produit->PRODLibelle}} </td>
                        <td class="pt-3-half"> {{$produit->PRODPrixUnitaire}} </td>
                        <td><a class="btn btn-primary" type="button" href="{{route('produit.edit', ['produit'=>$produit->PRODRef])}}">
                                    Modifier

                                </a>
                        <td>
                            <a href="#" class="btn btn-danger" type="button" onclick="if(confirm('Voulez-vous vraiment supprimer ce produit ?')){document.getElementById('{{$produit->PRODRef}}'). submit()}">
                                Supprimer

                            </a>
                            <form id="{{$produit->PRODRef}}" action="{{route('produit.supprimer',['produit'=>$produit->PRODRef])}}" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="delete">
                            </form>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
</body>

</html>