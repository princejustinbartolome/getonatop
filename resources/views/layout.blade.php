<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ $title }}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	{{{ Html::style("css/global.css") }}}
	{{{ Html::style("css/animate.css") }}}
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans:400,700">
	<!-- <link rel="stylesheet" href="https://fonts.google.com/specimen/Montserrat?selection.family=Montserrat:400,700|Open+Sans:400,700"> -->
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

</head>
<body>
	@yield("content")

	{{{ Html::script("js/") }}}
</body>
</html>