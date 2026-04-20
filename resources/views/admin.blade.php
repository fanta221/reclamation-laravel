<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container py-5">

    <h1 class="text-center mb-4 text-primary">📊 Dashboard Admin</h1>

    <div class="row">

        <div class="col-md-3">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body text-center">
                    <h5>Total</h5>
                    <h2>{{ $total }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-dark bg-warning mb-3">
                <div class="card-body text-center">
                    <h5>En attente</h5>
                    <h2>{{ $en_attente }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-white bg-success mb-3">
                <div class="card-body text-center">
                    <h5>Validées</h5>
                    <h2>{{ $validees }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-white bg-danger mb-3">
                <div class="card-body text-center">
                    <h5>Rejetées</h5>
                    <h2>{{ $rejetees }}</h2>
                </div>
            </div>
        </div>

    </div>

    <div class="text-center mt-4">
        <a href="/reclamations" class="btn btn-dark">Voir les réclamations</a>
    </div>

</div>

</body>
</html>