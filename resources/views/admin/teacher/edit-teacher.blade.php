@extends('admin/template')

@section('home-content')
    <div class="content-wrapper">
        <h3>Modifier l'enseignant</h3>
        <form method="POST" action="{{ route('teachers.update', $teacher->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $teacher->user->name }}">
            </div>

            <div class="form-group">
                <label for="email">Adresse e-mail</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $teacher->user->email }}">
            </div>

            <div class="form-group">
                <label for="date_embauche">Date d'embauche</label>
                <input type="date" class="form-control" id="date_embauche" name="date_embauche" value="{{ $teacher->date_embauche }}">
            </div>

            <button type="submit" class="btn btn-primary">Mettre à jour</button>
            <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
@endsection
