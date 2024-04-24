@extends('admin/template')

@section('home-content')
<div class="content-wrapper">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="container mt-5">
        <h2 class="mb-4">Jours de la semaine</h2>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="list-group">
                    @foreach(['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'] as $day)
                    <div class="day-form">
                        <h3>Journée: {{ $day }}</h3>
                        <form action="{{ route('days-of-course.store') }}" method="POST">
                            @csrf
                            <!-- Ajoutez ici les champs du formulaire pour chaque journée -->
                            <input type="hidden" name="day" value="{{ $day }}">
                            <input type="hidden" name="emploi_id" value="{{ $emploieId }}">

                            <button type="submit" class="btn btn-primary">Ajouter une séance</button>
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
