<?php
$errors = array();
if ($_SERVER['REQUEST_METHOD'] === "POST") {
  if (strtolower(end(explode("@", $_POST['email']))) !== "energybbdo.com") {
    array_push($errors, "You must have an Energy BBDO email to play assassin.");
  }
  if (trim($_POST['firstname']) === "") {
    array_push($errors, "Please enter a first name.");
  }
  if (trim($_POST['lastname']) === "") {
    array_push($errors, "Please enter a last name.");
  }
  if (trim($_POST['assassinname']) === "") {
    array_push($errors, "Please enter an assassin name.");
  }
  if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    array_push($errors, "Please enter a valid email address.");
  }
  if (strlen($_POST['password1']) < 6) {
    array_push($errors, "Please make sure your password is at least 6 characters.");
  }
  if ($_POST['password1'] !== $_POST['password2']) {
    array_push($errors, "Please make sure your passwords match. ");
  }
  if (count($errors) > 0) {
    foreach ($errors as $error) {
      echo $error . "<br />";
    }
  } else {
    echo "Registration Complete! <a href=\"/login.php\">Click here to Log In</a>!";
  }
}
?>

<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
  <pre>
  First Name: <input type="text" name="firstname" value="<?php echo $_POST['firstname']; ?>" />
  Last Name: <input type="text" name="lastname" value="<?php echo $_POST['lastname']; ?>" />
  Assassin Name: <input type="text" name="assassinname" value="<?php echo $_POST['assassinname']; ?>" />
  Email: <input type="email" name="email" value="<?php echo $_POST['email']; ?>" />
  Password: <input type="password" name="password1" value="<?php echo $_POST['password1']; ?>" />
  Re-enter Password: <input type="password" name="password2" value="<?php echo $_POST['password2']; ?>" />
  <button type="submit">Register</button>
  </pre>
</form>
