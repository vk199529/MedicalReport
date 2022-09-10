@extends('layouts.admin-app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- {{ __('Hey Admin You are logged in!') }}   -->


<html lang="en">
<head>
  <title>medicines</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Medicines Table <a class="btn btn-info" href="{{ route('medicine.new')}}">New medicine</a></h2>
  @if(session()->has('success'))
<div class="alert alert-info" role="alert">
  <strong>{{ session()->get('success') }}</strong>

</div>
  @endif
  <table class="table">
    <thead>
      <tr>
        <th>S.No.</th>
        <th>Medicine Name</th>
        <th>Price</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($medicines as $medicine)
      <tr>
        <td>{{ $medicine->id }}</td>
        <td>{{ $medicine->medicine_name}}</td>
        <td>{{$medicine->price}}</td>
        <td>
            <a  href = "{{ route('medicine.edit', $medicine->id) }}" class="btn btn-sm btn-info">Edit</a>
            <a  href = "{{ route('medicine.delete', $medicine->id) }}" class="btn btn-sm btn-danger">Delete</a>
        <!-- <form method="post" action="{{ route('medicine.delete', $medicine->id) }}">
      @csrf
      @method('delete')
      <button class="btn btn-sm btn-danger">Delete</abutton>
</form> -->
          </td>
      </tr>
    @endforeach
    </tbody>
  </table>

 
</div>

</body>
</html>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
