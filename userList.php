<!DOCTYPE html>
<html>
<head>
  <title>omobio test</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <div class="header_list">
  	<h2>User List</h2>
    <a href="resetPassword.php">Reset password</a>
  </div>

  <table>
  <tr>
    <th>User Name</th>
    <th>Email</th>
    <th>user Type</th>
  </tr>
  <?php 

    
    $db = mysqli_connect('localhost', 'root', '', 'omobio');
    $query = "SELECT * FROM users";
    $results = mysqli_query($db, $query);

    if ($result = $mysqli->query($query)) {
    
        /* fetch associative array */
        while ($row = $result->fetch_assoc()) {
            $name = $row["name"];
            $userType = $row["user_type"];
            $email = $row["email"];

            echo '<tr>
                    <td>'.$name.'</td>
                    <td>'.$query.'</td>
                    <td>'.$result.'</td>
                </tr>';
        }
    }
  ?>
  
</table>


</body>
</html>