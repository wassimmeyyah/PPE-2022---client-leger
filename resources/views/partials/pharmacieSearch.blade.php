<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<form action="{{ route('pharmacie.search') }}" class="d-flex mr-3">
    <div class="form-group mr-1">
            <input type="text" name="recherche" class="form-control" size="12" placeholder="Rechercher ...">
    </div>
    <button class="btn btn-primary mb-3  "><i class="bi bi-search"></i></button>
    </button>
</form>