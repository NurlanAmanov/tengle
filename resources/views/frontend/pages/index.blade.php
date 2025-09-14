    @extends('frontend.layout.master')

    @section('content')
        {{-- Slider --}}
      <section class="relative w-full">
        <div id="heroSwiper" class="swiper h-[70vh] md:h-[85vh]">
            <div class="swiper-wrapper">
                @foreach ($slider as $slider)
                    <div class="swiper-slide relative">
                        <img src="{{ asset('storage/' . $slider->image) }}" alt="{{ $slider->title }}"
                            class="w-full h-full object-cover">

                        <!-- Overlay with title & subtitle -->
                        <div
                            class="absolute inset-0 bg-black/40 flex flex-col items-center justify-center text-center text-white px-4">
                            <h2 class="text-2xl md:text-4xl font-bold mb-2">
                                {{ $slider->title }}
                            </h2>
                            @if ($slider->subtitle)
                                <p class="text-sm md:text-lg">{{ $slider->subtitle }}</p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Navigation buttons -->
            <div
                class="hero-swiper-prev absolute left-4 top-1/2 -translate-y-1/2 z-20 
            hidden md:flex w-10 h-10 rounded-full bg-white/80 hover:bg-white 
            shadow items-center justify-center text-gray-900 cursor-pointer">
                &lsaquo;
            </div>
            <div
                class="hero-swiper-next absolute right-4 top-1/2 -translate-y-1/2 z-20 
            hidden md:flex w-10 h-10 rounded-full bg-white/80 hover:bg-white 
            shadow items-center justify-center text-gray-900 cursor-pointer">
                &rsaquo;
            </div>

            <!-- Pagination -->
            <div class="hero-swiper-pagination absolute bottom-6 left-0 right-0 flex justify-center z-20"></div>
        </div>
    </section>



        <!-- About Us Section -->
        <section id="about" class="py-16 bg-white">
            <div class="container mx-auto px-6">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    @forEach ($about as $ab) 
                    <div>
                        <h2 class="section-heading mb-6">About Us</h2>
                        <p class="text-lg text-gray-700 mb-6">
                         {!! $ab->content !!}
                        </p>
                        
                        <a href="aboutus.html"
                            class="px-6 py-3 border-2 border-[#0C47A6] text-[#0C47A6] rounded-full font-semibold hover:bg-[#0C47A6] hover:text-white transition-all duration-300 inline-block">Learn
                            More</a>
                    </div>
                    <!-- Updated Image Block with new logo and removed background -->
                    <div class="rounded-xl overflow-hidden shadow-lg">
                        <img src="https://i.ibb.co/35jVYTZR/tenglee-logo.jpg" alt="Tenglee logo"
                            class="w-full h-auto object-cover transform hover:scale-105 transition-all duration-300">
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Why Choose Us Section -->
        <section id="why-choose-us" class="py-16 bg-gray-100">
            <div class="container mx-auto px-6 text-center">
                <h2 class="section-heading mb-8">Why Choose Us?</h2>
                <div class="grid md:grid-cols-3 gap-8">
                   @foreach ($service as $ser ) 

                   @endforeach
                  <div class="card bg-white p-8 rounded-xl shadow-md">
                        <h3 class="text-2xl font-bold mb-2 text-gray-800">{{$ser->title}}</h3>
                        <p class="text-gray-600">
                            {!! $ser ->content !!}
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="py-16 bg-white">
            <div class="container mx-auto px-6 text-center">
                <h2 class="section-heading mb-8">What We Do</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    @foreach($procses as $proc)
        <div class="card p-8 rounded-xl shadow-md">
                        <h3 class="text-2xl font-bold mb-4 text-gray-800">{{$proc->title}}</h3>
                    @if ($proc->image)
                <img src="{{ asset('storage/' . $proc->image) }}"
                     alt="{{ $proc->title }}"
                     class="w-full h-64 object-cover">
            @else
                <img src="https://via.placeholder.com/600x400?text=No+Image"
                     alt="No Image"
                     class="w-full h-64 object-cover">
            @endif
                        <p class="text-gray-600">
                           {!! $proc ->description !!}
                        </p>
                    </div>
                    @endforeach

                </div>
                <a href="services.html"
                    class="px-6 py-3 border-2 border-[#0C47A6] text-[#0C47A6] rounded-full font-semibold hover:bg-[#0C47A6] hover:text-white transition-all duration-300 inline-block mt-8">Learn
                    More</a>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="py-16 bg-gray-100">
            <div class="container mx-auto px-6">
                <h2 class="section-heading text-center mb-2">Our Key Projects</h2>
                <p class="text-lg text-gray-500 text-center mb-12">Explore our portfolio of significant achievements and
                    groundbreaking projects in the fields of marine engineering and offshore construction.</p>
               <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($project as $project)
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    @if($project->image_url)
                        @if(Str::startsWith($project->image_url, ['http://','https://']))
                            <img src="{{ $project->image_url }}" alt="{{ $project->project_title }}" class="w-full h-48 object-cover">
                        @else
                            <img src="{{ asset('storage/'.$project->image_url) }}" alt="{{ $project->project_title }}" class="w-full h-48 object-cover">
                        @endif
                    @else
                        <div class="w-full h-48 flex items-center justify-center bg-gray-200 text-gray-500">
                            No Image
                        </div>
                    @endif

                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800">{{ $project->project_title }}</h3>
                        <p class="text-sm text-gray-500">{{ $project->vessel_name ?? '-' }}</p>
                        <p class="text-sm text-gray-500">{{ $project->company_or_owner ?? '-' }}</p>
                        <p class="text-sm text-gray-500">
                            {{ $project->completion_year ?? 'Year N/A' }} | {{ $project->dimensions ?? 'Dimensions N/A' }}
                        </p>
                    </div>
                </div>
            @empty
                <p class="col-span-3 text-center text-gray-500">No projects found.</p>
            @endforelse
        </div>
                <a href="projects.html"
                    class="px-6 py-3 border-2 border-[#0C47A6] text-[#0C47A6] rounded-full font-semibold hover:bg-[#0C47A6] hover:text-white transition-all duration-300 inline-block mt-8">Show
                    More</a>
            </div>
        </section>
    @endsection
