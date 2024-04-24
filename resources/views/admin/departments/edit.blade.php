@extends('admin/template')

@section('home-content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6">
                <h2>Modifier un département</h2>
                <form action="{{ route('departments.update', $department->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nom du département</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $department->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="department_head_id">Chef de département</label>
                        <select class="form-control" id="department_head_id" name="department_head_id">
                            @foreach($teachers as $teacher)
                                <option value="{{ $teacher->id }}" {{ $department->department_head_id == $teacher->id ? 'selected' : '' }}>{{ $teacher->user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>
@endsection
