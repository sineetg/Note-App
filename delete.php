<?php
if (isset($_GET['note'])) {
    $directory = "notes/";
    $noteTitle = $_GET['note'];
    $filename = $directory . $noteTitle . ".txt";  // Path to note file
    
    if (file_exists($filename)) {
        unlink($filename);  // Delete file
        header("Location: index.php"); // Redirect after deletion
    } else {
        echo "Note not found!";
    }
}
?>
