<?php

// Retrieve the name entered in the form.
$name = $_POST['name'];

// Retrieve the email entered in the form.
$email = $_POST['email'];

// Retrieve the phone number entered in the form.
$phone = $_POST['phone'];

// Retrieve how the user heard about us.
$heard = $_POST['heard'];

// Retrieve the comments entered in the form.
$comments = $_POST['comments'];

?>

<!DOCTYPE html>
<!-- Yana Tkachenko -->

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Form Results Yana Tkachenko</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>

    <header>
        <h1>Account Sign Up Results</h1>
    </header>

    <main>

        <p><strong>Name:</strong> <?php print $name; ?></p>

        <p><strong>E-Mail:</strong> <?php print $email; ?></p>

        <p><strong>Phone Number:</strong> <?php print $phone; ?></p>

        <p><strong>How did you hear about us?</strong> <?php print $heard; ?></p>

        <p><strong>Comments:</strong> <?php print $comments; ?></p>

    </main>

</body>

</html>