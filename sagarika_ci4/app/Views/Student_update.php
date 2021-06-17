<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1>STUDENT Details</h1>
    <form action="<?php echo site_url('Student_ins_c/search'); ?>" method="post">
    <div class="form-group">
            <label>Enter your rool no</label>
            <input type="text" name="search_rollno" class="form-control" required>
        </div><br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <form action="<?php echo site_url('Student_ins_c/update');?>" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Roll No.</label>
          <input type="text" name="roll_number" class="form-control" required>
        </div>
        <div class="form-group">
          <label>DOB</label>
          <input type="date" name="dob" class="form-control" required>
        </div>
        <div class="form-group">
          <p>Gender</p>
		      <label>Male</label>
		      <input type="radio" id="male" name="gender" value="Male">
		      <label>Female</label>
		      <input type="radio" id="female" name="gender" value="Female">
		      <label>Others</label>
		      <input type="radio" id="others" name="gender" value="Others">
        </div>
        <div class="form-group">
            <label>Choose Subject</label>
            <select id="subjects" name="subjects">
    		    <option value="Science">Science</option>
    		    <option value="Arts">Arts</option>
    		    <option value="Commerce">Commerce</option>
  		      </select>
        </div><br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

</body>
</html>