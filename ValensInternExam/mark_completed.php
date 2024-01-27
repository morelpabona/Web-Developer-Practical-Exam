<?php
require("conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["mark_completed"])) {
    try {
        $plateno = $_POST["plateno"];

        // Update the action column to mark the job as completed
        $updateQuery = "UPDATE exam SET action = 'completed' WHERE plateno = :plateno";
        $stmt = $conn->prepare($updateQuery);
        $stmt->bindParam(':plateno', $plateno);
        $stmt->execute();

        // Redirect back to the main page
        header("Location: newpaint.php");
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    // Handle invalid or direct access to this script
    echo "Invalid request.";
}
?>
