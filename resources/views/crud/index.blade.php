<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud learning</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap.min.css')}}">
</head>
<body>
    <div class="container">
      <div class= "row my-5">
        <div class= "col-md-12">
        <h2>School_Teachers</h2>
      <a href="create.php" class= "btn btn-sm btn-danger float-end">Create New</a>
    <table class="table mt-5 table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">CNIC</th>
      <th scope="col">Designation</th>
      <th scope="col">Salary</th>
      <th scope="col">Joining_Date</th>
      <th scope="col">Gender</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($schoolteacher as $key => $teacher)
    {{-- @dd($teacher) --}}
    <tr>
        <td>{{++$key}}</td>
        <td>{{$teacher->id}}</td>
        <td>{{$teacher->Name}}</td>
        <td>{{$teacher->Email}}</td>
        <td>{{$teacher->Phone}}</td>
        <td>{{$teacher->CNIC}}</td>
        <td>{{$teacher->Designation}}</td>
        <td>{{$teacher->Salary}}</td>
        <td>{{$teacher->Joining_Date}}</td>
        <td>{{$teacher->Gender}}</td>
        <td>{{$teacher->Address}}</td>
        <td>Action</td>
    </tr>
    @endforeach
  </tbody>

</table>
        </div>
      </div>
    </div>
    <script src="{{asset('assets/bootstrap.min.js')}}"></script>
</body>
</html>
