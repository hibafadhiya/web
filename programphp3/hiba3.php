<!DOCTYPE html>
<html>
<head>
    <title>Indian Cricket Players</title>
    <style>
table{
width:50%;
border-collapse:collapse;
margin:20px auto;
}
th,td{
padding:10px;
text-align:center;
border:1px solid black;
}
th{
backgroud-color:lightgrey;
}
</style>
</head>
<body>

<?php
$players = array("Rohit Sharma", "Virat Kohli", "Jasprit Bumrah", "Ravindra Jadeja", "KL Rahul");
?>
<center>
<h2>List of Indian Cricket Players</h2>
</center><br>
<table border="1" cellpadding="10">
    <tr>
        <th>Serial No.</th>
        <th>Player Name</th>
    </tr>

    <?php
        $i = 1;
    foreach ($players as $player) {
        echo "<tr>";
        echo "<td>" . $i . "</td>";
        echo "<td>" . $player . "</td>";
        echo "</tr>";
        $i++;
    }
    ?>
</table>

</body>
</html>

