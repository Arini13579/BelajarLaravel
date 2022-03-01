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
<body>
   
</body>
</html> --}}

@extends('backend.master')
@section('content')
    <div class="mt-5 col-sm-6 container">
      <div class="card-header bg-secondary text-white ">Mata Kuliah </div>
        <form action="{{route('subject.store')}}" method="POST">
          @csrf
        
            <div class="form-group class mt-5">
                  <select class="form-control" name="lecturer_id">
                 <option label="Pilih Dosen"></option>
                <label>Nama Dosen</label>
                 <option value=""></option>
                 @foreach ($Lecturer as $item)
                     <option value="{{$item->id}}">{{$item->name}}</option>
                 @endforeach
              
        </select>
              <label for="nidn" >Kode</label>
              <input type="text" name="code" class="form-control" id="nidn" aria-describedby="emailHelp" placeholder="enter your kode">
              
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Name</label>
              <input type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="enter your name">
            </div>
            <button type="submit" class="btn btn-secondary">Submit</button>
          </form>
    </div>
@endsection