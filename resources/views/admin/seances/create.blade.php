@extends('admin/template')

@section('home-content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <h2>Ajouter une séance de cours</h2>
                <form action="{{ route('seances.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="heure_debut">Heure de début</label>
                        <input type="time" class="form-control" id="heure_debut" name="heure_debut" required>
                    </div>
                    <div class="form-group">
                        <label for="heure_fin">Heure de fin</label>
                        <input type="time" class="form-control" id="heure_fin" name="heure_fin" required>
                    </div>
                    <input type="hidden" name="day_of_course_id" value="{{ $dayId }}">

                    <div class="form-group">
                        <label for="teacher_id">Enseignant</label>
                        <select class="form-control" id="teacher_id" name="teacher_id" required>
                            @foreach($teachers as $teacher)
                                <option value="{{ $teacher->id }}">{{ $teacher->user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="classroom_id">Classe</label>
                        <select class="form-control" id="classroom_id" name="classroom_id" required>
                            @foreach($classes as $classe)
                                <option value="{{ $classe->id }}">{{ $classe->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="matiere">Matière</label>
                        <input type="text" class="form-control" id="matiere" name="matiere" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
@endsection
