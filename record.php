<html>
<head>
<style>
.dbresult, .dbresult td, .dbresult th {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 8px;
}
.dbresult {
    width: 100%;
    margin: auto;
}
.dbresult tr:nth-child(odd) {
    background-color: #b2d0d6;
}
.dbresult tr:nth-child(even) {
    background-color: lightcyan;
}
</style>
</head>
<body>

<!-- Download & Exit Buttons -->
<button type="button" id="btn-download" class="genric-btn success-border"
        onclick="window.print()"
        style="position:fixed;left:40%;bottom:20px;font-size:18px;padding:6px 16px;background-color:green;color:white;">
    Download
</button>

<button type="button" id="btn-exit" class="genric-btn success-border"
        onclick="goBack()"
        style="position:fixed;left:52%;bottom:20px;font-size:18px;padding:6px 16px;background-color:red;color:white;">
    Exit
</button>

<script>
function goBack() {
    window.history.back();
}
</script>
</body>
</html>

<?php
$conn = mysqli_connect('localhost', 'root', '', 'ims');

if (!$conn) {
    die('Connection Error: ' . mysqli_connect_error());
}

$query = "SELECT * FROM policy_registration"; // Change table name if different
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo '<table class="dbresult">';
    echo '<tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>DOB</th>
            <th>Email</th>
            <th>Address</th>
            <th>City</th>
            <th>Country</th>
            <th>Policy Type</th>
            <th>Policy Pricing</th>
            <th>Annual Income</th>
            <th>Aadhar ID Number</th>
            <th>Phone Number</th>
            <th>Gender</th>
            <th>Application Date</th>
          </tr>';

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['first_name'] . '</td>';
        echo '<td>' . $row['last_name'] . '</td>';
        echo '<td>' . $row['dob'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['address'] . '</td>';
        echo '<td>' . $row['city'] . '</td>';
        echo '<td>' . $row['country'] . '</td>';
        echo '<td>' . $row['policy_type'] . '</td>';
        echo '<td>' . $row['policy_pricing'] . '</td>';
        echo '<td>' . $row['annual_income'] . '</td>';
        echo '<td>' . $row['id_number'] . '</td>';
        echo '<td>' . $row['phone_number'] . '</td>';
        echo '<td>' . $row['gender'] . '</td>';
        echo '<td>' . $row['application_date'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo 'No records found';
}
?>
