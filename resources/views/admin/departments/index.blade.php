@extends('admin/template')

@section('home-content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <h2>Liste des départements</h2>
                <a href="{{ route('departments.create') }}" class="btn btn-primary mb-3">Ajouter un département</a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Chef de département</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($departments as $department)
                            <tr>
                                <td>{{ $department->name }}</td>
                                <td>{{ $department->department_head->user->name }}</td>
                                <td>
                                    <a href="{{ route('departments.edit', $department->id) }}" class="btn btn-primary">Modifier</a>
                                    <form action="{{ route('departments.destroy', $department->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette salle de classe?')">Supprimer</button>
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
