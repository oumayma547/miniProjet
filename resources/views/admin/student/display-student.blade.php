


@extends('admin/template')
@section('home-content')
<div class="content-wrapper">
  <br>
  @if(session('messages'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
  @endif

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nom complet</th>
                    <th>Date de naissance</th>
                    <th>Sexe</th>
                    <th>Nationalité</th>
                    <th>Adresse e-mail</th>
                    <th>Numéro de téléphone</th>
                    <th>Niveau d'études</th>
                    <th>Spécialisation / filière d'études</th>
                    <th>Année d'études</th>
                    <th>Statut de l'inscription</th>
                    <th>#</th>
                    <!-- Ajoutez d'autres en-têtes de colonnes selon vos besoins -->
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr>
                  <td>{{ $student->nom }} <a href="/admin/index/student/{{ $student->id }}" class="btn btn-warning">Modifier</a></td>

                    <td>{{ $student->date_naissance }}</td>
                    <td>{{ $student->sexe }}</td>
                    <td>{{ $student->nationalite }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->telephone }}</td>
                    <td>{{ $student->niveau_etudes }}</td>
                    <td>{{ $student->specialisation }}</td>
                    <td>{{ $student->annee_etudes }}</td>
                    <td>{{ $student->statut_inscription }}</td>
                    <td>
                        <form action="{{ @url('admin/index/student/destroy', $student->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger delete-btn">Supprimer</button>
                        </form>

                    </td>
                    <!-- Ajoutez d'autres colonnes avec les détails de chaque étudiant -->
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Afficher les liens de pagination -->
    <div class="d-flex justify-content-center">
        <nav>
            <ul class="pagination">
                {{ $students->links() }}
            </ul>
        </nav>
    </div>

</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var deleteButtons = document.querySelectorAll('.delete-btn');
        deleteButtons.forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                var confirmation = confirm("Êtes-vous sûr de vouloir supprimer cet étudiant ?");
                if (confirmation) {
                    // Soumettre le formulaire de suppression
                    this.closest('form').submit();
                }
            });
        });
    });
</script>
@endsection
