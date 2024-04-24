@extends('admin/template')

@section('home-content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <h2>Modifier une séance de cours</h2>
                <form action="{{ route('seances.update', $seance->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="heure_debut">Heure de début</label>
                        <input type="time" class="form-control" id="heure_debut" name="heure_debut" value="{{ $seance->heure_debut }}" required>
                    </div>
                    <div class="form-group">
                        <label for="heure_fin">Heure de fin</label>
                        <input type="time" class="form-control" id="heure_fin" name="heure_fin" value="{{ $seance->heure_fin }}" required>
                    </div>
                    <div class="form-group">
                        <label for="teacher_id">Enseignant</label>
                        <select class="form-control" id="teacher_id" name="teacher_id" required>
                            @foreach($teachers as $teacher)
                                <option value="{{ $teacher->id }}" {{ $seance->teacher_id == $teacher->id ? 'selected' : '' }}>{{ $teacher->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="classe_id">Classe</label>
                        <select class="form-control" id="classe_id" name="classe_id" required>
                            @foreach($classes as $classe)
                                <option value="{{ $classe->id }}" {{ $seance->classe_id == $classe->id ? 'selected' : '' }}>{{ $classe->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="matiere">Matière</label>
                        <input type="text" class="form-control" id="matiere" name="matiere" value="{{ $seance->matiere }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </form>
            </div>
        </div>
    </div>
@endsection
