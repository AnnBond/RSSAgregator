<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>


<?php
include 'parser.php';
?>
<div class="container">
    <br><br>
    <blockquote class="blockquote text-right">
        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
    </blockquote>
    <br><br>
<div class="row">
<?php foreach ($content->channel->item as $item): ?>

<div class="col-lg-4">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="<?= $item->image ?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?= $item->title ?></h5>
            <p class="card-text"><?= $item->description  ?></p>
            <a href="<?= $item->link ?>" class="btn btn-primary">Go somewhere</a>
        </div>
    </div><br>
</div>

<?php endforeach; ?>
</div>
</div>
</body>
</html>

