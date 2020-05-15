<?php include "templates/include/header.php" ?>

<!--
<ul>

  <?php foreach ($data as $article) { ?>

    <li>
      <h2>
        <span><?php echo date('j F, Y ', strtotime($article->publDate)) . ", " ?></span>
        <a href=".?action=viewArticle&amp;articleId=<?php echo $article->id ?>"><?php echo htmlspecialchars($article->title) ?></a>
      </h2>
    </li>

  <?php } ?>

</ul>

<?php foreach ($data as $article) { ?>
  <div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><a href=".?action=viewArticle&amp;articleId=<?php echo $article->id ?>"><?php echo htmlspecialchars($article->title) ?></a></h5>
      <p class="card-text"><?php echo date('j F, Y ', strtotime($article->publDate)) ?></p>
    </div>
  </div>
<?php } ?>
-->


  <div class="row">
  <?php foreach ($data as $article) { ?>
    <div class="col-sm-6">
      <div class="card my-4">
        <div class="card-body">
          <h5 class="card-title"><a href=".?action=viewArticle&amp;articleId=<?php echo $article->id ?>"><?php echo htmlspecialchars($article->title) ?></a></h5>
          <p class="card-text"><?php echo date('j F, Y ', strtotime($article->publDate)) ?></p>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>



<?php include "templates/include/footer.php" ?>