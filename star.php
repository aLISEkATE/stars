<?php
    $x=4;
    echo "<p>$x</p>" ;
    
    $conn = new mysqli("localhost", "root", "", "stars");
   $results = $conn->query("SELECT * FROM stars");
$row = $results->fetch_assoc(); 

 var_dump($row);
 echo "<form>";
    echo "<input name='userid' />ID:";
    echo "<input name='image' type='password' />Password:";
    echo "<input type='submit' value='Reģistrēties' />";
 echo "</form>";

    ?>