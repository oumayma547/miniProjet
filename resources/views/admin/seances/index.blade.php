@extends('admin/template')

@section('home-content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <h2>Liste des séances de cours</h2>
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th>Heure de début</th>
                            <th>Heure de fin</th>
                            <th>Enseignant</th>
                            <th>Classe</th>
                            <th>Matière</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($seances as $seance)
                            <tr>
                                <td>{{ $seance->heure_debut }}</td>
                                <td>{{ $seance->heure_fin }}</td>
                                <td>{{ $seance->teacher->name }}</td>
                                <td>{{ $seance->classe->name }}</td>
                                <td>{{ $seance->matiere }}</td>
                                <td>
                                    <a href="{{ route('seances.edit', $seance->id) }}" class="btn btn-primary">Modifier</a>
                                    <form action="{{ route('seances.destroy', $seance->id) }}" method="POST" style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
