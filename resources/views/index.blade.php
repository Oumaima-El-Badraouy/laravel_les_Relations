@if(session('success'))
  <p style="background:green ;width:50%;height:30px"> {{ session('success') }}</p>
  @endif

  <!DOCTYPE html>
  <html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Liste des Modules</title>

      <!-- Bootstrap 5 CDN -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body class="bg-light">

      <div class="container mt-5">
          <div class="d-flex justify-content-between align-items-center mb-4">

              <form action="{{ url('/modules') }}" method="GET" class="mb-4 d-flex">
                <input type="text" name="search" class="form-control me-2" placeholder=" Rechercher par titre ou code..." value="{{ request('search') }}">
                <button type="submit" class="btn btn-primary">Rechercher</button>
            </form>

              <a href="{{ url('/ajouter-module') }}" class="btn btn-success">Ajouter un Module</a>
          </div>

          <table class="table table-bordered table-hover bg-white shadow-sm">
              <thead class="table-dark">
                  <tr>
                      <th scope="col">Code</th>
                      <th scope="col">Titre</th>
                      <th scope="col">MH</th>
                      <th scope="col">Actions</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($m as $module)
                      <tr>
                          <td>{{ $module->codeM }}</td>
                          <td>{{ $module->Titre }}</td>
                          <td>{{ $module->MH }}</td>
                          <td>
                              <a href="{{ url('/modifier-module/' . $module->id) }}" class="btn btn-warning btn-sm me-1">Modifier</a>
                              <form action="{{ url('/supprimer-module/' . $module->id) }}" method="POST" style="display:inline-block">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                              </form>
                          </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
          <div>
          <form action="{{ url('/supprimer-tous')}} " method="POST" style="display:inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Supprimer tous</button>
          </form>
          <form action="{{ url('/afficher-tous')}} " method="POST" style="display:inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Afficher  tous</button>
          </form>
</div>
          <div class="d-flex justify-content-center mt-2">
              {{ $m->links() }}
          </div>
     </div>

      <!-- Bootstrap JS (optional, for dropdowns, etc.) -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>
