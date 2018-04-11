
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../style/normalize.css">
 	 <link rel="stylesheet" href="../style/main.css">
  	<link rel="stylesheet" href="../style/style.css">
</head>
<body>

</body>
</html>

<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>

    <label for="title">Title</label>
    <input type="input" name="title" /><br />

    <label for="text">Text</label>
    <textarea name="text"></textarea><br />

    <input type="submit" name="submit" value="Create news item" />

</form>