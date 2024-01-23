<?php
require("dbconnect.php");
$username = $_GET['username'];
if ($username == 'anjali') {
} else {
    header("Location: index.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- FAV AND ICONS   -->
    <link rel="shortcut icon" href="assets/images/anjali-shah-fevicon.png">
    <link rel="shortcut icon" href="assets/images/anjali-shah-fevicon.png">
    <link rel="shortcut icon" sizes="72x72" href="assets/images/anjali-shah-fevicon.png">
    <link rel="shortcut icon" sizes="114x114" href="assets/images/anjali-shah-fevicon.png">
    <title>Anjali Shah - iOS Developer</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/plugins/css/bootstrap.min.css">
</head>
<body>
    <div class="jumbotron text-center">
        <h1 class="main-title">Anjali Shah's Online Curriculum Vitae</h1>
    </div>
    <div class="container">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <h2 class="sub-title">Contact form Emails</h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $contact = "SELECT * FROM anjali_email ORDER BY id DESC";
                    $result_contact = $conn->query($contact);
                    echo "<p> Total Inquiry - " . mysqli_num_rows($result_contact) . "</p>";
                    if ($result_contact->num_rows > 0) {
                        while ($row = $result_contact->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["id"] . "</td>";
                            echo "<td>" . $row["name"] . "</td>";
                            echo '<td><a href="mailto:'. $row["email"] .'">' . $row["email"] . '</a></td>';
                            echo "<td>" . $row["subject"] . "</td>";
                            echo "<td>" . $row["message"] . "</td>";
                            echo "<td>" . $row["time"] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>