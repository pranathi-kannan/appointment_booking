<!DOCTYPE html>
<html>

<head>
    <title>Timetable</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 8px;
            text-align: center;
            border: 1px solid black;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        .class {
            background-color: red;
            color: white;
        }

        .nil {
            background-color: green;
            color: white;
        }
    </style>
    <script>
        function toggleButton(button) {
            if (button.innerHTML === "NIL") {
                button.innerHTML = "CLASS";
                button.className = "class";
            } else {
                button.innerHTML = "NIL";
                button.className = "nil";
            }
        }
    </script>
</head>

<body>
    <table>
        <tr>
            <th>Time</th>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
        </tr>
        <tr>
            <td>9am-10am</td>
            <td><button class="nil" onclick="toggleButton(this)">NIL</button></td>
            <td><button class="class" onclick="toggleButton(this)">CLASS</button></td>
            <td><button class="nil" onclick="toggleButton(this)">NIL</button></td>
            <td><button class="class" onclick="toggleButton(this)">CLASS</button></td>
            <td><button class="nil" onclick="toggleButton(this)">NIL</button></td>
        </tr>
        <tr>
            <td>10am-11am</td>
            <td><button class="nil" onclick="toggleButton(this)">NIL</button></td>
            <td><button class="class" onclick="toggleButton(this)">CLASS</button></td>
            <td><button class="nil" onclick="toggleButton(this)">NIL</button></td>
            <td><button class="class" onclick="toggleButton(this)">CLASS</button></td>
            <td><button class="nil" onclick="toggleButton(this)">NIL</button></td>
        </tr>
        <tr>
            <td>11am-11:15am</td>
            <td colspan="5"><button class="nil" onclick="toggleButton(this)">Break</button></td>
        </tr>
        <tr>
            <td>11:15am-12:15pm</td>
            <td><button class="class" onclick="toggleButton(this)">CLASS</button></td>
            <td><button class="nil" onclick="toggleButton(this)">NIL</button></td>
            <td><button class="class" onclick="toggleButton(this)">CLASS</button></td>
            <td><button class="nil" onclick="toggleButton(this)">NIL</button></td>
            <td><button class="class" onclick="toggleButton(this)">CLASS</button></td>
        </tr>
        <tr>
            <td>12:15pm-1pm</td>
            <td><button class="class" onclick="toggleButton(this)">CLASS</button></td>
            <td><button class="nil" onclick="toggleButton(this)">NIL</button></td>
            <td><button class="class" onclick="toggleButton(this)">CLASS</button></td>
            <td><button class="nil" onclick="toggleButton(this)">NIL</button></td>
            <td><button class="class" onclick="toggleButton(this)">CLASS</button></td>
        </tr>
        <tr>
            <td>1pm-2pm</td>
            <td colspan="5"><button class="nil" onclick="toggleButton(this)">Break</button></td>
        </tr>
        <tr>
            <td>2pm-3pm</td>
            <td><button class="class" onclick="toggleButton(this)">CLASS</button></td>
            <td><button class="nil" onclick="toggleButton(this)">NIL</button></td>
            <td><button class="class" onclick="toggleButton(this)">CLASS</button></td>
            <td><button class="nil" onclick="toggleButton(this)">NIL</button></td>
            <td><button class="class" onclick="toggleButton(this)">CLASS</button></td>
        </tr>
    </table>
</body>

</html>
<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "appointment_booking";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the data from the timetable
$data = array(
    array("9am-10am", "NIL", "CLASS", "NIL", "CLASS", "NIL"),
    array("10am-11am", "NIL", "CLASS", "NIL", "CLASS", "NIL"),
    array("11am-11:15am", "Break", "Break", "Break", "Break", "Break"),
    array("11:15am-12:15pm", "CLASS", "NIL", "CLASS", "NIL", "CLASS"),
    array("12:15pm-1pm", "CLASS", "NIL", "CLASS", "NIL", "CLASS"),
    array("1pm-2pm", "Break", "Break", "Break", "Break", "Break"),
    array("2pm-3pm", "CLASS", "NIL", "CLASS", "NIL", "CLASS")
);

// Format the data into SQL insert statements
$sql = "INSERT INTO timetable (time, monday, tuesday, wednesday, thursday, friday) VALUES ";
foreach ($data as $row) {
    $sql .= "('" . $row[0] . "', '" . $row[1] . "', '" . $row[2] . "', '" . $row[3] . "', '" . $row[4] . "', '" . $row[5] . "'),";
}
$sql = rtrim($sql, ",");

// Execute the SQL insert statements
if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . $conn->error;
}

// Close the database connection
$conn->close();
?>