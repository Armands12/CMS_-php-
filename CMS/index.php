<?php
 include_once ('includes/connection.php'); 
include_once ('includes/article.php');

$article = new Article;
$articles = $article->fetch_all();

print_r($articles);

?> 

<html>
<head>
<title>CMS Tutorial</title>
<link rel="stylesheet" href="assets/style.css" />
</head>
<body>
<div class="container">
<a href="index.php" id="logo">CMS</a>
<ol>
<li><a href="article?id=1">Article Title</a>-<small>posted 20.02.2021</small></li>

</ol> 
</div>
</body>
</html>
