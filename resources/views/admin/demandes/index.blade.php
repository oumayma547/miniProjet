@extends('admin/template')

@section('home-content')
<div class="content-wrapper">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Contenu</th>
                <th>Étudiant</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($demandes as $demande)
            <tr>
                <td>{{ $demande->id }}</td>
                <td>{{ $demande->contenu }}</td>
                <td>{{ $demande->etudiant->nom }}</td>
                <td>{{ $demande->status }}</td>
                <td>
                    <form action="{{ route('demandes.accept', $demande->id) }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-success">Accepter</button>
                    </form>
                    <form action="{{ route('demandes.reject', $demande->id) }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-danger">Refuser</button>
                    </form>
                    <form action="{{ route('demandes.destroy', $demande->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-warning">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
