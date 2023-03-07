<html>
	<head>
		<style type="text/css">
			table {
				border-collapse: collapse;
				width: 100%;
				color: #EB4034;
				font-family: monospace;
				font-size: 25px;
				text-align: left;
			}

			th {
				background-color: #EB4034;
				color: white;
			}

			tr:nth-child(even) {background-color: #ededed}
		</style>
	</head>
		<body>
			<table>
				<tr>
					<th>ID</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
					<th>Sign Up Date</th>
				</tr>
				<?php
				$conn = mysqli_connect("localhost", "root", "", "myDB");
				$sql = "SELECT * FROM myguests";
				$result = $conn->query($sql);
				
				if ($result->num_rows > 0) {
					while ($row = $result-> fetch_assoc()) {
					echo "<tr><td>" . $row["id"] . "</td><td>" . $row["firstname"]  . 
					"</td><td>" . $row["lastname"] . "</td><td>" . $row["email"] . 
					"</td><td>" . $row["reg_date"] . "</td></tr>";
					}
				}
				else {
					echo "No Results";
				}
				$conn->close();
				?>
			</table>
		</body>
</html>