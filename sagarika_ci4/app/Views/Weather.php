<DOCTYPE! HTML>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <form action="<?php echo site_url('Climate/insert');?>" method="post">
    <div class="form-group">
      <label>Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label>Gender:</label>
      <input type="radio" id="gender" name="gender" value="M">Male
      <input type="radio" id="gender" name="gender" value="F">female
     </div>
    <div>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>