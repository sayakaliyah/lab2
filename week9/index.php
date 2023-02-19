<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
 background-color:linen; 
 }

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 70%;
  margin: auto;
  text-align: center;
  background-color:white;
}

button {
  border-color:linen;
  border-style: solid;
  display: inline-block;
  padding: 10px;
  color: white;
  background-color: palevioletred;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 20px;
}


.container {
  position: relative;
  width: 50%;
  margin: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: palevioletred;
}

.container:hover .overlay {
  opacity: 1;
}

.image {
  display: block;
  width: 100%;
  height: auto;
  text-align: center;
}

.text {
  color: linen;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}

.profile {
 border-radius: 50%
}

h2 {
color: palevioletred;
}

</style>
</head>
<body>
<div class="card"> 
  <h1><button><b><i>@bout_me</i></b></button></h1>
  <img src="https://i.pinimg.com/236x/99/e7/d0/99e7d014c381bb287ce51bb5e1e81b32.jpg" class="profile" style="width: 10%">
  <h2> <b>SAYAKA</b></h2>
  <p> <b><i>bs computer science at apc<b></i></p>
  <p> <b><i>i like cats, kpop, games & make up! <b></i></p>

  <p><i>+ hover over the image for more info+</i></p>
  <div class="container">
  <img src="https://i.pinimg.com/564x/f9/b8/63/f9b8631d8d712b945b337ac9933862a4.jpg" class="image"  style="width: 100%">
  <div class="overlay">
    <div class="text">Experience: <br> Java, SQL, HTML, Python</div>
  </div>
</div>

  <div class="container">
  <img src="https://i.pinimg.com/564x/b3/41/7f/b3417fddf3c1b184728e8bc45ea3f875.jpg" class="image"  style="width: 100%">
  <div class="overlay">
    <div class="text">
	Goals in Life: <br> To be financially stable where I can buy both needs and wants for my family and myself
	</div>
  </div>
</div>

 <div class="container">
  <img src="https://i.pinimg.com/564x/73/37/c2/7337c262ba0811949e803164d1634fe1.jpg" class="image"  style="width: 100%">
  <div class="overlay">
    <div class="text">
	What do you expect to learn from Web Programming? <br> Learn and recall previous and new HTML and CSS topics
	</div>
  </div>
</div>

 <div class="container">
  <img src="https://i.pinimg.com/564x/b1/a0/25/b1a025a61cd1de385bba97fba697c008.jpg" class="image"  style="width: 100%">
  <div class="overlay">
    <div class="text">
	What do you want to learn to help you in your chosen Major? <br> I want to learn about how to handle data in my course and also web programming
	</div>
  </div>
</div>

<p><i>images are all from pinterest!</i></p>

  <div style="margin: 30px 0; margin-top: 10px;"> 
	</div>
</div>

<div class="card">
   <h2><b><button>JavaScript Lessons</button></b></h2>
   

<h2> 5 lessons applied </h2>

<button onclick="myFunction()">Click Me!</button>
 
<p id="demo1"></p>
<p id="demo">Good Evening!</p>
<p id="demo2"></p>
<p id="demo3"></p>
<p id="demo4"></p>

<script>
if (new Date().getHours() < 18) {
  document.getElementById("demo").innerHTML = "Good day!";
}

function myFunction() {
  let text;
  let person = prompt("Please enter your name:", "Viewer's Name");
  if (person == null || person == "") {
    text = "User cancelled the prompt.";
  } else {
    text = "Hello " + person + "! How are you today?";
  }
  document.getElementById("demo1").innerHTML = text;
}

const fruits = new Map([
  ["apples", 500],
  ["bananas", 300],
  ["oranges", 200]
]);

fruits.set("apples", 200);

document.getElementById("demo3").innerHTML = fruits.get("apples");

document.getElementById("demo4").innerHTML = Boolean(10 > 9);

</script>

</div>

<div class="card">
   <?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
        $servername = "192.168.150.213";
        $username = "webprogss211";
        $password = "fancyR!ce36";
        $dbname = "webprogss211";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO sphernandez_myguests ( name, email, website, comment, gender)
VALUES ('$name', '$email', '$website', '$comment', '$gender')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}

?>


</div>


</body>
</html>
