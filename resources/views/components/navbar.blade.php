<nav class="bg-white shadow-md py-4">
	<div class="container mx-auto flex justify-between items-center px-4">
		<div class="flex items-center">
			<a class="text-2xl font-bold text-[#FC4A1C]" href="{{ url("/") }}">
				<img class="w-3/4" src="{{ Vite::asset("resources/images/logo.png") }}" alt="App Screen Previews">
			</a>
		</div>

		<div class="hidden md:flex space-x-4">
			<a class="font-bold relative text-gray-700 hover:text-[#FC4A1C] {{ request()->is("home") ? "text-[#FC4A1C]" : "" }}"
				href="{{ url("/") }}"
			>
				Home
				@if (request()->is("/"))
					<span class="absolute inset-x-0 bottom-0 border-b-2 border-[#FC4A1C]"></span>
				@endif
			</a>
			<a class="font-bold relative text-gray-700 hover:text-[#FC4A1C] {{ request()->is("about") ? "text-[#FC4A1C]" : "" }}"
				href="{{ url("#about") }}"
			>
				About
				@if (request()->is("about"))
					<span class="absolute inset-x-0 bottom-0 border-b-2 border-[#FC4A1C]"></span>
				@endif
			</a>
			<a
				class="font-bold relative text-gray-700 hover:text-[#FC4A1C] {{ request()->is("services") ? "text-[#FC4A1C]" : "" }}"
				href="{{ url("#services") }}"
			>
				Services
				@if (request()->is("services"))
					<span class="absolute inset-x-0 bottom-0 border-b-2 border-[#FC4A1C]"></span>
				@endif
			</a>
			<a
				class="font-bold relative text-gray-700 hover:text-[#FC4A1C] {{ request()->is("contact") ? "text-[#FC4A1C]" : "" }}"
				href="{{ url("#contact") }}"
			>
				Contact
				@if (request()->is("contact"))
					<span class="absolute inset-x-0 bottom-0 border-b-2 border-[#FC4A1C]"></span>
				@endif
			</a>
		</div>

		<div>
			<a class="font-bold bg-[#FC4A1C] text-white px-4 py-2 rounded-md hover:bg-[#e0431a]" href="{{ url("/download") }}">
				Download
			</a>
		</div>
	</div>
</nav>
