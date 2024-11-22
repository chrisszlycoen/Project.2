<?php 
if($_SERVER ['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $confirm = $_POST['confirm-password'];
    $age = $_POST['age'];
    $website = $_POST['website'];
    $date = $_POST['date'];

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>server side</title>
</head>
<body>
    <table border="1" cellspacing = "0">
        <th>
            <tr>
                <td><strong><em>Username</em></strong></td>
                <td><strong><em>Email</em></strong></td>
                <td><strong><em>Password</em></strong></td>
                <td><strong><em>Confirmation</em></strong></td>
                <td><strong><em>Age</em></strong></td>
                <td><strong><em>Website</em></strong></td>
                <td><strong><em>DOB</em></strong></td>
            </tr>
        </th>
        <tr>
            <td><?php echo $username ?></td>
            <td><?php echo $email ?></td>
            <td><?php echo $password ?></td>
            <td><?php echo $confirm ?></td>
            <td><?php echo $age ?></td>
            <td><?php echo $website ?></td>
            <td><?php echo $date ?></td>
        </tr>
    </table>
</body>
</html>