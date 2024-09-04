<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepalgunj Living</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.44.0/tabler-icons.min.css">
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/ckeditor.css') }}">
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.css">
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5-premium-features/43.0.0/ckeditor5-premium-features.css">
    @vite('resources/js/app.js')
</head>


<body>
    <x-frontend.nav />


    {{ $slot }}



    <script type="importmap">
		{
			"imports": {
				"ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.js",
				"ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.0.0/",
				"ckeditor5-premium-features": "https://cdn.ckeditor.com/ckeditor5-premium-features/43.0.0/ckeditor5-premium-features.js",
				"ckeditor5-premium-features/": "https://cdn.ckeditor.com/ckeditor5-premium-features/43.0.0/"
			}
		}
		</script>
		<script src="https://cdn.ckbox.io/ckbox/latest/ckbox.js"></script>
		<script type="module" src="{{ asset('assets/frontend/js/ckeditor.js') }}"></script>
</body>


</html>
