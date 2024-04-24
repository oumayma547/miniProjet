@extends('admin/template')

@section('home-content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Liste des emplois du temps</h3>
                            <form id="createEmploiForm" action="{{ route('emplois.store') }}" method="POST" style="display: none;">
                                @csrf
                                <!-- Ajoutez ici les champs du formulaire si nécessaire -->
                            </form>

                            <a href="#" onclick="event.preventDefault(); document.getElementById('createEmploiForm').submit();" class="btn btn-primary">Nouvel emploi</a>


                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Contenu</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($emplois as $emploi)
                                        <tr>
                                            <td>{{ $emploi->id }}</td>
                                            <td>
                                              @foreach ($emploi->daysOfCourse as $day)
                                                <ul>
                                                  <li>{{$day->date}}</li>
                                                  <ul>
                                                    @php
                                                        $counter = 1;
                                                    @endphp
                                                  @foreach ($day->seances as $seance)
                                                    <h6>Séance : {{ $counter++ }} </h6>
                                                    <li>Début : {{$seance->heure_debut}}</li>
                                                    <li>Fin : {{$seance->heure_fin}}</li>
                                                    <li>Professeur : {{$seance->teacher_id}}</li>
                                                    <li>Classe : {{$seance->classroom_id}}</li>
                                                    <li>Matiére : {{$seance->matiere}}</li>
                                                      <br>
                                                  @endforeach
                                                  </ul>
                                                </ul>
                                              @endforeach
                                            </td>
                                            <td>
                                              <a type="button" class="btn btn-primary"  href="{{ route('days-of-course.create', ['emploieId' => $emploi->id]) }}">Ajouter un Day</a>
                                              <form action="{{ route('emplois.destroy', $emploi->id) }}" method="POST" class="d-inline">
                                                  @csrf
                                                  @method('DELETE')
                                                  <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet emploi?')">Supprimer</button>
                                              </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <script>
      import Swal from 'sweetalert2';
        function openModal(emploiId) {
            // Liste des jours de la semaine en français
            const joursSemaine = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];

            // Création du contenu de la fenêtre modale
            let modalContent = '<h4>Ajouter un jour</h4>';
            modalContent += '<select class="form-control">';
            joursSemaine.forEach(jour => {
                modalContent += `<option value="${jour}">${jour}</option>`;
            });
            modalContent += '</select>';

            // Affichage de la fenêtre modale avec le contenu créé
            swal({
                title: '',
                html: modalContent,
                showCancelButton: true,
                confirmButtonText: 'Ajouter',
                cancelButtonText: 'Annuler'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Récupérer la valeur sélectionnée et faire quelque chose avec, comme l'envoyer à votre backend
                    const selectedDay = document.querySelector('.swal-content select').value;
                    console.log(selectedDay);
                    // Ici, vous pouvez faire une requête AJAX pour ajouter le jour sélectionné à l'emploi correspondant
                    // Assurez-vous d'adapter cette étape à votre backend et à votre logique métier
                }
            });
        }
    </script>

@endsection
