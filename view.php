<?php
if (isset($_GET['note'])) {
    $directory = "notes/";
    $noteTitle = $_GET['note'];
    $filename = $directory . $noteTitle;

    if (file_exists($filename)) {
        $noteContent = file_get_contents($filename);
        include('header.php'); // Include the header with Bootstrap
?>

<div class="container mt-5">
    <h1><?php echo basename($noteTitle, ".txt"); ?></h1>
    <p><?php echo nl2br($noteContent); ?></p>
    <a href="index.php" class="btn btn-primary">Back to Notes</a>
</div>

<?php
    } else {
        echo "Note not found!";
    }
}
?>

<?php include('footer.php'); ?>
