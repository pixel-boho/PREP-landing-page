<?php
session_start();

// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Registrations</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.bootstrap5.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#registrations').DataTable({
            dom: 'Bfrtip',
            buttons: [
                { extend: 'excelHtml5', className: 'btn btn-success me-2' },
                { extend: 'pdfHtml5', className: 'btn btn-danger' }
            ]
        });
    });
    </script>
	
	
	
	
	 <style>
        .logout {
              float: right;
            right: 10px;
            top: 10px;
        }
    </style>
	
	
	
	
	
</head>
<body>
    <div class="container">
	        <button class="btn btn-danger logout" onclick="location.href='logout.php'">Logout</button>
        <h2 class="mt-5">Registrations List</h2>
        <table id="registrations" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Pin Code</th>
                    <th>School</th>
                    <th>Date Time</th>
                    <th>IP Address</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "pixelboho_lijo";
                $password = "W23d%hh74s";
                $dbname = "pixelboho_camb";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT name, mobile, email, pincode, school, datetime, ip_address FROM camb01";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["name"] . "</td>
                                <td>" . $row["mobile"] . "</td>
                                <td>" . $row["email"] . "</td>
                                <td>" . $row["pincode"] . "</td>
                                <td>" . $row["school"] . "</td>
                                <td>" . $row["datetime"] . "</td>
                                <td>" . $row["ip_address"] . "</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>No results found</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
