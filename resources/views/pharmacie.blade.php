<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Pharmacies</title>
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
                    <li class="nav-item">
                        <a class="nav-link  text-white " href="{{route('employe')}}">Les employés</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-white " href="{{route('produit')}}">Les produits</a>
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
            <h3 class="card-header text-center font-weight-bold text-uppercase py-4 p-3 mb-2 bg-primary text-white">Les pharmacies</h3>
        </div>
        <div class="d-flex justify-content-between">
            <p align="center">
                <a class="btn btn-primary " type="button" href="{{route('pharmacie.create')}}">
                    Ajouter une pharmacie
                </a>
            </p>

        </div>



        <div class="card-body">
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
                            <th class="text-center"> Identifiant de la pharmacie</th>
                            <th class="text-center"> Ville de la pharmacie</th>
                            <th class="text-center"> Adresse de la pharmacie</th>
                            <th class="text-center"> Numero de la pharmacie</th>
                            <th class="text-center"> Mail de la pharmacie</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pharmacies as $pharmacie)
                        <tr>
                            <td class="pt-3-half"> {{$pharmacie->getKey()}} </td>
                            <td class="pt-3-half"> {{$pharmacie->PHARMAVille}}</td>
                            <td class="pt-3-half"> {{$pharmacie->PHARMAAdresse}}</td>
                            <td class="pt-3-half"> {{$pharmacie->PHARMANumeroTelephone}}</td>
                            <td class="pt-3-half"> {{$pharmacie->PHARMAMail}}</td>
                            <td>
                                <a href="{{route('pharmacie.edit', ['pharmacie'=>$pharmacie->PHARMACode])}}" class="btn btn-primary" ">Modifier</a>
                            </td>
                            <td>
                                <a href="#" class="btn btn-danger" type="button" onclick="if(confirm('Voulez-vous vraiment supprimer cette pharmacie ?')){document.getElementById('{{$pharmacie->PHARMACode}}'). submit()}">
                                    Supprimer

                                </a>
                                <form id="{{$pharmacie->PHARMACode}}" action="{{route('pharmacie.supprimer',['pharmacie'=>$pharmacie->PHARMACode])}}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="delete">
                                </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>