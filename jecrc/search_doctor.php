<?php
include 'db.php';

$search = isset($_GET['search']) ? $_GET['search'] : '';
$specialization = isset($_GET['specialization']) ? $_GET['specialization'] : '';
$city = isset($_GET['city']) ? $_GET['city'] : '';

// SQL query to filter data based on search, specialization, and city
$sql = "SELECT * FROM doctors WHERE 
        (first_name LIKE '%$search%' OR last_name LIKE '%$search%' OR clinic_name LIKE '%$search%')
        AND (specialization LIKE '%$specialization%' OR '$specialization' = '')
        AND (city LIKE '%$city%' OR '$city' = '')";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>Name</th>
                <th>Specialization</th>
                <th>Clinic</th>
                <th>City</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Rating</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['first_name'] . " " . $row['last_name'] . "</td>
                <td>" . $row['specialization'] . "</td>
                <td>" . $row['clinic_name'] . "</td>
                <td>" . $row['city'] . "</td>
                <td>" . $row['phone_number'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['rating'] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No doctors found.";
}

$conn->close();
?>
