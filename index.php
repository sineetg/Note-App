<?php
$directory = "notes/";  // Directory where notes are stored

// Check if the directory exists, if not, create it
if (!is_dir($directory)) {
    mkdir($directory, 0777, true); // Create the directory with appropriate permissions
}

// Load existing notes
$notes = array_diff(scandir($directory), array('..', '.')); // Exclude '.' and '..'

include('header.php'); // Include the header with Bootstrap

?>

<div class="container mt-5">
    <h1>Notes App</h1>
    <a href="create.php" class="btn btn-primary mb-3">Create New Note</a>

    <h2>Existing Notes:</h2>
    <ul class="list-group">
        <?php foreach ($notes as $note): ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="view.php?note=<?php echo basename($note); ?>"><?php echo basename($note, ".txt"); ?></a>
                <a href="delete.php?note=<?php echo basename($note); ?>" class="btn btn-danger btn-sm">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

<?php include('footer.php'); ?>
