@extends('admin/template')

@section('home-content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Modifier la salle de classe</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('classrooms.update', $classroom->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Nom de la salle de classe</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $classroom->name }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="capacity" class="form-label">Capacité de la salle de classe</label>
                            <input type="number" class="form-control" id="capacity" name="capacity" value="{{ $classroom->capacity }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                        <a href="{{ route('classrooms.index') }}" class="btn btn-secondary">Annuler</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
