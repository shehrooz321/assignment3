<?php include 'header.php';?>
<?php include 'dbconnection.php';?>

<body>
	<div class="container">
	<div class="row">
		<div class="col-md-5 mx-auto ">
	<h2 class="text-center mb-5">Registration Form</h2>
	<form method="POST" action="send.php">
	  <div class="form-group">
	    <label for="fname">Full Name:</label>
	    <input type="text" class="form-control mx-auto  " id="fname" name="fname">
	  </div>
	   <div class="form-group">
	    <label for="email">Email address:</label>
	    <input type="email" class="form-control mx-auto " id="email" name="email">
	  </div>
	   <div class="form-group">
	    <label for="name">Username:</label>
	    <input type="text" class="form-control mx-auto   " id="name" name="Uname">
	  </div>
	   <div class="form-group">
	    <label for="number">Phone Number:</label>
	    <input type="tel" class="form-control mx-auto   " id="number" name="Pnumber">
	  </div>
	   <div class="form-group">
	    <label for="add">Present Address:</label>
	    <input type="text" class="form-control mx-auto   " id="add" name="PAddress">
	  </div>
	   <div class="form-group">
	    <label for="padd">Permenant Address:</label>
	    <input type="text" class="form-control mx-auto   " id="padd" name="padd">
	  </div>
	   <div class="form-group">
	    <label for="id">CNIC:</label>
	    <input type="text" class="form-control mx-auto  " id="id" maxlength="15" name="cnic">
	  </div>
	   <div class="form-group">
	    <label for="date">Date of Birth:</label>
	    <input type="date" class="form-control mx-auto   " id="date" name="dob">
	  </div>
	  <div class="my-3">
	  		  <button type="submit" class="btn btn-success">Register</button>

	  </div>
</form>
</div>
</div>
</div>

</body>
</html>
