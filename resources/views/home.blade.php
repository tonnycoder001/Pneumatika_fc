@extends('layouts.index')

@section('content')
<section class="pt-24 bg-black-500  ">
    <div class="px-12 mx-auto max-w-7xl">
        <div class="w-full mx-auto text-left md:w-11/12 xl:w-9/12 md:text-center">
            <h1 class="mb-8 text-4xl font-bold leading-none tracking-normal text-gray-900 md:text-6xl  md:tracking-tight animate-bounce ">
                <span>Welcome</span> <span class="block w-full py-2 text-transparent bg-clip-text leading-12 bg-gradient-to-r from-green-400 to-purple-500 lg:inline">to pneumatika</span> <span>football academy</span>
            </h1>
            <p class="px-0 mb-8 text-lg text-white-600  md:text-xl lg:px-24">
                It's a community dedicated to nurturing young people's talents while helping them discover their purpose in life.
            </p>
		</div>
	</div>
</section>
<section >
<div class="px-4  mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
	<div class="mx-auto mb-10 lg:max-w-xl sm:text-center">
	  <p class="inline-block px-3 py-px mb-4 text-2xl font-bold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
		FOUNDER MEMBERS
	  </p>
	  <p class="text-base text-gray-700 md:text-lg text-white pb-4">
		Pneumatika's journey began with the vision of dedicated individuals who combined their passion for football and youth development. The founding members include:
	  </p>
	</div>
	<div class="grid gap-10 mx-auto sm:grid-cols-2 lg:grid-cols-4 lg:max-w-screen-lg">
	  <div>
		<div class="relative pb-56 mb-4 rounded shadow lg:pb-64">
		  <img class="absolute object-cover w-full h-full rounded" src="" alt="Person" />
		</div>
		<div class="flex flex-col sm:text-center">
		  <p class="text-lg font-bold">Miller Adulu</p>
		  <p class="mb-5 text-xs text-gray-800">Software engineer</p>
		  <div class="flex items-center space-x-3 sm:justify-center">
			<a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
			  <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
				<path
				  d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"
				></path>
			  </svg>
			</a>
			<a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
			  <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
				<path
				  d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"
				></path>
			  </svg>
			</a>
		  </div>
		</div>
	  </div>
	  <div>
		<div class="relative pb-56 mb-4 rounded shadow lg:pb-64">
		  <img class="absolute object-cover w-full h-full rounded" src="" alt="Person" />
		</div>
		<div class="flex flex-col sm:text-center">
		  <p class="text-lg font-bold">Jeremy Kalafa</p>
		  <p class="mb-5 text-xs text-gray-800">Team coach</p>
		  <div class="flex items-center space-x-3 sm:justify-center">
			<a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
			  <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
				<path
				  d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"
				></path>
			  </svg>
			</a>
			<a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
			  <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
				<path
				  d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"
				></path>
			  </svg>
			</a>
		  </div>
		</div>
	  </div>
	  <div>
		<div class="relative pb-56 mb-4 rounded shadow lg:pb-64">
		  <img class="absolute object-cover w-full h-full rounded" src="" alt="Person" />
		</div>
		<div class="flex flex-col sm:text-center">
		  <p class="text-lg font-bold">Sharon Vigjedi</p>
		  <p class="mb-5 text-xs text-gray-800">IT expert</p>
		  <div class="flex items-center space-x-3 sm:justify-center">
			<a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
			  <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
				<path
				  d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"
				></path>
			  </svg>
			</a>
			<a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
			  <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
				<path
				  d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"
				></path>
			  </svg>
			</a>
		  </div>
		</div>
	  </div>
	  <div>
		<div class="relative pb-56 mb-4 rounded shadow lg:pb-64">
		  <img class="absolute object-cover w-full h-full rounded" src="" alt="Person" />
		</div>
		<div class="flex flex-col sm:text-center">
		  <p class="text-lg font-bold">Grace</p>
		  <p class="mb-5 text-xs text-gray-800"></p>
		  <div class="flex items-center space-x-3 sm:justify-center">
			<a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
			  <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
				<path
				  d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"
				></path>
			  </svg>
			</a>
			<a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
			  <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
				<path
				  d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"
				></path>
			  </svg>
			</a>
		  </div>
		</div>
	  </div>
	</div>
  </div>
</section>
<section class="pt-4">
    @include('layouts.footer')
</section>
@endsection
