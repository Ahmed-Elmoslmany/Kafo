<footer class="bg-white py-8" id="contact">
	<div class="container mx-auto flex flex-wrap justify-center sm:justify-between items-center px-4">
		<div class="w-full sm:w-auto flex justify-center sm:justify-start items-center mb-6 sm:mb-0">
			<a class="text-2xl font-bold text-[#FC4A1C]" href="{{ url('/') }}">
				<img class="w-32" src="{{ Vite::asset('resources/images/logo.png') }}" alt="App Screen Previews">
			</a>
		</div>

		<div class="w-full sm:w-1/4 mb-6 sm:mb-0 text-center sm:text-left">
			<h3 class="font-bold mb-4">{{__('information')}}</h3>
			<ul class="list-none space-y-2">
				<li><a class="text-gray-700 hover:text-[#FC4A1C]" href="#">{{__('about')}}</a></li>
				<li><a class="text-gray-700 hover:text-[#FC4A1C]" href="#">{{__('advantages')}}</a></li>
				<li><a class="text-gray-700 hover:text-[#FC4A1C]" href="#">{{__('contact')}}</a></li>
				<li><a class="text-gray-700 hover:text-[#FC4A1C]" href="#">{{__('services')}}</a></li>
			</ul>
		</div>

		<div class="w-full sm:w-1/4 mb-6 sm:mb-0 text-center sm:text-left">
			<h3 class="font-bold mb-4">{{__('contact')}}</h3>
			<ul class="list-none space-y-2">
				<li class="flex flex-col sm:flex-row sm:items-center justify-center sm:justify-start">
					<i class="fas fa-map-marker-alt sm:mr-2"></i>
					<span>1234 Sample Street, Austin Texas 78704</span>
				</li>
				<li class="flex flex-col sm:flex-row sm:items-center justify-center sm:justify-start">
					<i class="fas fa-phone sm:mr-2"></i>
					<span>512.333.2222</span>
				</li>
				<li class="flex flex-col sm:flex-row sm:items-center justify-center sm:justify-start">
					<i class="fas fa-envelope sm:mr-2"></i>
					<span>sampleemail@gmail.com</span>
				</li>
			</ul>
		</div>

		<div class="w-full sm:w-1/4 flex flex-col items-center sm:items-start">
			<h3 class="font-bold mb-4">{{__('contact')}}</h3>
			<div class="flex space-x-4 justify-center sm:justify-start">
				<a class="text-xl text-blue-600 hover:text-[#FC4A1C]" href="#">
					<i class="fab fa-facebook"></i>
				</a>
				<a class="text-xl text-blue-400 hover:text-[#FC4A1C]" href="#">
					<i class="fa-brands fa-twitter"></i>
				</a>
				<a class="text-xl text-yellow-400 hover:text-[#FC4A1C]" href="#">
					<i class="fab fa-snapchat"></i>
				</a>
				<a class="text-xl text-black hover:text-[#FC4A1C]" href="#">
					<i class="fa-brands fa-tiktok"></i>
				</a>
			</div>
		</div>
	</div>
</footer>
