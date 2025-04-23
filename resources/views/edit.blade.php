<form action="{{ url('/modifier-module/' . $module->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="codeM">Code du Module</label>
        <input type="text" class="form-control" id="codeM" name="codeM" value="{{ old('codeM', $module->codeM) }}" required>
    </div>
    <div class="form-group">
        <label for="Titre">Titre</label>
        <input type="text" class="form-control" id="Titre" name="Titre" value="{{ old('Titre', $module->Titre) }}" required>
    </div>
    <div class="form-group">
        <label for="MH">Masse Horaire</label>
        <input type="number" class="form-control" id="MH" name="MH" value="{{ old('MH', $module->MH) }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Mettre à jour</button>
</form>
