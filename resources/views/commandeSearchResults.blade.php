<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Commandes</title>
</head>

<body>

    <div class="container">
        <x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
                    {{ __('Les commandes') }}
                </h2>
            </x-slot>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <div class="d-flex justify-content-between">
                                {{ $commandes->links()}}
                                <p align="center">
                                    <a class="btn btn-primary" href="{{route('commande.create')}}">
                                        Ajouter une commande
                                    </a>
                                </p>

                                @include('partials.commandeSearch')

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
                                                <th class="text-center"> Référence de la commande </th>
                                                <th class="text-center"> Utilisateur ayant passé la commande </th>
                                                <th class="text-center"> Date de la commande </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($commandes as $commande)
                                            <tr>
                                                <td class="pt-3-half"> {{$commande->getKey()}} </td>
                                                <td class="pt-3-half"> {{$commande->UTILCode}} </td>
                                                <td class="pt-3-half"> {{$commande->COMDate}} </td>
                                                <td><a class="btn btn-primary" href="{{route('commande.edit', ['commande'=>$commande->COMRef])}}">
                                                        Modifier

                                                    </a>
                                                <td>
                                                    <a href="#" class="btn btn-danger" onclick="if(confirm('Voulez-vous vraiment supprimer cette commande ?')){document.getElementById('{{$commande->COMRef}}'). submit()}">
                                                        Supprimer

                                                    </a>
                                                    <form id="{{$commande->COMRef}}" action="{{route('commande.supprimer',['commande'=>$commande->COMRef])}}" method="post">
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
                    </div>
                </div>
            </div>
        </x-app-layout>
    </div>
</body>

</html>