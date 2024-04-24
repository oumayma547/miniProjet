@extends('admin/template')

@section('home-content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <h1>Ajouter un résultat</h1>
                <form action="{{ route('resultats.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="student_id">Étudiant</label>
                        <select name="student_id" id="student_id" class="form-control">
                            @foreach($students as $student)
                                <option value="{{ $student->id }}">{{ $student->nom }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="matiere">Matière</label>
                        <input type="text" name="matiere" id="matiere" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="note">Note</label>
                        <input type="text" name="note" id="note" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
@endsection
