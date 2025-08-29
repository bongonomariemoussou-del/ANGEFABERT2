<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>modification</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
          crossorigin="anonymous">
</head>
<body>

    <div class="container mt-5">
        <h1 class="mb-4 text-center text-primary">
            modification du produit: {{ $produit->nom }}
        </h1>

        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Créer un nouveau produit</h5>
            </div>

            <div class="card-body">
                <form action="{{ route('produits.update', $produit->id) }}" method="POST">

                    @csrf
                    @method('PUT')
                    

                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom du produit</label>
                        <input type="text" name="nom" id="nom" class="form-control" value="{{ $produit->nom }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="prix" class="form-label">Prix de vente</label>
                        <input type="number" step="0.01" name="prix_vente" id="prix" class="form-control" value="{{ $produit->prix_vente}}"required>
                    </div>

                    

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" class="form-control" rows="4" required>{{ $produit->description}}"</textarea>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-success">Enregistrer</button>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FY9S3B9q64WdZWQUiU+q4/2Lc4wE4zdu3gXt7qZQZEV3zDzDk3cX7Z6GiwZrF6BT" 
            crossorigin="anonymous"></script>
</body>
</html>
