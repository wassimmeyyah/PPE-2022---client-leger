<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>produits</title>
</head>

<body>

    <div class="container">
        <x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
                    {{ __('Les produits') }}
                </h2>
            </x-slot>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <div class="d-flex justify-content-between">
                                {{ $produits->links()}}
                                <p align="center">
                                    <a class="btn btn-primary "  href="{{route('produit.create')}}">
                                        Ajouter un produit
                                    </a>
                                </p>

                                @include('partials.produitSearch')

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
                                            <th class="text-center">Code du produit</th>
                                            <th class="text-center"> Libellé du produit</th>
                                            <th class="text-center"> Prix unitaire du produit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($produits as $produit)
                                        <tr>
                                            <td class="pt-3-halgf"> {{$produit->getKey()}} </td>
                                            <td class="pt-3-half"> {{$produit->PRODLibelle}} </td>
                                            <td class="pt-3-half"> {{$produit->PRODPrixUnitaire}} </td>
                                            <td><a class="btn btn-primary"  href="{{route('produit.edit', ['produit'=>$produit->PRODRef])}}">
                                                    Modifier

                                                </a>
                                            <td>
                                                <a href="#" class="btn btn-danger"  onclick="if(confirm('Voulez-vous vraiment supprimer ce produit ?')){document.getElementById('{{$produit->PRODRef}}'). submit()}">
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
                </div>
            </div>
    </div>
    </x-app-layout>
    </div>
</body>

</html>