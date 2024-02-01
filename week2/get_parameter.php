<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Get Parameter</title>
</head>
<body>

    <h1> <?php echo "Today is " . date("Y/m/d") . "<br>";?> </h1>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>">
        <label>First Name:</label><br>
        <input type="text" name="fname" required><br>
        <label>Last Name:</label><br>
        <input type="text" name="lname" required><br>
        <label>Age:</label><br>
        <input type="number" name="age" min="1" max="100" required><br>
        <input type="submit">
    </form>
    <br>
    <br>


    
</body>
</html>

<?php 
#user entered first, last and age variables
 $fname = filter_input(INPUT_GET, 'fname', FILTER_SANITIZE_SPECIAL_CHARS);
 $lname = filter_input(INPUT_GET, 'lname', FILTER_SANITIZE_SPECIAL_CHARS);
 $age = filter_input(INPUT_GET, 'age', FILTER_SANITIZE_SPECIAL_CHARS);

 $sentence1 = "<h3>I am old enough to vote in the United States!</h3>";
 $sentence2 = "<h3>I am not old enough to vote in the United States!</h3>";

 $yearCount = 18 - $age;

 if($age >= 18){
    echo $sentence1;
 } else if($age < 18){
    echo $sentence2;
    echo "<br> <h3>I will be able to vote in {$yearCount} more year(s).</h3>";

 }

 
?>