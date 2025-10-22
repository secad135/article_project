<?php

require 'includes/database.php';

// isset: if user remove this "?id=" from url they will get warning and files of website will be seen
// is_numeric: for sql injection text won't be allowed
if(isset($_GET['id']) && is_numeric($_GET['id'])){

$sql = "SELECT *
        FROM article
        WHERE id= " . $_GET['id'];

$result = mysqli_query($conn, $sql);

if ($result === false) {
    echo mysqli_error($conn);
} else {
    $article = mysqli_fetch_assoc($result);
}

// if url messed up the value will be null page shown massage "Article not found"
} else {
    $article = null ;
}
?>

<?php require 'includes/header.php'; ?>

        <?php
        if ($article === null): ?>
            <p>Article not found.</p>
        <?php else: ?>
            <article>
                <!-- no for loop for single article -->
                <h2><?= $article['title']; ?></h2>
                <p><?= $article['content']; ?></p>
            </article>
        <?php endif; ?>
<?php require 'includes/footer.php'; ?>