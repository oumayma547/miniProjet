<!-- resources/views/ajouter-etudiant.blade.php -->
@extends('admin/template')
@section('home-content')
<div class="content-wrapper">
  @if(session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
  @endif

    <form action="{{ url('/admin/index/student/new') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nom" class="form-label">Nom complet :</label>
            <input type="text" id="nom" name="nom" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="date_naissance" class="form-label">Date de naissance :</label>
            <input type="date" id="date_naissance" name="date_naissance" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="sexe" class="form-label">Sexe :</label>
            <select id="sexe" name="sexe" class="form-select" required>
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="nationalite" class="form-label">Nationalité :</label>
            <input type="text" id="nationalite" name="nationalite" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Adresse e-mail :</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="telephone" class="form-label">Numéro de téléphone :</label>
            <input type="text" id="telephone" name="telephone" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="niveau_etudes" class="form-label">Niveau d'études :</label>
            <input type="text" id="niveau_etudes" name="niveau_etudes" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="specialisation" class="form-label">Spécialisation / filière d'études :</label>
            <input type="text" id="specialisation" name="specialisation" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="annee_etudes" class="form-label">Année d'études :</label>
            <input type="text" id="annee_etudes" name="annee_etudes" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="statut_inscription" class="form-label">Statut de l'inscription :</label>
            <input type="text" id="statut_inscription" name="statut_inscription" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter l'étudiant</button>
    </form>
</div>

@endsection
