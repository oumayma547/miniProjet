@extends('admin/template')
@section('home-content')
<div class="content-wrapper">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    @if(session('error'))
    <div class="alert alert-error">
        {{ session('error') }}
    </div>
    @endif
    <form action="{{ route('classrooms.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nom de la classe :</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="capacity" class="form-label">Capacité de la classe :</label>
            <input type="number" id="capacity" name="capacity" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter la classe</button>
    </form>
</div>
@endsection
