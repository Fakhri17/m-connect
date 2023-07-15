<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>M-Connect</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<script src="{{ asset('js/app.js')}}"></script>
</head>
<body>
  <section class="bg-white">
		<div class="flex justify-center min-h-screen">
			<div class="relative hidden bg-cover lg:block lg:w-1/2" style="background-image: url('{{ asset('/images/form-image.png')}}')">
				<div class="absolute top-0 left-0 right-0 bg-black bg-opacity-70 h-full flex items-center">
				</div>
			</div>
      @yield('content')
			
		</div>
	</section>
</body>
</html>