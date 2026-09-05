<?php
// Store the Googleplex heading and address information in variables.
$heading = "Googleplex";
$street = "1600 Amphitheatre Parkway";
$city = "Mountain View";
$state = "CA";
$country = "United States";
?>
<!doctype html>
<!-- Yana Tkachenko -->
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Googleplex | Yana Tkachenko</title>
</head>


<body>

<?php
// Display the heading, description, and address on the web page.
echo "<h1>$heading</h1>\n";
echo "<p>The Googleplex is the corporate headquarters complex of Google and its parent company Alphabet Inc. It is located at:</p>\n";
echo "<p>$street<br>\n";
echo "$city, $state, $country</p>\n";
?>

</body>
</html>