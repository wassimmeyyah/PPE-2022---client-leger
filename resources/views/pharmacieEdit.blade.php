<head>
    <meta charset="UTF-8">
    <!-- si on veut lier à un fichier css -->
    <link rel="stylesheet" type="text/css" href="../../html/css/pharmacie.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<div class="card uper">
    <div class="card-header">
        Modifier une pharmacie
    </div>

    @if(session()->has('successEdit'))
    <div class="alert alert-success">
        <h3>{{session()->get('successEdit')}}</h3>
    </div>
    @endif

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

        <form method="post" action="{{route('pharmacie.update', ['pharmacie'=>$pharmacie->PHARMACode])}}">

            @csrf

            <input type="hidden" name="_method" value="put">

            <div class="form-group">
                <label for="PHARMACode">Identifiant de la pharmacie :</label>
                <input readonly="readonly" type="text" class="form-control" name="PHARMACode" value="{{$pharmacie->PHARMACode}}" />
            </div>

            <div class="form-group">
                <label for="PHARMAVille">Ville de la pharmacie :</label>
                <input type="text" class="form-control" name="PHARMAVille" value="{{$pharmacie->PHARMAVille}}" />
            </div>
            <div class="form-group">
                <label for="PHARMAAdresse">Adresse de la pharmacie :</label>
                <input type="text" class="form-control" name="PHARMAAdresse" value="{{$pharmacie->PHARMAAdresse}}" />
            </div>
            <div class="form-group">
                <label for="PHARMANumeroTelephone">Numéro de téléphone de la pharmacie :</label>
                <input type="text" class="form-control" name="PHARMANumeroTelephone" value="{{$pharmacie->PHARMANumeroTelephone}}" />
            </div>
            <div class="form-group">
                <label for="PHARMAMail">Adresse mail de la pharmacie :</label>
                <input selected type="text" class="form-control" name="PHARMAMail" value="{{$pharmacie->PHARMAMail}}" />
            </div>

            <br>
            <button type="submit" class="btn btn-primary" href="{{route('pharmacie')}}">Modifier</button>
            <a class="btn btn-danger" href="{{route('pharmacie')}}">Retour</a>
        </form>
    </div>
</div>