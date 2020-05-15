<?php

require_once('config.php');

/*
$array1 = array("id" => 4,
"publDate" => 4012020,
"title" => "Titel4",
"content" => "Inhalt4");

print_r(Article::getById(3));
echo "<br>";
//Article::printJsonList();
echo "<br>";
//Article::addToJson($array1);
echo "<br>";
//Article::printJsonList();
echo "<br>";

/*
// Hier wird durch einen mehrdimensionalen Array iteriert und die Werte ausgegeben
for($a=0; $a<count($decoded_data); $a++) {
	foreach ($decoded_data[$a] as $key => $value) {
		
		echo $key . ': ' . $value;
		echo '<br />';
		
	}
}
*/

$action = isset( $_GET['action'] ) ? $_GET['action'] : "";

switch ( $action ) {
  case 'viewArticle':
    viewArticle();
    break;
  case 'about':
    about();
    break;
  case 'home':
    homepage();
    break;
  default:
    homepage();
}

function viewArticle() {
  if ( !isset($_GET["articleId"]) || !$_GET["articleId"] ) {
    homepage();
    return;
  }

  $results = array();
  $results['article'] = Article::getById( (int)$_GET["articleId"] );
  
  $results['pageTitle'] = $results['article']->title . " | Ape Blog";
  require( TEMPLATE_PATH . "/viewArticle.php" );
}

function homepage() {
  $results = array();
  $data = Article::getArticleList();
  $results['pageTitle'] = "Homepage | Ape Blog";
  require( TEMPLATE_PATH . "/home.php" );
}

function about() {
  $results = array();
  $results['pageTitle'] = "Über Mich | Ape Blog";
  require( TEMPLATE_PATH . "/about.php");
}
?>