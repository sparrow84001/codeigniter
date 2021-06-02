<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
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
          <input type="email" name="email" class="form-control" id="email">
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