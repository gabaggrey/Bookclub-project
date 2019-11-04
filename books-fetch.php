<?php
include'connection.php';

$sql = "SELECT * FROM books";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["book_title"] ."</td>
        <td>". $row["book_author"] ."</td>
        <td>". $row["book_publisher"] ."</td>
        <td>". $row["book_edition"] ."</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>