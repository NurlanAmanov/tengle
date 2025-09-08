    @extends('frontend.layout.master')

@section('content')
    {{-- Slider --}}
<section class="relative w-full">
  <div id="heroSwiper" class="swiper h-[70vh] md:h-[85vh]">
    <div class="swiper-wrapper">
      {{-- Slaydlar JS ilə əlavə olunacaq --}}
    </div>

    <!-- Navigation buttons -->
    <div class="hero-swiper-prev absolute left-4 top-1/2 -translate-y-1/2 z-20 
                hidden md:flex w-10 h-10 rounded-full bg-white/80 hover:bg-white 
                shadow items-center justify-center text-gray-900 cursor-pointer">
      &lsaquo;
    </div>
    <div class="hero-swiper-next absolute right-4 top-1/2 -translate-y-1/2 z-20 
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
                <div>
                    <h2 class="section-heading mb-6">About Us</h2>
                    <p class="text-lg text-gray-700 mb-6">
                        Tenglee Marine & Engineering Pte Ltd. was established with a vision by Mr. Teng Soon Kiat and his four brothers to enter the marine industry and create a trusted brand name in quality shipbuilding.
                    </p>
                    <p class="text-lg text-gray-700 mb-6">
                        Navigating the ups and downs of the marine industry, Tenglee has gained valuable experience and has evolved into a reputable brand name in the shipbuilding field. The company prides itself on delivering projects on time and with the highest quality.
                    </p>
                    <a href="aboutus.html" class="px-6 py-3 border-2 border-[#0C47A6] text-[#0C47A6] rounded-full font-semibold hover:bg-[#0C47A6] hover:text-white transition-all duration-300 inline-block">Learn More</a>
                </div>
                <!-- Updated Image Block with new logo and removed background -->
                <div class="rounded-xl overflow-hidden shadow-lg">
                    <img src="https://i.ibb.co/35jVYTZR/tenglee-logo.jpg" alt="Tenglee logo" class="w-full h-auto object-cover transform hover:scale-105 transition-all duration-300">
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section id="why-choose-us" class="py-16 bg-gray-100">
        <div class="container mx-auto px-6 text-center">
            <h2 class="section-heading mb-8">Why Choose Us?</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="card bg-white p-8 rounded-xl shadow-md">
                    <h3 class="text-2xl font-bold mb-2 text-gray-800">Quality and Reliability</h3>
                    <p class="text-gray-600">
                        We are committed to the highest quality standards in every project, which helps us earn our clients' trust.
                    </p>
                </div>
                <div class="card bg-white p-8 rounded-xl shadow-md">
                    <h3 class="text-2xl font-bold mb-2 text-gray-800">Experienced Team</h3>
                    <p class="text-gray-600">
                        Our professional team of over 300 engineers and workers ensures projects are completed on time and without issues.
                    </p>
                </div>
                <div class="card bg-white p-8 rounded-xl shadow-md">
                    <h3 class="text-2xl font-bold mb-2 text-gray-800">Global Expertise</h3>
                    <p class="text-gray-600">
                        Our engineering knowledge allows us to serve projects all over the world.
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
                <div class="card p-8 rounded-xl shadow-md">
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Shipbuilding</h3>
                    <img src="https://i.ibb.co/Z6xpCnqh/Whats-App-Image-2025-06-11-at-17-12-54-1a576690.jpg" alt="Gəmi tikintisi" class="w-full h-64 object-cover rounded-xl shadow-lg mb-6">
                    <p class="text-gray-600">
                        We specialize in the construction of new ships, including the most modern CNC cutting systems.
                    </p>
                </div>
                <div class="card p-8 rounded-xl shadow-md">
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Marine Repair</h3>
                    <img src="https://i.ibb.co/m5RRYgz3/ship.jpg" alt="Gəmi təmiri" class="w-full h-64 object-cover rounded-xl shadow-lg mb-6">
                    <p class="text-gray-600">
                        Our team of over 300 highly qualified engineers and workers handles the repair of marine and offshore vessels.
                    </p>
                </div>
                <div class="card p-8 rounded-xl shadow-md">
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Engineering Service</h3>
                    <img src="https://i.ibb.co/fd7bgYpD/Whats-App-Image-2025-03-15-at-09-17-33-ede2d422.jpg" alt="Mühəndislik xidmətləri" class="w-full h-64 object-cover rounded-xl shadow-lg mb-6">
                    <p class="text-gray-600">
                        Our engineering knowledge encompasses steel hulls, piping, electrical, and mechanical work all over the world.
                    </p>
                </div>
            </div>
            <a href="services.html" class="px-6 py-3 border-2 border-[#0C47A6] text-[#0C47A6] rounded-full font-semibold hover:bg-[#0C47A6] hover:text-white transition-all duration-300 inline-block mt-8">Learn More</a>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-16 bg-gray-100">
        <div class="container mx-auto px-6">
            <h2 class="section-heading text-center mb-2">Our Key Projects</h2>
            <p class="text-lg text-gray-500 text-center mb-12">Explore our portfolio of significant achievements and groundbreaking projects in the fields of marine engineering and offshore construction.</p>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            
                <!-- NEW PROJECT: Anchor Handling Vessel -->
                <div class="card overflow-hidden bg-white rounded-xl shadow-md">
                    <img src="https://i.ibb.co/yc9q17wt/image.png" alt="Maersk Shipper Image" border="0" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">ANCHOR HANDLING VESSEL</h3>
                        <div class="text-gray-600 text-sm space-y-1">
                            <div><span class="font-semibold">Vessel Name:</span> MAERSK SHIPPER</div>
                            <div><span class="font-semibold">Company:</span> MAERSK SUPPLY SERVICES - COPENHAGEN, DENMARK</div>
                            <div><span class="font-semibold">Date of Completion:</span> 1999</div>
                            <div><span class="font-semibold">Dimensions:</span> 82.00M Length | 19.00M Beam</div>
                        </div>
                    </div>
                </div>

                <!-- NEW PROJECT: Icebreaker -->
                <div class="card overflow-hidden bg-white rounded-xl shadow-md">
                    <img src="https://i.ibb.co/0pKB1TNr/image.png" alt="Varandey Icebreaker Image" border="0" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">ICEBREAKER</h3>
                        <div class="text-gray-600 text-sm space-y-1">
                            <div><span class="font-semibold">Vessel Name:</span> VARANDEY TERMINAL MULTIPURPOSE ICEBREAKER</div>
                            <div><span class="font-semibold">Company:</span> LUKOIL - TRANS CO LTD</div>
                            <div><span class="font-semibold">Date of Completion:</span> 2006</div>
                            <div><span class="font-semibold">Dimensions:</span> 100.00M Length | 21.70M Beam | 11.00M Depth</div>
                        </div>
                    </div>
                </div>

                <!-- NEW PROJECT: 28000 Tonnes DWT FSO Unit -->
                <div class="card overflow-hidden bg-white rounded-xl shadow-md">
                    <img src="https://i.ibb.co/9HKRZXKB/image.png" alt="Yuri Korchagin FSO Image" border="0" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">28000 TONNES DWT FSO UNIT</h3>
                        <div class="text-gray-600 text-sm space-y-1">
                            <div><span class="font-semibold">Vessel Name:</span> YURI KORCHAGIN FIELD, CASPIAN SEA, RUSSIA</div>
                            <div><span class="font-semibold">Company:</span> LUKOIL - NIZHNEVOLZHSKNEFT</div>
                            <div><span class="font-semibold">Date of Completion:</span> 2007</div>
                            <div><span class="font-semibold">Dimensions:</span> 132.80M Length | 32.00M Beam | 15.70M Depth</div>
                        </div>
                    </div>
                </div>
            
                <!-- Project: GLOBAL 1201 DEEPWATER DERRICK PIPELAY VESSEL -->
                <div class="card overflow-hidden bg-white rounded-xl shadow-md">
                    <img src="https://i.ibb.co/qYJbVr5t/35.jpg" alt="35" border="0" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">GLOBAL 1201 DEEPWATER DERRICK PIPELAY VESSEL</h3>
                        <div class="text-gray-600 text-sm space-y-1">
                            <div><span class="font-semibold">Vessel Name:</span> GLOBAL 1201</div>
                            <div><span class="font-semibold">Owner:</span> Global Offshore & Marine Pte Ltd</div>
                            <div><span class="font-semibold">Date of Completion:</span> 2010</div>
                            <div><span class="font-semibold">Dimensions:</span> 162.30m Length | 37.80m Beam | 16.10m Depth</div>
                        </div>
                    </div>
                </div>

                <!-- Project: "28 MAY" - FLOATING DOCK -->
                <div class="card overflow-hidden bg-white rounded-xl shadow-md">
                    <img src="https://i.ibb.co/84tjkYD1/image.png" alt="image" border="0" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">"28 MAY" - FLOATING DOCK</h3>
                        <div class="text-gray-600 text-sm space-y-1">
                            <div><span class="font-semibold">Owner:</span> SOCAR</div>
                            <div><span class="font-semibold">Vessel Name:</span> 28 MAY</div>
                            <div><span class="font-semibold">Date of Completion:</span> 2012</div>
                            <div><span class="font-semibold">Dimensions:</span> 168.30m Length | 50.00m Breadth</div>
                        </div>
                    </div>
                </div>

                <!-- Project: ROCK - DUMPING FALL PIPE VESSEL -->
                <div class="card overflow-hidden bg-white rounded-xl shadow-md">
                    <img src="https://i.ibb.co/rfxNBv0q/image.png" alt="image" border="0" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">ROCK - DUMPING FALL PIPE VESSEL</h3>
                        <div class="text-gray-600 text-sm space-y-1">
                            <div><span class="font-semibold">Vessel Name:</span> ROCKPIPER</div>
                            <div><span class="font-semibold">Owner:</span> Royal Boskalis</div>
                            <div><span class="font-semibold">Date of Completion:</span> 2012</div>
                            <div><span class="font-semibold">Dimensions:</span> 159.80m Length | 36.00m Beam | 13.50m Depth</div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="projects.html" class="px-6 py-3 border-2 border-[#0C47A6] text-[#0C47A6] rounded-full font-semibold hover:bg-[#0C47A6] hover:text-white transition-all duration-300 inline-block mt-8">Show More</a>
        </div>
    </section>
    @endsection
