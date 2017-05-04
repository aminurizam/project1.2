<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add User</title>

    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ asset('bootstrap/css/animate.css') }}" rel="stylesheet">

  </head>
  <body>


    <div class="container">
      <div class="col-sm-12">

        <h1>Pendaftaran Pengguna</h1>
    </div>
    <form class="form-horizontal" action="{{ action('AdminController@store')}}" method="POST">

      {{ csrf_field() }}

      <div class="form-group">
        <label class="control-label col-sm-2">Name:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" placeholder="Enter Name">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Matric No:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" placeholder="Enter Matric No">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-6">
          <input type="email" class="form-control" id="email" placeholder="Enter email">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Password:</label>
        <div class="col-sm-6">
          <input type="password" class="form-control" id="pwd" placeholder="Enter password">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Role:</label>
        <div class="col-sm-2">
          <select class="form-control col-sm-2" name="user_group">
            <option value="" disabled selected>Pilih role</option>
            <option value="">Pelajar</option>
            <option value="">Penasihat</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <div class="checkbox">
            <label><input type="checkbox"> Remember me</label>
          </div>
        </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Submit</button>
          </div>
        </div>
    </form>
</div>
  </div>
  </body>
</html>
