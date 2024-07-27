<div class="flex flex-col lg:flex-row items-center justify-between bg-download-gradient p-6 lg:p-12 max-h-fit">
	<div class="w-full lg:w-1/2 text-white lg:pl-5">
		<h1 class="text-3xl md:text-5xl lg:text-7xl font-bold mb-2 lg:mb-4">Download</h1>
		<h1 class="text-3xl md:text-5xl lg:text-7xl font-bold mb-2 lg:mb-4">Our Application Now</h1>
		<div class="flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-6 p-4 rounded-lg">
			<a class=" m-2 transition-transform bg-black rounded-lg transform hover:scale-105 flex flex-col items-center py-1 px-8"
				href="https://play.google.com/store" target="_blank"
			>
				<span class="text-white font-bold">{{__('get')}}</span>
				<div>
					<i class="fa-brands fa-google-play"></i> <span class="text-white font-bold">{{__('google-play')}}</span>
				</div>
			</a>

			<a class="transition-transform bg-black rounded-lg transform hover:scale-105 flex flex-col items-center py-1 px-8"
				href="https://www.apple.com/app-store/" target="_blank"
			>
				<span class="text-white font-bold">{{__('get')}}</span>
				<div>
					<i class="fa-brands fa-apple"></i>
					<span class="text-white font-bold">{{__('app-store')}}</span>
				</div>
			</a>
		</div>
	</div>
	<div class="w-full lg:w-1/2 flex justify-center">
		<img class="w-3/4" src="{{ Vite::asset('resources/images/download.png') }}" alt="App Screen Previews">
	</div>
</div>
