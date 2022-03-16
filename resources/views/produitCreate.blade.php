<!-- create.blade.php -->



<head>
    <meta charset="UTF-8">
    <!-- si on veut lier à un fichier css -->
    <link rel="stylesheet" type="text/css" href="../../html/css/produit.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<div class="card uper">
    <div class="card-header">
        Ajouter un produit
    </div>

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


        <form method="post" action="{{ route('produit.create') }}">
            @csrf
            <div class="form-group">
                <label for="PRODRef">Référence du produit :</label>
                <input type="text" class="form-control" name="PRODRef" />
            </div>

            <div class="form-group">
                <label for="PRODLibelle">Libellé du produit :</label>
                <input type="text" class="form-control" name="PRODLibelle" />
            </div>
            <div class="form-group">
                <label for="PRODPrixUnitaire">Prix unitaire du produit :</label>
                <input type="text" class="form-control" name="PRODPrixUnitaire" />
            </div>


            <br>
            <button type="submit" class="btn btn-primary">Ajouter</button>
            <a class="btn btn-danger" href="{{route('produit')}}">Retour</a>
        </form>
    </div>
</div>