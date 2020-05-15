<?php include "templates/include/header.php" ?>

<h1><?php echo htmlspecialchars($results['article']->title) ?></h1>
<div><?php echo $results['article']->content ?></div>
<p>Published on <?php echo date('j F, Y ', strtotime($results['article']->publDate)) ?></p>

<?php include "templates/include/footer.php" ?>