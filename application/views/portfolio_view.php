<p>
<table>
<tr><td>Year</td><td>Project</td><td>Description</td></tr>
<?php

    foreach($data as $row)
    {
        echo '<tr><td>'.$row['year'].'</td><td>'.$row['syte'].'</td><td>'.$row['description'].'</td></tr>';
    }
?>
</table>
</p>
