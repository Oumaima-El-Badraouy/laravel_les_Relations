@extends('layout')

@section('content')
    <h1>Liste des Modules</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Code</th>
                <th>Titre</th>
                <th>MH</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($modules as $module)
                <tr>
                    <td>{{ $module->codeM }}</td>
                    <td>{{ $module->Titre }}</td>
                    <td>{{ $module->MH }}</td>
                    <td>
                        <a href="{{ url('/modifier-module/' . $module->id) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ url('/supprimer-module/' . $module->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ url('/ajouter-module') }}" class="btn btn-primary">Ajouter un Module</a>
@endsection
