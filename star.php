<?php
    $x=4;
    echo "<p>$x</p>" ;

 $conn = new mysqli("localhost", "root", "", "stars");
   $results = $conn->query("SELECT * FROM stars");
$row = $results->fetch_assoc(); 
var_dump($row);


 
    if($_SERVER["REQUEST_METHOD"] == "POST"){    
      $UID = $_POST["userid"];
      $pass = $_POST["image"];
     $sql = "INSERT INTO stars (userid,image) VALUES ('$UID','$pass')"; 
     $conn->query($sql);
}
 
 echo "<form method='POST'>";
    echo "<label> ID:<input id='uid' name='userid' /></label><br>";
    echo "<label> Password:<input id='pass' name='image' type='password' /></label><br>";
    echo "<input  type='submit' value='Reģistrēties' />";
 echo "</form>";

echo "<br>";
$masivs =[6,8,10];
print_r($masivs);
echo "<br>";
$assoc_masivs = ["vecums"=>6,"atzime"=>8,"ids"=>10];
print_r($assoc_masivs);
    

    ?>