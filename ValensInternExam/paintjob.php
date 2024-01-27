<?php
require("conn.php");

try {

    $query = "SELECT * FROM exam ORDER BY plateno DESC";
    $stmt = $conn->query($query);
    $paintjobs = $stmt->fetchAll(PDO::FETCH_ASSOC);


    $paintjobsCount = count($paintjobs);
    $paintjobsSlice = array_slice($paintjobs, 0, min(5, $paintjobsCount));
    $paintjobsRemaining = array_slice($paintjobs, 5);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Paint Jobs</title>
    <link rel="stylesheet" href="style.css">
    <style>
      
    </style>
</head>
<body>

    <p>Paint Job in Process</p>
    <table class="paintJobTable">
         <thead>
            <tr class="theader">
                <th>Plate No.</th>
                <th>Current Color</th>
                <th>Target Color</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody class="t-body">
            <?php if (!empty($paintjobsSlice)) : ?>
                <?php foreach ($paintjobsSlice as $paintjob) : ?>
                    <tr>
                        <td><?= $paintjob['plateno'] ?></td>
                        <td><?= $paintjob['currentcolor'] ?></td>
                        <td><?= $paintjob['targetcolor'] ?></td>
                        <td>
                            <form action="mark_completed.php" method="post">
                                <input type="hidden" name="plateno" value="<?= $paintjob['plateno'] ?>">
                                <button class = "actioButton"type="submit" name="mark_completed" onclick="updateColorCounts('<?= strtolower($paintjob['targetcolor']) ?>')">Mark as Completed</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="4">No paint jobs found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table> <br>

    <p>Paint Job Queue</p>
    <table class="paintQueue">
        <thead>
            <tr class="theader">
                <th>Plate No.</th>
                <th>Current Color</th>
                <th>Target Color</th>
            </tr>
        </thead>
        <tbody class="t-body">
            <?php if (!empty($paintjobsRemaining)) : ?>
                <?php foreach ($paintjobsRemaining as $queueJob) : ?>
                    <tr>
                        <td><?= $queueJob['plateno'] ?></td>
                        <td><?= $queueJob['currentcolor'] ?></td>
                        <td><?= $queueJob['targetcolor'] ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="4">No paint jobs in the queue.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</body>

</html>
