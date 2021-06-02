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
      <table class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Gender</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><input type="text" placeholder="enter name"></td>
          <td><input type="radio"name="gender" value="m">male <input type="radio"name="gender" value="f">female</td>
          <td><input type="email" placeholder="enter email"></td>
        </tr>
      </tbody>
    </table>
    <button type="submit">Submit</button>
  </form>
  </div>

</body>
</html>