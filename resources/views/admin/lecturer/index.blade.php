{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<body>
</body>
</html>

 --}}

 @extends('backend.master')
 @section('content')
 <div class="card-body">
     <div class=" mt-5 container table-hover">
     <a class="btn btn-primary btn-lg btn-circle" href="{{route('create-lecturer')}}">+</a>
    <nav class="navbar navbar-light bg-light">
      
     <a class="navbar-brand">Data Dosen</a>
    </nav>
    
    @if (session('status'))
    <script>
        Swal.fire({
            icon: 'successs',
            title:'suksess!!!',
            text: "{{session('status')}}",
        });
    </script>
        
    @endif
  <table class="table">
     <thead class="table-secondary">
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nidn</th>
      <th scope="col">Name</th>
      <th scope="col">Adddress</th>
      <th scope="col">Phone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($Lecturer as $index=> $item)
   <tr>
     <th scope="row">{{$index + 1}}</th>
     <td>{{$item->nidn}}</td>
     <td>{{$item->name}}</td>
     <td>{{$item->address}}</td>
     <td>{{$item->phone}}</td>
    <td> 

      <a class="btn btn-secondary" href="{{route('edit-lecturer',$item->id)}}">Edit</a>
      <form action="{{route('delete-lecturer', $item->id)}}" method="post" style="display: inline"
        class="form-check-inline">
        @csrf
        @method('delete')
      <button onclick="return confirm('Yakin na mu Hapus Data mu???')" class="btn btn-danger">Delete</button>
      </form>
      
    </td>
   </tr>
    @endforeach
  </tbody>
  </table>
  </div>
  </div>
 @endsection