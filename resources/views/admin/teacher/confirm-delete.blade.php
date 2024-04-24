@extends('admin/template')

@section('home-content')
    <div class="content-wrapper">
        <h3>Voulez-vous vraiment supprimer cet enseignant ?</h3>
        <form method="POST" action="{{ route('admin.teachers.delete', $teacher->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Supprimer</button>
            <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
@endsection
