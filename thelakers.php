<?php
        include_once 'TheStartingLineup.html';
        require_once 'login.php';
        $conn = mysqli_connect($host, $user, $pass, $db, $port);
         if($conn->connect_error) die($conn->connect_error);
        $option = isset($_POST['player']) ? $_POST['player'] : false;
        if ($option){
            $testField = $_POST['player'];
            $query = "	select * from player where player = '" . $testField."';";
            $result = mysqli_query($conn, $query);
            
            echo "<table>";
            echo "<tr><th>Player Name</th><th>Player Number</th><th>Player Position</th><th>Player PPG</th><th>Player Height</th><th>Player Weight</th><th>Player Age</th><th>Year Drafted</th><th>Years in the League</th><th>About Player</th></tr>";
            while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>";
            echo $row['player'];
            echo "</td><td>";
            echo $row['player1'];
            echo "</td><td>";
            echo $row['player2'];
            echo "</td><td>";
            echo $row['player3'];
            echo "</td><td>";
            echo $row['player4'];
            echo "</td><td>";
            echo $row['player5'];
            echo "</td><td>";
            echo $row['player6'];
            echo "</td><td>";
            echo $row['player7'];
            echo "</td><td>";
            echo $row['player8'];
            echo "</td><td>";
            echo $row['player9'];
            echo "</td></tr>";
          }
            echo "</table>";
        }
?>