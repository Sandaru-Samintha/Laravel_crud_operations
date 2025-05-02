<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Student Data</title>
</head>
<center>
<body>
  
    <h1>Registered Students Data</h1>
<br>
<br>
  <table class="table">
  <thead>
    <tr>
      <th >Reg:NO</th>
      <th >Name</th>
      <th >Email</th>
      <th >Phone</th>
      <!-- <th >Phone</th> -->
      <th colspan="2" style="text-align: left; padding-left: 150px;">Handle</th>
    </tr>
  </thead>
  <tbody>
      <tr>
        @foreach ($data['tasks'] as $task )
        <td>{{ $task->regNo }}</td>
        <td>{{ $task->name }}</td>
        <td>{{ $task->email}}</td>
        <td>{{ $task->phone }}</td>
        <td><a href="{{ route('studentupdate', $task->id) }}">Update</a></td>
        <td><a href="{{ route('studentdelete', $task->id) }}">Delete</a></td>
      </tr>
  </tbody>
  @endforeach
</table>
<br>
<br>
</center>
<h4 style="padding: 20px;"><a href="{{ route('studentcreate') }}">Create New Student</a></h4>

</body>

</html>