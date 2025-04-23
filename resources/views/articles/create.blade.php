


    <h1>Ajouter un Module</h1>

    <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nom">nome</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="form-group">
            <label for="Titre">prenom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" required>
        </div>

        <button  class="btn btn-success">Ajouter</button>
    </form>

