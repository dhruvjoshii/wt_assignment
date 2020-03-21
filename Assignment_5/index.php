<!DOCTYPE html>
<html>
<head>
	<title>Register now!</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
	<h1>NATIONAL WORKSHOP ON WEB APPLICATION DEVELOPMENT USING REACTJS</h1>
	<hr>
</header>

<div class="main">
	<div class="subtxt">
	<p>
		<b>Start:</b> 26-09-2020
		<b>End:</b> 27-09-2020
		<br><br>
		Organised by Department of Computer Engineering, Faculty of Engineering & Technology
		<br><br>
		National Workshop On Web Application Development Using ReactJS
		<br><br>
		In Association with The Institution of Engineering and Technology
		<br><br>
		<b>Date:</b> Sep 26 - 27, 2020
		<br><br>
		<b>Venue:</b> University Building, Room No. 1209
		<br>
		<h3>Overview</h3>
		<div id="para1">
		A career in Web application development can prove every bit
		as rewarding and much more fun! Also it improves the job
		prospects of students and get an edge over the counterparts.
		This two days’ workshop on Web Application Development is
		based on a modern web technology ReactJS for building user
		interfaces. It is maintained by Facebook and a community of
		individual developers and companies. React can be used as
		base in development of single-page or mobile application, as
		it is optimal for fetching rapidly changing data that needs to be
		recorded. This workshop will focus on the basics of ReactJS,
		React Components, React Internals and the Component Inter
		communication. Mini project will be given to the participant at
		the end of this workshop to evaluate the outcome it.
		</div>
		<h3>Topics Covered:</h3>
		<b>Session 1: (Theory)</b>
		<ul>
		<li>Introduction to ReactJS</li>	
		<li>History of front end libraries</li> 
		<li>Motivation for using React</li>
		<li>Key differentiators (Virtual DOM, One way binding)</li>
		<li>Thinking in React</li>
		</ul><br>
		<b>Session 2: (Hands on)</b>
		<ul>
		<li>React Components</li>
		<li>React component</li>
		<li>Render function</li>
		<li>Component API</li>
		<li>Component lifecycle</li>
		<li>State</li>
		<li>Props</li>
		<li>Mixins</li>
		<li>JSX</li>
		</ul>
		<b>Session 3: (Hands on)</b>
		<ul>
		<li>React internals</li>
		<li>Reconciliation algorithm</li>
		</ul>
		<b>Session 4: (Hands on)</b>
		<ul>
		<li>Component inter communication</li>
		<li>Component composition</li>
		<li>Pass data from parent to child</li>
		<li>Pass data from child to parent</li>
		<li>Mini Project</li>
		</ul>
	</p>
	</div>
	<div class="subreg">
		<h2>Register Here</h2>
		<form name="form1" style="font-size: 12px" method="post" action="index.php">
	   <input type="text" name="firstname" placeholder="First name*" pattern="[A-Za-z0-9]{1,}" required style="width: 172px;padding: 8px 10px;border-radius: 5px">

	   <input type="text" name="lastname" placeholder="Last name" pattern="[A-Za-z0-9]{1,}" style="width: 172px;padding: 8px 10px;border-radius: 5px">
	   <br><br>
	   <input type="email"  id="EMAIL" name="email" placeholder="Email address*" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  title="plese follow someone@example.com" required style="width: 374px;padding: 8px 10px;border-radius: 5px">
	   <br><br>
	   <input type="tel" id="telno" name="telno" placeholder="Telephone number*" pattern="[0-9]{10,}$" required style="width: 374px;padding: 8px 10px;border-radius: 5px" >
	   <br><br>
	   <input type="text" name="country" placeholder="Country*" pattern="[a-zA-Z]{3,}" required style="width: 172px;padding: 8px 10px;border-radius: 5px">
	   <select name="occupation" required style="width: 192px;padding: 8px 10px;border-radius: 5px" >
				<option value=""> -- Occupation --</option>
				<option value="Student">Student</option>
				<option value="Faculty">Faculty member</option>
				<option value="Professionalr">Professional</option>
				<option value="Company/firm representatives">Company/firm representatives</option>
		</select>
	   <br><br>
	   <label style="font-size: 14px">Gender*</label>
		<br>
		<input  required type="radio" id="male" name="gender" value="Male">
		<label style="font-size: 14px" for="male">Male</label>
		<input required type="radio" id="female" name="gender" value="Female">
		<label  style="font-size: 14px" for="female">Female</label>
		<input required type="radio" id="other" name="gender" value="Other">
		<label style="font-size: 14px" for="other">Other</label>
		<br><br>
		<input type="submit" id="submitb">
		<h2 id="note">* Required Fields</h2>
	</div>
</div>

<footer>
	<hr>
	<center>Copyright &copy; 2020. All rights reserved.</center>
</footer>
<?php
if(isset($_POST) && count($_POST) > 0)
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
$email = $_POST["email"];
$telno = $_POST["telno"];
$gender = $_POST["gender"];
$occ = $_POST["occupation"];
$cont = $_POST["country"];



$sql = "INSERT INTO event_registration (firstname, lastname, email, telno, country, occupation, gender) VALUES ('".$fname."','". $lname."','". $email."','". $telno."', '".$cont."', '".$occ."', '".$gender."')";

if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Registered successfully")</script>'; 
} else {

	?>
		<script>alert("Error: <?php echo $sql ?><br> <?php echo $conn->error ?>")</script> 
	<?php
}

$conn->close();
}
?>
</body>
</html>