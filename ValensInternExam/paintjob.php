<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<tbody>

<?php
     require("connection.php");
        $limit = 5;
        $sql = "SELECT * FROM paintjobs WHERE Action = 'Mark as Completed' ORDER BY id ASC LIMIT :limit";
        $statement = $conn->prepare($sql);
        $statement->bindParam(':limit', $limit, PDO::PARAM_INT);
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
                
        if (count($rows) > 0) {
              foreach ($rows as $row) {
              ?>
            <tr>
                <td><?php echo $row['PlateNo']; ?></td>
                <td><?php echo $row['Current_Color']; ?></td>
                 <td><?php echo $row['Target_Color']; ?></td>
                 <td class="complete-action" data-id="<?php echo $row['id']; ?>"><?php echo $row['Action']; ?></td>
               </tr>
           <?php
                            }
                            if (count($rows) > $limit) {
                                $remainingRows = count($rows) - $limit;
                                echo "<script>document.getElementById('paintJobsTableWithoutAction').style.display = 'block';</script>";
                            } else {
                                echo "<script>document.getElementById('paintJobsTableWithoutAction').style.display = 'none';</script>";
                            }
                        } else {
                            echo "<tr><td colspan='4'>No paint jobs in progress</td></tr>";
                        }
                        ?>
                    
                     
    
</body>
</html>