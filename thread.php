<!DOCTYPE html>
<html>
<meta charset="utf-8"/>


<table border='1' align="center">
                 <thead>
                    <tr>
                        <th width="50">NUM</th>
                        <th width="250">FILE</th>
                        <th width="200">TIME</th>
                        <th width="50">id</th>
                        <th width="70">subject</th>
                        <th width="250">memo</th>
                        <th width="70">DOWN</th>
                        <th width="50">DEL</th>
                        
        
                    </tr>
                </thead>
                <tbody>
                    <?php
                        for($i=0; $i<$num_result; $i++)
                        {
                            $row = $res->fetch_assoc();
                            echo "<tr>";
                            echo "<td align='center'>".$row['num']."</td>";
                            echo "<td align='left'>
                        <a href='./download.php?num=".$row['num']."'>".$row['name']."</a></td>";
                            echo "<td align='center'>".$row['time']."</td>";
                            echo "<td align='center'>".$row['id']."</td>";
                            echo "<td align='center'>
                        <a href='./view.php?num=".$row['num']."'>".$row['subject']."</a></td>";	
                            echo "<td align='center'>".$row['memo']."</td>";
                            echo "<td align='center'>".$row['down']."</td>";	
                            echo "<td align='center'>
                        <a href='./delete.php?num=".$row['num']."'>DEL</a></td>";					
                            echo "</tr>";
                        }
                      mysqli_close($mysqli);
                      ?>			<input type = "button" name = "table" value ="업로드" onclick = "location.href='table.php'";>
                                      </tbody>

</html>
                      