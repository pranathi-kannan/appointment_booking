<!DOCTYPE html>
<html>

<head>
    <title>Timetable</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <style>
         *{
            font-family: Poppins, sans-serif;
            
        }
        body{
            background-color: white; 
            display: flex;
            margin: 0;
            padding: 0;
        }
        #sidebar {
            height: 100vh;
            width: 330px;
            color: #fff;
            box-sizing: border-box;
            font-size: 18px;
            line-height: 150%;
            display: flex;
            flex-direction: column;
            border-radius: 0px 20px 20px 0;
            overflow: hidden;
            background-color: white;
        }

        .left-top {
            flex: 0.20;
            background-color: rgba(12, 53, 106, 1);
        }

        .left-bottom {
            flex: 0.85;
            background-color: #30A2FF;
            padding: 30px;
            padding-top: 50px;
        }

        .circle1 {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin-top: -120px;
        }

        #content {
            flex-grow: 1;
            padding: 20px;
        }

        #footer {
            text-align: center;
            padding: 10px;
            background-color: #333;
        }

        #sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        #sidebar ul li {
            margin-bottom: 10px;
        }

        #sidebar li {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            padding: 19px;
            font-size: 18px;
        }

        #sidebar ul li a {
            text-decoration: none;
            color: black;
            display: block;
        }

        .img {
            width: 12%;
            height: 4%;
            padding-right: 20px;

        }


        .container1 {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }

        th,
        td {
            height: 1px;
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
            width: 120px;
            font-size: 15px;
        }

        .nil {
            background-color: green;
            color: white;
            width: 120px;
            font-size: 15px;
        }
        table {
            border-collapse: collapse;
            height: 600px;
            width: 850px;
            display: block;
            font-size: 15px;
            text-align: center;
            color: white;
            overflow-y:hidden;
            margin-left: 80px;
            border-radius: 15px 15px 15px 15px;
            
            
        }

        th,
        td {
           
            text-align: left;
        }

        th {
            background-color:rgba(48, 162, 255, 1) ;
            text-align: center;
            padding: 10px;
        }
        td{
            background-color:rgba(12,53,106,1);
            padding-left: 5px;
        }
        .right-container{
            background-color: white; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; 
            margin-left: 100px;
        }
        .bg-effect{
        background: white;
        height: 100%;
        width:0;
        border-radius: 30px;
        position: absolute;
        left: 0;
        bottom:0;
        z-index: 1;
        transition: 0.5s;
        color: black;
    }
    .btn-text {
    position: relative;
    z-index: 2;
}

button:hover .bg-effect {
    width: 100%;
}
    button:hover{
        border: none;
        color: black;
    }
    button{
        width: 200px;
        padding: 5px 0;
        text-align: center;
        margin: 20px 10px;
        border-radius: 30px;
        font-weight: bold;
        background-color:rgba(48, 162, 255, 1) ;
        color: white;
        cursor: pointer;
        overflow: hidden;
        position: relative;
        border: none;
        font-size: 20px;
    }
    .circle{
            width:120px;
            height:120px;
            border-radius:50%;
            margin-top: -10%;
        }
    #sidebar ul li a:hover{
        color:white;
        transition: 0.5s;
        cursor: pointer;
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
<div class="container1">
        <div id="sidebar">
            <div class="left-top">
            </div>
            <div class="left-bottom">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8V1YRVsyWYm9waoyPrvuW6N69jeXwZ2pXRw&usqp=CAU" class="circle1" align="center">
                <h2>Admin Dashboard</h2>
                <ul>
                    <li><img src="https://cdn-icons-png.flaticon.com/128/2636/2636428.png" class="img"><a href="http://localhost/appointment_booking/admin_appointments.php" >Alot Booking</a></li>
                    <li><img src="https://cdn-icons-png.flaticon.com/128/2636/2636428.png" class="img"><a href="time_avail.php" style="color:white;">Set Availability</a></li>
                    <li><img src="https://cdn-icons-png.flaticon.com/128/2645/2645897.png" class="img"><a href="">Notification</a></li>
                    <li><img src="https://cdn-icons-png.flaticon.com/128/1979/1979288.png" class="img"><a href="cancel.php">Cancellation</a></li>
                    <li><img src="https://cdn-icons-png.flaticon.com/128/3503/3503786.png" class="img"><a href="history_admin.php">History</a></li>
                    
                    <li> <img src="https://cdn-icons-png.flaticon.com/128/3503/3503827.png" class="img"><a href="developed-by.html">Developed by</a></li>
                </ul>
            </div> 
        </div>
        
        <div class="right-container" align="center"> 
        <div class="content">
        <center><table>
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
    </table></center>
</body>

</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "appointment_booking";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$data = array(
    array("9am-10am", "NIL", "CLASS", "NIL", "CLASS", "NIL"),
    array("10am-11am", "NIL", "CLASS", "NIL", "CLASS", "NIL"),
    array("11am-11:15am", "Break", "Break", "Break", "Break", "Break"),
    array("11:15am-12:15pm", "CLASS", "NIL", "CLASS", "NIL", "CLASS"),
    array("12:15pm-1pm", "CLASS", "NIL", "CLASS", "NIL", "CLASS"),
    array("1pm-2pm", "Break", "Break", "Break", "Break", "Break"),
    array("2pm-3pm", "CLASS", "NIL", "CLASS", "NIL", "CLASS")
);

$sql = "INSERT INTO timetable (time, monday, tuesday, wednesday, thursday, friday) VALUES ";
foreach ($data as $row) {
    $sql .= "('" . $row[0] . "', '" . $row[1] . "', '" . $row[2] . "', '" . $row[3] . "', '" . $row[4] . "', '" . $row[5] . "'),";
}
$sql = rtrim($sql, ",");

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error inserting data: " . $conn->error;
}

$conn->close();
?>