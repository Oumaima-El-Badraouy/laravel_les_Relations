


    <h1>Ajouter un Module</h1>

    <form action="{{ url('/ajouter-module') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="codeM">Code</label>
            <input type="text" class="form-control" id="codeM" name="codeM" required>
        </div>
        <div class="form-group">
            <label for="Titre">Titre</label>
            <input type="text" class="form-control" id="Titre" name="Titre" required>
        </div>
        <div class="form-group">
            <label for="MH">Masse Horaire</label>
            <input type="number" class="form-control" id="MH" name="MH" required>
        </div>
        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>

