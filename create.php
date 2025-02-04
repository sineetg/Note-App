<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $directory = "notes/";
    $noteTitle = $_POST['title'];
    $noteContent = $_POST['content'];
    $filename = $directory . $noteTitle . ".txt";  // Filename based on note title
    
    // Save content to file
    file_put_contents($filename, $noteContent);
    header("Location: index.php"); // Redirect to the main page after saving
}

include('header.php'); // Include the header with Bootstrap
?>

<div class="container mt-5">
    <h1>Create New Note</h1>
    <form method="POST">
        <div class="mb-3">
            <input type="text" class="form-control" name="title" placeholder="Note Title" required>
        </div>
        <div class="mb-3">
            <textarea class="form-control" name="content" placeholder="Write your note here..." rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Save Note</button>
    </form>
</div>

<?php include('footer.php'); ?>
