<form action="{{ route('articles.update' , $module->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nom">nom</label>
        <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom', $module->nom) }}" required>
    </div>
    <div class="form-group">
        <label for="prenom">prenom</label>
        <input type="text" class="form-control" id="prenom" name="prenom" value="{{ old('prenom', $module->prenom) }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Mettre à jour</button>
</form>
