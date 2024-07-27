<nav class="bg-white shadow-md ">
	<div class="container mx-auto flex justify-between items-center px-4">
		<div class="flex items-center">
			<a class="text-2xl font-bold text-[#FC4A1C]" href="{{ url('/') }}">
				<img class="w-3/4" src="{{ Vite::asset('resources/images/logo.png') }}" alt="App Screen Previews">
			</a>
		</div>

		<div class="block md:hidden flex items-center space-x-4">
			<a class="font-bold bg-[#FC4A1C] text-white px-4 py-2 rounded-md hover:bg-[#e0431a]" href="{{ url('/download') }}">
				{{__('download')}}
			</a>
			<button id="menu-button" class="text-gray-700 focus:outline-none">
				<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
				</svg>
			</button>
		</div>

		<div id="nav-links" class="hidden md:flex md:space-x-4 mx-auto">
			<a class="font-bold relative text-gray-700 hover:text-[#FC4A1C] {{ request()->is('home') ? 'text-[#FC4A1C]' : '' }}" href="{{ url('/') }}">
				{{__('home')}}
				@if (request()->is('/'))
					<span class="absolute inset-x-0 bottom-0 border-b-2 border-[#FC4A1C]"></span>
				@endif
			</a>
			<a class="font-bold relative text-gray-700 hover:text-[#FC4A1C] {{ request()->is('about') ? 'text-[#FC4A1C]' : '' }}" href="{{ url('#about') }}">
				{{__('about')}}
				@if (request()->is('about'))
					<span class="absolute inset-x-0 bottom-0 border-b-2 border-[#FC4A1C]"></span>
				@endif
			</a>
			<a class="font-bold relative text-gray-700 hover:text-[#FC4A1C] {{ request()->is('services') ? 'text-[#FC4A1C]' : '' }}" href="{{ url('#services') }}">
				{{__('services')}}
				@if (request()->is('services'))
					<span class="absolute inset-x-0 bottom-0 border-b-2 border-[#FC4A1C]"></span>
				@endif
			</a>
			<a class="font-bold relative text-gray-700 hover:text-[#FC4A1C] {{ request()->is('contact') ? 'text-[#FC4A1C]' : '' }}" href="{{ url('#contact') }}">
				{{__('contact')}}
				@if (request()->is('contact'))
					<span class="absolute inset-x-0 bottom-0 border-b-2 border-[#FC4A1C]"></span>
				@endif
			</a>
		</div>

		<div class="hidden md:block">
			<a class="font-bold bg-[#FC4A1C] text-white px-4 py-2 rounded-md hover:bg-[#e0431a]" href="{{ url('/download') }}">
				{{__('download')}}
			</a>
		</div>
	</div>

	<div id="mobile-menu" class="md:hidden hidden">
		<a class="block py-2 px-4 font-bold text-gray-700 hover:text-[#FC4A1C] {{ request()->is('home') ? 'text-[#FC4A1C]' : '' }}" href="{{ url('/') }}">Home</a>
		<a class="block py-2 px-4 font-bold text-gray-700 hover:text-[#FC4A1C] {{ request()->is('about') ? 'text-[#FC4A1C]' : '' }}" href="{{ url('#about') }}">About</a>
		<a class="block py-2 px-4 font-bold text-gray-700 hover:text-[#FC4A1C] {{ request()->is('services') ? 'text-[#FC4A1C]' : '' }}" href="{{ url('#services') }}">Services</a>
		<a class="block py-2 px-4 font-bold text-gray-700 hover:text-[#FC4A1C] {{ request()->is('contact') ? 'text-[#FC4A1C]' : '' }}" href="{{ url('#contact') }}">Contact</a>
		<a class="block py-2 px-4 font-bold bg-[#FC4A1C] text-white rounded-md hover:bg-[#e0431a]" href="{{ url('/download') }}">Download</a>
	</div>
</nav>

<script>
	document.getElementById('menu-button').addEventListener('click', function() {
		const mobileMenu = document.getElementById('mobile-menu');
		mobileMenu.classList.toggle('hidden');
	});
</script>
