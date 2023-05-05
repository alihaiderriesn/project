
<?php
require('./config.php');


// Validate form input
if (isset($_POST["submitt"])) {
    $namee = mysqli_real_escape_string($conn, $_POST["namee"]);
	$name = mysqli_real_escape_string($conn, $_POST["emaill"]);
	$email = mysqli_real_escape_string($conn, $_POST["passs"]);
	

    // Check for empty fields
    if (empty($namee) || empty($name) || empty($email) ) {
        echo "Please fill in all fields.";
    } else {
        // Insert form data into database
        $sql = "INSERT INTO sign_up (name,Emil,Password) VALUES ('$namee','$name', '$email')";
        if (mysqli_query($conn, $sql)) {
            echo "Form submitted successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    
    mysqli_close($conn);
}
?>    
