<!-- create.blade.php -->



<head>
    <meta charset="UTF-8">
    <!-- si on veut lier à un fichier css -->
    <link rel="stylesheet" type="text/css" href="../../html/css/utilisateur.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"></head>

<div class="card uper">
    <div class="card-header">
        Ajouter un utilisateur
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


        <form method="post" action="{{ route('utilisateur.create') }}">
            @csrf
            <div class="form-group">
                <label for="UTILCode">Identifiant de l'utilisateur :</label>
                <input type="text" class="form-control" name="UTILCode" />
            </div>

            <div class="form-group">
                <label for="UTILIdentifiant">Adresse mail de l'utilisateur :</label>
                <input type="text" class="form-control" name="UTILIdentifiant" />
            </div>
            <div class="form-group">
                <label for="UTILPassword">Mot de passe de l'utilisateur :</label>
                <input type="text" class="form-control" name="UTILPassword" />
            </div>
            <div class="form-group">
                <label for="UTILPharmacieSecteur">Pharmacie de secteur de l'utilisateur :</label>
                <input type="text" class="form-control" name="UTILPharmacieSecteur" />
            </div>

            <br>
            <button  class="btn btn-primary">Ajouter</button>
            <a class="btn btn-danger" href="{{route('utilisateur')}}">Retour</a>
        </form>
    </div>
</div>