<?php


//connection to datatbase
$db_host = "localhost";
$db_user = "ap_user";
$db_pass = "123456";
$db_name = "article_project";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
}

// get the id of post from url
$sql = "SELECT *
        FROM article
        WHERE id= " . $_GET['id'];

$result = mysqli_query($conn, $sql);

if ($result === false) {
    echo mysqli_error($conn);
} else {
    $article = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
    <style>
        header {
            text-align: center;
        }

        main {
            width: 55%;
            padding: 10px;
            margin: 0 auto;
            background-color: beige;
        }
    </style>
</head>

<body>
    <header>
        <h1>my blog</h1>
    </header>
    <main>
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
    </main>
</body>

</html>