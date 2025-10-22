<?php

$articles = [
    [
        "title" => "first post",
        "content" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque ducimus quibusdam doloremque sequi explicabo vero? Aliquid enim obcaecati repellat quidem magni similique, facilis rem ad placeat nesciunt deleniti quia soluta.",
    ],

    [
        "title" => "second thing",
        "content" => "another Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque ducimus quibusdam doloremque sequi explicabo vero? Aliquid enim obcaecati repellat quidem magni similique, facilis rem ad placeat nesciunt deleniti quia soluta."
    ]
];

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