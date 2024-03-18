@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
    <div class="input-group mt-8">
  <input type="search" class="form-control rounded" placeholder="Search"  id="search"  aria-label="Search" aria-describedby="search-addon" />
  <button type="button" class="btn btn-outline-primary">search</button>
</div>
        <div class="col-md-8">
   
            <div class="card mt-5">
                <div class="card-header ">Liste des Utilisateurs</div>

               


<link href="{{ asset('css/admin.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
                       </head>
                        <body>
                        </body>
                    </html>                    



<div class="content">
  

   <div class="card-body">
  

   <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>

      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($users as $user)
    
   <tr>
      <th scope="row">{{$user ->id}}</th>
      <td>{{ $user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->role}}</td>

      <td><a href="{{ route('admin.update',$user->id) }}" ><button class="btn btn-primary">Editer</button></a>
      <form action ="{{ route('admin.destroy',$user->id) }}" method="POST" class="d-inline">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger delete"> Supprimer </button>
</form>
    </td>
    </tr>
  
   @endforeach  
    
  </tbody>
</table>

</div>
</div>

               </div>
            </div>
        </div>
    </div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
  $(document).ready(function() {
    $("#search").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("table tbody tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
      });
    });
  });

  </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">

    $('.delete').click(function(event) {
        var form =  $(this).closest("form");
        event.preventDefault();
        swal({
            title: `Etes vous sure pour supprimer cet utilisateur ?`,
            text: "Il est irrécupérable",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
    });
    </script>
    
@endsection