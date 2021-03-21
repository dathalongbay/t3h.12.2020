<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$tuoi = 21;
if ($tuoi > 18) { ?>
    <section>Tuoi lao dong</section>

    <p class="article-meta">
            <span class="article-publish">
                <span class="friendly-time">2 giờ trước</span>
                <span class="time">15:50</span>
                <span class="date">21/3/2021</span>
            </span>

            <a href="/thoi-su.html" title="Xã hội">
                <span class="category-parent">Xã hội</span>
            </a>

            <a href="/thoi-su.html" title="Xã hội">
                <span class="category">Xã hội</span>
            </a>

        </p>
<?php
} else { ?>
    <span>Tuoi tre em</span>

    <p class="article-meta">
            <span class="article-publish">
                <span class="friendly-time">2 giờ trước</span>
                <span class="time">15:50</span>
                <span class="date">21/3/2021</span>
            </span>

            <a href="/thoi-su.html" title="Xã hội">
                <span class="category-parent">Xã hội</span>
            </a>

            <a href="/thoi-su.html" title="Xã hội">
                <span class="category">Xã hội</span>
            </a>

        </p>
<?php
}
?>

</body>
</html>