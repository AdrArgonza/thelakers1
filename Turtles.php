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
            while ($row = mysqli_fetch_assoc($result)) {
            echo "Player Name: " . $row['player']."<br>" ;
            echo "Player Number: ". $row['player1']."<br>" ;
            echo "Player Position: " . $row['player2']."<br>" ;
            echo "Player Age: " . $row['player3']."<br>" ;
            echo "Player Age: " . $row['player3']."<br>" ;
            echo "Player Age: " . $row['player3']."<br>" ;
            echo "Player Age: " . $row['player3']."<br>" ;
            echo "Player Age: " . $row['player3']."<br>" ;
            echo "Player Age: " . $row['player3']."<br>" ;
          }
        }
?>