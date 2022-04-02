<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Employes</title>
</head>

<body>

    <div class="container">
        <x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
                    {{ __('Les employés') }}
                </h2>
            </x-slot>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <div class="d-flex justify-content-between">
                                    {{ $employes->links()}}
                                    <p align="center">
                                        <a class="btn btn-primary " href="{{route('employe.create')}}">
                                            Ajouter un employé
                                        </a>
                                    </p>

                                    @include('partials.employeSearch')

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
                                                    <th class="text-center"> Code de l'employé</th>
                                                    <th class="text-center"> Nom de l'employé</th>
                                                    <th class="text-center"> Prénom de l'employé</th>
                                                    <th class="text-center"> Poste de l'employé</th>
                                                    <th class="text-center"> Mail de l'employé</th>
                                                    <th class="text-center"> Téléphone de l'employé</th>
                                                    <th class="text-center"> Pharmacie de l'employé</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($employes as $employe)
                                                <tr>
                                                    <td class="pt-3-half"> {{$employe->getKey()}} </td>
                                                    <td class="pt-3-half"> {{$employe->EMPLOYNom}} </td>
                                                    <td class="pt-3-half"> {{$employe->EMPLOYPrenom}} </td>
                                                    <td class="pt-3-half"> {{$employe->EMPLOYPoste}} </td>
                                                    <td class="pt-3-half"> {{$employe->EMPLOYMail}} </td>
                                                    <td class="pt-3-half"> {{$employe->EMPLOYTelephone}} </td>
                                                    <td class="pt-3-half"> {{$employe->EMPLOYPharmacie}} </td>
                                                    <td><a class="btn btn-primary" href="{{route('employe.edit', ['employe'=>$employe->EMPLOYCode])}}">
                                                            Modifier

                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="btn btn-danger" onclick="if(confirm('Voulez-vous vraiment supprimer cet employé ?')){document.getElementById('{{$employe->EMPLOYCode}}'). submit()}">
                                                            Supprimer

                                                        </a>
                                                        <form id="{{$employe->EMPLOYCode}}" action="{{route('employe.supprimer',['employe'=>$employe->EMPLOYCode])}}" method="post">
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
                        </div>
                    </div>
                </div>
            </div>
        
        </x-app-layout>
    </div>
</body>

</html>