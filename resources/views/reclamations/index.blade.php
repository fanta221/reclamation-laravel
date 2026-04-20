<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Système de Réclamations</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-4">
    <div class="text-center mt-3 mb-4">
        <div class="p-3 bg-primary text-white rounded">
    <h1>Module : Gestion des Réclamations des notes d'examen</h1>
    </div>
    </div>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


<h2 class="mb-4">Envoyer une réclamation</h2>

<!-- FORMULAIRE -->
<form method="POST" action="{{ route('reclamations.store') }}" class="card p-3 mb-4">
    @csrf

    <div class="mb-3">
        <label>Nom</label>
        <input type="text" name="nom" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Matière</label>
        <input type="text" name="matiere" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Message</label>
        <textarea name="message" class="form-control" required></textarea>
    </div>

    <button class="btn btn-primary">Envoyer</button>
</form>

<!-- TABLEAU -->
<h2 class="mb-3">Liste des réclamations</h2>

<table class="table table-bordered table-striped">

    <thead class="table-dark">
        <tr>
            <th>Nom</th>
            <th>Matière</th>
            <th>Message</th>
            <th>Statut</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        @foreach($reclamations as $reclamation)
        <tr>
            <td>{{ $reclamation->nom }}</td>
            <td>{{ $reclamation->matiere }}</td>
            <td>{{ $reclamation->message }}</td>

            <td>
                @if($reclamation->statut == 'en attente')
                    <span class="badge bg-warning text-dark">En attente</span>
                @elseif($reclamation->statut == 'validée')
                    <span class="badge bg-success">Validée</span>
                @else
                    <span class="badge bg-danger">Rejetée</span>
                @endif
            </td>

            <td>
                <a href="{{ route('reclamations.valider', $reclamation->id) }}" class="btn btn-success btn-sm">Valider</a>
                <a href="{{ route('reclamations.rejeter', $reclamation->id) }}" class="btn btn-danger btn-sm">Rejeter</a>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>

</body>
</html>