<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='css/style.css' type='text/css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Hello, world!</title>
  </head>
  <body
  <h1 style="margin-left:10px;">AJAX DATA SUBMIT AND SHOW</h1>
  <div id='msg'></div>
  <div style="width:40%;margin-left:10%">
  <form id="myfrom">
    <div class="form-group">
    <input type="hidden" id="stuid">

        <label for="">Name</label>
        <input type="text" class="form-control" id="nameid" name="nameid" placeholder="Name">
    </div>
    <div class="form-group">
        <label for="">Email address</label>
        <input type="email" class="form-control" id="emailid" name="emailid" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="">Password</label>
        <input type="text" class="form-control" id="passwordid" name="passwordid" placeholder="Password">
    </div>
  <button type="button" id='btnadd' class="btn btn-primary m-3">Submit</button>
</form>
  </div>

<h1>Show Register Data</h1><br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody id="tbody">
    
  </tbody>
</table>
<script src='js\jqajax.js'></script>
  </body>
</html>
