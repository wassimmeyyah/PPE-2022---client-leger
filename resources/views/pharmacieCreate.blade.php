<!-- create.blade.php -->



<head>
        <meta charset="UTF-8">
        <!-- si on veut lier à un fichier css -->
        <link rel="stylesheet" type="text/css" href="../../html/css/pharmacie.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    </head>

    <div class="card uper">
        <div class="card-header">
            Ajouter une pharmacie
        </div>

        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif


            <form method="post" action="{{ route('pharmacie.create') }}">
                @csrf
                <div class="form-group">
                    <label for="PHARMACode">Identifiant de la pharmacie :</label>
                    <input type="text" class="form-control" name="PHARMACode"/>
                </div>

                <div class="form-group">
                    <label for="PHARMAVille">Ville de la pharmacie :</label>
                    <input type="text" class="form-control" name="PHARMAVille"/>
                </div>
                <div class="form-group">
                    <label for="PHARMAAdresse">Adresse de la pharmacie :</label>
                    <input type="text" class="form-control" name="PHARMAAdresse"/>
                </div>
                <div class="form-group">
                    <label for="PHARMANumeroTelephone">Numéro de téléphone de la pharmacie :</label>
                    <input type="text" class="form-control" name="PHARMANumeroTelephone"/>
                </div>
                <div class="form-group">
                    <label for="PHARMAMail">Adresse mail de la pharmacie :</label>
                    <input type="text" class="form-control" name="PHARMAMail"/>
                </div>
                
                <button type="submit" class="btn btn-primary">Ajouter</button>
                <a class="btn btn-danger" href="{{route('pharmacie')}}">Annuler</a>
            </form>
        </div>
    </div>

