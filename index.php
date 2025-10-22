<?php
// array deleted

//connection to datatbase
$db_host = "localhost";
$db_user = "ap_user";
$db_pass = "123456";
$db_name = "article_project";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
// database created with phpmyadmin "article_project"
// table added to it, and two rows added there

if(mysqli_connect_error()){
    echo mysqli_connect_error();
    exit;
}

$sql = "SELECT *
        FROM article
        ORDER BY published_at;";

$result = mysqli_query($conn, $sql);

if($result === false){
    echo mysqli_error($conn);
} else{
    $articles = mysqli_fetch_all($result,MYSQLI_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
</head>

<body>
    <header>
        <h1>my blog</h1>
    </header>
    <main>
        <ul>
            <?php foreach ($articles as $article): ?>
                <li>
                    <b><?= $article['title']; ?></b>
                    <p><?= $article['content']; ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>
</body>

</html>