<!DOCTYPE html>
<html>
<head>
	<title>Entry a new student</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<form action="entry.php" class="form-horizontal" method="POST">
  <fieldset>
    <legend><h2>Student Info Entry</h2></legend>
    <br> <br> 

    <div class="form-group">
      <label class="col-lg-2 control-label">Name:</label>
      <div class="col-lg-5">
        <input class="form-control" name="name" placeholder="Enter full name" type="text" required>
      </div>
    </div>
    <br>

    <div class="form-group">
      <label class="col-lg-2 control-label">Reg no:</label>
     <div class="col-lg-5">
        <input class="form-control" name="reg" placeholder="Enter reg no" type="text" required>
      </div>
      </div>
      <br>

        <div class="form-group">
      <label class="col-lg-2 control-label">Cgpa:</label>
     <div class="col-lg-5">
        <input class="form-control" name="cgpa" placeholder="Enter cgpa" type="float" required>
      </div>
      </div>
      <br>
 
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        
       <button type="submit" class="btn btn-success">Add</button>
      </div>
    </div>
  </fieldset>
</form>
</div>
</body>
</html>