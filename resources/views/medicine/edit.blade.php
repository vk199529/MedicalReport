<!DOCTYPE html>
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

<div class="container pt-5">
  <h2>Edit Medicines</h2>
  <div class="row">
  <div class="col-sm-4">
 <form method="post" action="{{ route('medicine.update', $medicines->id)}}">
    @csrf
    @method('put')
    <label>Medicine Name</label>
    <input type="text" name="medicine_name" class="form-control" value="{{ $medicines->medicine_name }}"/>

    <label>Price</label>
    <input type="text" name="price" class="form-control" value="{{ $medicines->price }} "/>
    <button class="btn btn-info mt-4" type="submit">Update</button>
</form>
  </div>
  </div>
  
</div>

</body>
</html>
