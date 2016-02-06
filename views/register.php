<pre>
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
  if (strlen($_POST['assassinname']) < 3) {
    array_push($errors, "Please make sure your assassin name is at least 3 characters.");
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
    echo "<span style=\"color: #C00; font-weight: bold;\">";
    foreach ($errors as $error) {
      echo $error . "<br />";
    }
    echo "</span>";
  } else {
    $player->register();
    echo "Registration Complete! <a href=\"/login.php\">Click here to Log In</a>!";
  }
}

if ($_SERVER['REQUEST_METHOD'] !== "POST" || $_SERVER['REQUEST_METHOD'] === "POST" && count($errors) > 0) {
?>
  <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    <h1>Register</h1>
    <label>First Name</label> <input type="text" name="firstname" value="<?php echo $_POST['firstname']; ?>" />
    <label>Last Name</label> <input type="text" name="lastname" value="<?php echo $_POST['lastname']; ?>" />
    <label>Assassin Name</label> <input type="text" name="assassinname" value="<?php echo $_POST['assassinname']; ?>" />
    <label>Email</label> <input type="email" name="email" value="<?php echo $_POST['email']; ?>" />
    <label>Password</label> <input type="password" name="password1" value="<?php echo $_POST['password1']; ?>" />
    <label>Re-enter Password</label> <input type="password" name="password2" value="<?php echo $_POST['password2']; ?>" />

    <button type="submit">Register</button>

    <a href="/">Back</a>
  </form>
</pre>

<?php
}
?>
