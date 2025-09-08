<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenglee Marine & Engineering - Homepage</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            color: #333;
        }
        .container {
            max-width: 1200px;
        }
        .section-heading {
            font-size: 2.5rem;
            font-weight: 700;
            color: #0C47A6;
        }
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        .btn-primary {
            transition: background-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #0B1D2F;
        }
        .btn-secondary {
            transition: background-color 0.3s, color 0.3s;
        }
        .btn-secondary:hover {
            background-color: #0C47A6;
            color: white;
        }
        .slider-container {
            position: relative;
            overflow: hidden;
            width: 100%;
            height: 500px;
        }
        .slider-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }
        .slider-image.active {
            opacity: 1;
        }
        .slider-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            padding: 1rem;
        }
        .slider-nav-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(255, 255, 255, 0.5);
            color: #333;
            border: none;
            padding: 0.5rem;
            cursor: pointer;
            z-index: 10;
            border-radius: 9999px;
            transition: background-color 0.3s;
        }
        .slider-nav-btn:hover {
            background-color: rgba(255, 255, 255, 0.8);
        }
        #prevBtn {
            left: 20px;
        }
        #nextBtn {
            right: 20px;
        }
    </style>
</head>
<body class="bg-gray-50">

    <!-- Navbar -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
            <a href="index.html" class="flex items-center space-x-2">
                <img src="https://i.ibb.co/gbnMv56S/1.png" alt="Tenglee Marine & Engineering Logo" class="h-10 sm:h-12">
            </a>
            <div class="hidden md:flex space-x-6 lg:space-x-12 font-medium">
                <a href="aboutus.html" class="text-gray-600 hover:text-blue-700 transition-colors">About Us</a>
                <a href="services.html" class="text-gray-600 hover:text-blue-700 transition-colors">Services</a>
                <a href="projects.html" class="text-gray-600 hover:text-blue-700 transition-colors">Projects</a>
                <a href="contact.html" class="text-gray-600 hover:text-blue-700 transition-colors">Contact</a>
            </div>
            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="md:hidden p-2 text-gray-600 hover:text-blue-700 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white shadow-lg px-6 pb-4">
            <a href="aboutus.html" class="block py-2 text-gray-600 hover:text-[#0C47A6] transition duration-300">About Us</a>
            <a href="services.html" class="block py-2 text-gray-600 hover:text-[#0C47A6] transition duration-300">Our Services</a>
            <a href="#why-choose-us" class="block py-2 text-gray-600 hover:text-[#0C47A6] transition duration-300">Why Choose Us?</a>
            <a href="projects.html" class="block py-2 text-gray-600 hover:text-[#0C47A6] transition duration-300">Our Projects</a>
            <a href="contact.html" class="block py-2 text-gray-600 hover:text-[#0C47A6] transition duration-300">Contact</a>
        </div>
    </nav>

    <!-- Header / Hero Slider Section -->
    <header class="relative overflow-hidden w-full">
        <div class="slider-container" id="hero-slider">
            <div class="slider-overlay">
                <h1 class="text-4xl md:text-6xl font-extrabold mb-4 drop-shadow-lg text-center mx-auto max-w-4xl px-4">Your Trusted Partner in Marine & Engineering</h1>
                <p class="text-md md:text-xl max-w-2xl drop-shadow-lg text-center px-4">Tenglee Marine & Engineering Pte Ltd. offers high-quality shipbuilding, repair, and engineering services.</p>
                <a href="contact.html" class="mt-8 px-6 py-3 bg-[#0C47A6] text-white rounded-full font-semibold shadow-xl hover:bg-[#0B1D2F] transition-all duration-300">Contact Us</a>
            </div>
            <button class="slider-nav-btn hidden md:block" id="prevBtn">&#10094;</button>
            <button class="slider-nav-btn hidden md:block" id="nextBtn">&#10095;</button>
        </div>
    </header>

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

    <!-- Footer -->
    <footer class="bg-[#0C47A6] text-white py-16" id="contact">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 border-b border-gray-400 pb-12 mb-8">
                <div class="col-span-1">
                    <div class="flex flex-col items-start mb-4">
                        <a href="index.html" class="hover:opacity-75 transition-opacity duration-300">
                            <img src="https://i.ibb.co/0yHqcvLB/tenglee-logo-2.png" alt="Tenglee Marine & Engineering Logo" class="w-full max-w-[200px]">
                        </a>
                        <p class="text-2xl sm:text-3xl font-bold mt-8">Leading the Way in Marine & Engineering</p>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 col-span-1 lg:col-span-2">
                    <!-- Singapore Office Details -->
                    <div>
                        <h4 class="text-xl font-bold mb-4">SINGAPORE</h4>
                        <address class="not-italic text-gray-400 space-y-2">
                            <p><a href="mailto:ray.teng@tengleemarine.com" class="hover:underline">ray.teng@tengleemarine.com</a></p>
                            <p>+65 9119 0377 / +65 6863 6280</p>
                            <p>50 Tuas View Square,<br>Singapore 637726</p>
                            <a href="https://share.google/kjkLVLJ4deZylHC1l" class="text-white hover:underline mt-4 inline-flex items-center space-x-2 font-semibold" target="_blank">
                                <span>SEE ON MAP</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </a>
                        </address>
                    </div>
                    <!-- Baku Office Details -->
                    <div>
                        <h4 class="text-xl font-bold mb-4">BAKU</h4>
                        <address class="not-italic text-gray-400 space-y-2">
                            <p><a href="mailto:ray.teng@tengleemarine.com" class="hover:underline">ray.teng@tengleemarine.com</a></p>
                            <p>+994 50 278 92 80 / +994 50 278 92 78</p>
                            <p>15/2 Salyan Highway,<br>Baku, Azerbaijan</p>
                            <a href="https://share.google/OghWgVVLtQm3Assbz" class="text-white hover:underline mt-4 inline-flex items-center space-x-2 font-semibold" target="_blank">
                                <span>SEE ON MAP</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </a>
                        </address>
                    </div>
                </div>
            </div>
            <div class="text-center text-gray-400 text-sm">
                <p>&copy; 2025 Tenglee Marine & Engineering Pte Ltd. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- <script>
        document.addEventListener('DOMContentLoaded', () => {
            const slider = document.getElementById('hero-slider');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');

            // Toggle mobile menu
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });

            // Images for the slider
            const images = [
                'https://i.ibb.co/WpBKTy2F/10.jpg',
                'https://i.ibb.co/XrVqz5LR/49.jpg',
                'https://i.ibb.co/rKFrcp08/44.jpg',
                'https://i.ibb.co/N6qcBW8t/52.png'
            ];

            let currentIndex = 0;
            let slideInterval;

            function showSlide(index) {
                if (index >= images.length) {
                    currentIndex = 0;
                } else if (index < 0) {
                    currentIndex = images.length - 1;
                } else {
                    currentIndex = index;
                }

                slider.querySelectorAll('.slider-image').forEach(img => img.remove());

                const newImg = document.createElement('img');
                newImg.src = images[currentIndex];
                newImg.alt = `Slider Image ${currentIndex + 1}`;
                newImg.classList.add('slider-image', 'active');
                slider.insertBefore(newImg, slider.querySelector('.slider-overlay'));
            }

            function nextSlide() {
                showSlide(currentIndex + 1);
            }

            function prevSlide() {
                showSlide(currentIndex - 1);
            }

            nextBtn.addEventListener('click', () => {
                clearInterval(slideInterval);
                nextSlide();
                startAutoSlide();
            });

            prevBtn.addEventListener('click', () => {
                clearInterval(slideInterval);
                prevSlide();
                startAutoSlide();
            });

            function startAutoSlide() {
                slideInterval = setInterval(nextSlide, 5000);
            }

            showSlide(currentIndex);
            startAutoSlide();
        });
    </script> -->
</body>
</html>
