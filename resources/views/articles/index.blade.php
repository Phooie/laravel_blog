<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
 <meta charset="utf-8">
 <title>Menu List</title>
</head>
<body>
	 <h1>Menu List</h1>
	 <ul>
		 <?php foreach($articles as $article): ?>
		    <li><?php echo $article['item'] ?></li>
		 <?php endforeach ?>
	 </ul>
</body>
</html>