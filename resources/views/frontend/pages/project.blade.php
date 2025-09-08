   @extends('frontend.layout.master')

      @section('content')
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