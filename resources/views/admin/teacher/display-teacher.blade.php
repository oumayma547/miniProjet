@extends('admin/template')
@section('home-content')
    <div class="content-wrapper">
      @if(session('success'))
          <div class="alert alert-success">
              {{ session('success') }}
          </div>
      @endif
        <h1>Liste des enseignants</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Date d'embauche</th>
                    <th>
                      Supprimer
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $teacher->user->name }} <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-warning">Modifier</a></td>
                        <td>{{ $teacher->user->email }}</td>

                        <td>{{ $teacher->date_embauche }}</td>
                        <td>
                          <a href="{{ route('teachers.destroy', $teacher->id) }}" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Afficher les liens de pagination -->
        <div class="d-flex justify-content-center">
            {{ $teachers->links() }}
        </div>
    </div>
@endsection
