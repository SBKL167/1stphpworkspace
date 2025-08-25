<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <from> 
        <input  type="Name" >
        <input type="Email" >
        <input type="Password" >
        <input type="Gender" select="male">

    </from>
</body>
</html> -->
<?php 

$errors = [];
if ($_SERVER["REQUEST_METHOD"]==="POST"){
    $name=$_POST["name"];
    $password=$_POST["password"];
    $email=$_POST["email"];
    $password_confirm=$_POST["confirmpassword"];

    echo $name;
    echo $password;
    echo $email;
    echo $password_confirm;

    $pattern="/^[a-z]{1,20}$/";
    if (!preg_match($pattern,$name)){
        array_push($errors,"morethan20");
       
    }
    

if ($password != $password_confirm) {

   array_push( $errors, "Password and confirm is not equal");

} 
if(strlen(string: $name) >= 10) {
    array_push($errors,"Larger length");
}
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Basic PHP Form</title>
</head>
<body>

<h2>Simple Form Example</h2>

<!-- The form -->
<form action="" method="POST">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>
    <br><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
    <br><br>

    <label for="password">password:</label>
    <input type="password" name="password" id="password" required>
    <br><br>

    <label for="password">confirmpassword:</label>
    <input type="password" name="confirmpassword" id="password" required>
    <br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php foreach($errors as $error):?>
    <p><?php echo $error ?></p>
<?php endforeach ?>


<!-- <?php
// Check if form is submitted
if (isset($_POST['submit'])) {
    // Collect form data safely
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    echo "<h3>Form Data Received:</h3>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
}
?>
 -->

</body>
</html>
