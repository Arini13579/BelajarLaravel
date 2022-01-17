<!DOCTYPE html>
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
  
  <div class="mt-5 container table-hover">
    <h1>Data Dosen</h1>
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
  <thead class="table-warning">
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nidn</th>
      <th scope="col">Name</th>
      <th scope="col">Adddress</th>
      <th scope="col">Phone</th>
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
   </tr>
    @endforeach
  </tbody>
</table>
  </div>
</body>
</html>