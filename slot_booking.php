<?php
$connection = mysqli_connect("localhost", "root", "", "appointment_booking");

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $startTime = $_POST["start_time"];
    $endTime = $_POST["end_time"];

    // Perform sanitization and validation on the input data if required

    // Prepare the SQL statement
    $sql = "INSERT INTO available_slots (start_time, end_time) VALUES (?, ?)";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("ss", $startTime, $endTime);

    // Execute the SQL statement
    if ($stmt->execute()) {
        echo "Data stored successfully.";
    } else {
        echo "Error storing data: " . $stmt->error;
    }

    // Close the database connection
    $stmt->close();
    $connection->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .slot-box {
        display: inline-block;
        margin-right: 10px;
        margin-bottom: 10px;
        padding: 5px;
        border: 1px solid black;
        border-radius: 5px;
        cursor: pointer;
    }

    .slot-box:hover {
        background-color: lightgray;
    }
</style>

<body>

    <div>
        <form method="POST" action="store_slots.php"> <!-- Replace with your PHP script to store slots -->
            <label for="start-time">Start Time:</label>
            <input type="time" id="start-time" name="start_time">

            <label for="end-time">End Time:</label>
            <input type="time" id="end-time" name="end_time">

            <button type="submit">Submit</button> <!-- Change type to "submit" -->
        </form>

        <div id="slots"></div>

        <script>
            function displaySlots() {
                const startTime = document.getElementById('start-time').value;
                const endTime = document.getElementById('end-time').value;

                const start = new Date(`1970-01-01T${startTime}`);
                const end = new Date(`1970-01-01T${endTime}`);

                const slots = getSlots(start, end, 10); // 10-minute interval

                const slotsDiv = document.getElementById('slots');
                slotsDiv.innerHTML = ''; // clear previous slots

                for (let i = 0; i < slots.length; i++) {
                    const slot = slots[i];
                    const slotBox = document.createElement('div');
                    slotBox.classList.add('slot-box');
                    slotBox.textContent = slot.toLocaleTimeString([], {
                        hour: '2-digit',
                        minute: '2-digit'
                    });
                    slotsDiv.appendChild(slotBox);
                }
            }

            function getSlots(startTime, endTime, interval) {
                const slots = [];
                let currentTime = startTime;
                while (currentTime < endTime) {
                    slots.push(new Date(currentTime));
                    currentTime.setTime(currentTime.getTime() + interval * 60000);
                }
                return slots;
            }
        </script>
</body>

</html>
