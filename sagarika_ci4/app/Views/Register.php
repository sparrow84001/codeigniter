<DOCTYPE! HTML>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <h1>Insert data</h1>
    <form action="<?php echo site_url('R_c/insert');?>" method="post">
        <div class="form-group">
            <label>name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
          <label>email</label>
          <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">submit</button>
    </form>
  </div>

</body>
</html>