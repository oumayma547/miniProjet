@extends('admin/template')

@section('home-content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <h1>Modifier le résultat</h1>
                <form action="{{ route('resultats.update', $resultat->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="student_id">Étudiant</label>
                        <select name="student_id" id="student_id" class="form-control">
                            @foreach($students as $student)
                                <option value="{{ $student->id }}" @if($student->id == $resultat->student_id) selected @endif>{{ $student->nom }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="matiere">Matière</label>
                        <input type="text" name="matiere" id="matiere" class="form-control" value="{{ $resultat->matiere }}">
                    </div>
                    <div class="form-group">
                        <label for="note">Note</label>
                        <input type="text" name="note" id="note" class="form-control" value="{{ $resultat->note }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>
@endsection
