@extends('admin/template')

@section('home-content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Liste des salles de classe</h3>
                    <div class="card-tools">
                        <a href="{{ route('classrooms.create') }}" class="btn btn-primary">Ajouter une salle de classe</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Capacitée</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($classrooms as $classroom)
                            <tr>
                                <td>{{ $classroom->id }}</td>
                                <td>{{ $classroom->name }}</td>
                                <td>{{ $classroom->capacity }}</td>
                                <td>
                                    <a href="{{ route('classrooms.edit', $classroom->id) }}" class="btn btn-warning">Modifier</a>
                                    <form action="{{ route('classrooms.destroy', $classroom->id) }}" method="POST" style="display: inline-block;">
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
                <div class="card-footer clearfix">
                    {{ $classrooms->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
