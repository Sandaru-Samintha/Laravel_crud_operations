<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
 
<center>
<h1>Filling Form</h1><br>
  <form  action="{{ route('studentedit',$data->id) }}" method="post"  >

  <!-- we use the @csrf tocken to ignore the network erro   -->
  @csrf
  <div class="form-group row">
    <label for="regNo" class="col-sm-2 col-form-label">Reg:NO</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="regNo" name="regNo" value="{{ $data->regNo }}">
    </div>
  </div><br>

  <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name" value="{{ $data->name }}">
    </div>
  </div><br>

  <div class="form-group row">
    <label for="age" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="age" name="email" value="{{ $data->email }}">
    </div>
  </div><br>

  <div class="form-group row">
    <label for="age" class="col-sm-2 col-form-label">Phone</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="age" name="phone" value="{{ $data->phone }}">
    </div>
  </div><br>

  <!-- <div class="form-group row">
    <label for="age" class="col-sm-2 col-form-label">Phone</label>
    <div class="col-sm-10">
      <input type="string" class="form-control" id="phone" name="phone" placeholder="0771234567">
    </div>
  </div><br> -->

  <button type="submit" class="btn btn-primary">Submit Data</button>
  
</form>
</center>