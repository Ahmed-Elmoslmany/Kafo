<div class="flex flex-col md:flex-row items-center justify-between bg-hero-gradient p-8" id="about">
	<div class="w-full md:w-1/2 text-white relative">
		<div class="absolute left-0 top-0 bottom-0 ml-5 w-0.5 bg-white"></div>
		<h1 class="text-2xl md:text-4xl font-bold mb-4 pl-8">{{__('hero-head')}}</h1>

		<p class="mb-6 text-lg md:text-2xl font-bold pl-8">
			<br>
			{{__('hero-para')}}
		</p>
		<div class="flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-6 pl-8">
			<a class="m-2 transition-transform bg-black rounded-lg transform hover:scale-105 flex flex-col items-center py-1 px-8"
				href="https://play.google.com/store" target="_blank">
				<span class="text-white font-bold">{{__('get')}}</span>
				<div>
					<i class="fa-brands fa-google-play"></i> <span class="text-white font-bold">{{__('google-play')}}</span>
				</div>
			</a>

			<a class="transition-transform bg-black rounded-lg transform hover:scale-105 flex flex-col items-center py-1 px-8"
				href="https://www.apple.com/app-store/" target="_blank">
				<span class="text-white font-bold">{{__('get')}}</span>
				<div>
					<i class="fa-brands fa-apple"></i>
					<span class="text-white font-bold">{{__('app-store')}}</span>
				</div>
			</a>
		</div>

		<div class="fixed left-0 top-1/4 flex flex-col items-center space-y-2 mt-4 bg-black p-2 rounded-r-lg shadow-lg">
			<a class="text-xl text-white" href="#">
				<i class="fab fa-facebook"></i>
			</a>
			<a class="text-xl text-white" href="#">
				<i class="fa-brands fa-twitter"></i>
			</a>
			<a class="text-xl text-white" href="#">
				<i class="fab fa-snapchat"></i>
			</a>
			<a class="text-xl text-white" href="#">
				<i class="fa-brands fa-tiktok"></i>
			</a>
		</div>
	</div>
	<div class="w-full md:w-1/2 flex justify-center mt-8 md:mt-0">
		<img class="w-full md:w-3/4" src="{{ Vite::asset('resources/images/hero.png') }}" alt="App Screen Previews">
	</div>
</div>
