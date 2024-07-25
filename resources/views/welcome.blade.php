<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Laravel</title>

	<link href="https://fonts.bunny.net" rel="preconnect">
	<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet" />

	@vite("resources/css/app.css")

</head>

<body>
	@include("components.navbar")
	@include("components.hero")
	@include("components.kafo")
	@include("components.features")
	@include("components.download")
	@include("components.footer")
	<div class="container mx-auto mt-8">
		@yield("content")
	</div>
</body>

</html>
