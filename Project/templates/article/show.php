<?php require dirname(__DIR__).'/header.php';?>
<div class="card" style="width: 100%;">
  <div class="card-body">
    <h5 class="card-title"><?=$article->getName();?></h5>
    <!-- <h6 class="card-subtitle mb-2 text-muted"><?//=$article->getAuthorId();?></h6> -->

    <!-- задание 3.1  -->
    <!-- получаем никнейм автора из объекта $author, который был передан в шаблон: $author->getNickName(). -->
    <h6 class="card-subtitle mb-2 text-muted"><?=$author->getNickName();?></h6>

    <p class="card-text"><?=$article->getText();?></p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
<?php require dirname(__DIR__).'/footer.php';?>