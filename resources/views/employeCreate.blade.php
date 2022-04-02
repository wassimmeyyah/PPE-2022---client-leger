<!-- create.blade.php -->



<head>
    <meta charset="UTF-8">
    <!-- si on veut lier à un fichier css -->
    <link rel="stylesheet" type="text/css" href="../../html/css/employe.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Ajouter un employé') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="d-flex justify-content-between">

                        <div class="card-body">

                            @if(session()->has('success'))
                            <div class="alert alert-success">
                                <h3>{{session()->get('success')}}</h3>
                            </div>
                            @endif

                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div><br />
                            @endif


                            <form method="post" action="{{ route('employe.create') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="EMPLOYCode">Identifiant de l'employé :</label>
                                    <input type="text" class="form-control" name="EMPLOYCode" />
                                </div>

                                <div class="form-group">
                                    <label for="EMPLOYNom">Nom de l'employé :</label>
                                    <input type="text" class="form-control" name="EMPLOYNom" />
                                </div>
                                <div class="form-group">
                                    <label for="EMPLOYPrenom">Prénom de l'employé :</label>
                                    <input type="text" class="form-control" name="EMPLOYPrenom" />
                                </div>
                                <div class="form-group">
                                    <label for="EMPLOYPoste">Poste de l'employé :</label>
                                    <input type="text" class="form-control" name="EMPLOYPoste" />
                                </div>
                                <div class="form-group">
                                    <label for="EMPLOYMail">Adresse mail de l'employé :</label>
                                    <input type="text" class="form-control" name="EMPLOYMail" />
                                </div>
                                <div class="form-group">
                                    <label for="EMPLOYTelephone">Numéro de téléphone de l'employé :</label>
                                    <input type="text" class="form-control" name="EMPLOYTelephone" />
                                </div>
                                <div class="form-group">
                                    <label for="EMPLOYPharmacie">Pharmacie de l'employé :</label>
                                    <input type="text" class="form-control" name="EMPLOYPharmacie" />
                                </div>

                                <br>
                                <button  class="btn btn-primary">Ajouter</button>
                                <a class="btn btn-danger" href="{{route('employe')}}">Retour</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
</div>
</body>