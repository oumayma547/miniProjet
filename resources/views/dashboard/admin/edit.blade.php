@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">

    <div class="col-md-8">
   
   <div class="card mt-5">
       <div class="card-header ">Editer un compte</div>

                    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">




 <div class="content">
  
  <div class="card-body">
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
      <li>
        {{$error}}
      </li>
      @endforeach
    </ul>
   </div>
  @endif
  @if(session()->get('message'))
  <div class="alert alert-success" role="alert">
    <strong>Success: </strong>{{session()->get('message')}}
  </div>
  @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile de {{$user->name}}</div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if($message = Session::get('success'))
                      <div class="alert alert-success">
                   <p>{{$message}}</p>
                      </div>
                   @endif
                    <form action="{{route('admin.edit',$user->id)}}" method="POST">
                    @csrf
                       <div class="form-group">
                           <label for="name"><strong>Name:</strong></label>
                           <input type="text" class="form-control" id ="name" name="name" value="{{$user->name}}">
                       </div>
                        <div class="form-group">
                           <label for="email"><strong>Email:</strong></label>
                           <input type="text" class="form-control" id ="email" value="{{$user->email}}" name="email">
                       </div>
                        <button class="btn btn-primary" type="submit">Update Profile</button>
                        <button class="btn btn-primary" type="submit">Update Profile</button>

                   </form>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection