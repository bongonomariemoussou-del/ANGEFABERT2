<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    @yield('title', 'Dashboard')
  </title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Dashboard</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuOffcanvas">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <!-- OFFCANVAS MENU -->
  <div class="offcanvas offcanvas-start bg-light" tabindex="-1" id="menuOffcanvas">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title">Menu Gestion</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
      <ul class="list-group">
        <li class="list-group-item"><a href="{{ route('produits.index') }}" class="text-decoration-none">Produits</a></li>
        <li class="list-group-item"><a href="#commandes" class="text-decoration-none">Commandes</a></li>
        <li class="list-group-item"><a href="#lignes" class="text-decoration-none">Lignes de Commande</a></li>

        <li class="list-group-item">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-link text-decoration-none p-0 m-0">
                    Déconnexion
                </button>
            </form>
        </li>
      </ul>
    </div>
  </div>

  <!-- CONTENU DU DASHBOARD -->
  <div class="container mt-5 pt-4">
    @yield('content')
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>