<!DOCTYPE html> 
<html lang="en"> 
<head> 
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head> 
	<body>
    <section>
        <h1>My Guests</h1>
        <br>
        
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Website</th>
                    <th>Gender</th>
                    <th>Comment</th>
                    <th>Sign Up Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "myDB";
                
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM guest_list";
                $result = $conn->query($sql);
                
                if (!$result) {
                    die("Invalid query: " . $conn->error);
                }

                while($row = $result->fetch_assoc()) 
                {
                    echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["guest_name"] . "</td>
                    <td>" . $row["email"] . "</td>
                    <td>" . $row["website"] . "</td>
                    <td>" . $row["gender"] . "</td>
                    <td>" . $row["comment"] . "</td>
                    <td>" . $row["reg_date"] . "</td>       
                </tr>";
                }
                
                ?>
            </tbody>
        </table>
    </section>





    </body> 
    </html>

