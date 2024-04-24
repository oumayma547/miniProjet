@extends('admin/template')

@section('home-content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <h1>Résultats</h1>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <a href="{{ route('resultats.create') }}" class="btn btn-primary">Ajouter un résultat</a>
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>Étudiant</th>
                            <th>Matière</th>
                            <th>Note</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($resultats as $resultat)
                            <tr>
                                <td>{{ $resultat->student->nom }}</td>
                                <td>{{ $resultat->matiere }}</td>
                                <td>{{ $resultat->note }}</td>
                                <td>
                                    <a href="{{ route('resultats.edit', $resultat->id) }}" class="btn btn-primary">Modifier</a>
                                    <form action="{{ route('resultats.destroy', $resultat->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette résultat?')">Supprimer</button>
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
