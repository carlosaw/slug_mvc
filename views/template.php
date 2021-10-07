<html>
<head>
	<meta charset="UTF-8">
	<title>Slug Mvc</title>
	<link rel="stylesheet" href="<?php BASE_URL; ?>assets/css/style.css" type="text/css">
</head>
<body>
	<h1>Fotografias Fulano</h1>
	<a href="<?php echo BASE_URL; ?>">Home</a>
	<a href="<?php echo BASE_URL; ?>galeria">Galeria</a>
	<hr/>

	<?php $this->loadViewInTemplate($viewName, $viewData); ?>
</body>
</html>