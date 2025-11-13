<!DOCTYPE html>
<html>
<head>
	<title>Admission Form</title>
	<style type="text/css">
		body {
    margin: 0;
    padding: 0;
  }
  
  .sidebar {
    background-color: #333;
    color: #fff;
    width: 250px;
    height: 100vh;
    position: fixed;
    top: 0;
    left: 0;
    overflow-y: auto;
  }
  
  .sidebar h2 {
    margin: 0;
    padding: 20px;
  }
  
  .sidebar ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  
  .sidebar li {
    border-bottom: 1px solid #666;
  }
  
  .sidebar li:last-child {
    border-bottom: none;
  }
  
  .sidebar a {
    display: block;
    color: #fff;
    text-decoration: none;
    padding: 20px;
  }
  
  .sidebar a:hover {
    background-color: #666;
  }
  
  .content {
    margin-left: 250px;
    padding: 20px;
  }
  
  section {
    margin-bottom: 40px;
  }
  
  h3 {
    margin-top: 0;
  }
  
  p {
    margin: 0;
  }
  
		form {
			width: 500px;
			margin: auto;
			border: 1px solid #ccc;
			padding: 20px;
		}
		label {
			display: block;
			margin-bottom: 5px;
			font-weight: bold;
		}
		input[type="text"], input[type="email"], input[type="tel"], select {
			width: 100%;
			padding: 5px;
			border: 1px solid #ccc;
			border-radius: 5px;
			margin-bottom: 10px;
		}
		select {
			height: 35px;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			border: none;
			padding: 10px 20px;
			border-radius: 5px;
			cursor: pointer;
			margin-top: 10px;
		}
		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
<div class="sidebar">
      <h2>Admin Dashboard</h2>
      <ul>
        <li><a href="admision.php">Admission</a></li>
        <li><a href="form.php">Add Student</a></li>
        <li><a href="#view-student">View Student</a></li>
        <li><a href="#add-teacher">Add Teacher</a></li>
        <li><a href="#view-teacher">View Teacher</a></li>
        <li><a href="#add-courses">Add Courses</a></li>
        <li><a href="#view-courses">View Courses</a></li>
      </ul>
    </div>
	<form action="form_check.php" method="POST">
		<label for="id">ID:</label>
		<input type="text" id="id" name="id" required>
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" required>
        <select id="usertype" name="usertype">
			<option value="">--Please select--</option>
			<option value="user">user</option>
			<option value="admin">admin</option>
		</select>
        <label for="name">Password:</label>
		<input type="password" id="password" name="password" required>
		<label for="gender">Gender:</label>
		<select id="gender" name="gender">
			<option value="">--Please select--</option>
			<option value="male">Male</option>
			<option value="female">Female</option>
			<option value="other">Other</option>
		</select>
		
		<label for="roll_no">Roll Number:</label>
		<input type="text" id="roll_no" name="roll_no" required>
		<label for="fathers_name">Father's Name:</label>
		<input type="text" id="fathers_name" name="fathers_name" required>
		<label for="native_state">Native State:</label>
		<input type="text" id="native_state" name="native_state" required>
		<label for="blood_group">Blood Group:</label>

		<input type="text" id="blood_group" name="blood_group" required>
        

		<label for="address">Address:</label>
		<input type="text" id="address" name="address" required>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required>
		<label for="phone_no">Phone Number:</label>
		<input type="tel" id="phone" name="phone" required>
		<label for="dob">Date of Birth:</label>
		<input type="date" id="dob" name="dob" required>
		<label for="branch">Branch:</label>
		<input type="text" id="branch" name="branch" required>
		<label for="current_cgpa">Current CGPA:</label>
		<input type="text" id="current_cgpa" name="current_cgpa" required>
		
        <input type="submit" id="submit" value="apply" name="apply">
    </form>
    </body>
    </html>

