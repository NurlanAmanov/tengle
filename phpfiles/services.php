<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenglee - Services</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            color: #333;
            background-color: #f4f7f9;
        }
        .container {
            max-width: 1200px;
        }
        .section-heading {
            font-size: 2.5rem;
            font-weight: 700;
            color: #0F2E4A;
            margin-bottom: 1rem;
        }
        .card {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .icon-box {
            background-color: #E2E8F0;
            padding: 1rem;
            border-radius: 50%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 1.5rem;
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="index.html" class="text-2xl font-bold text-gray-800">Tenglee</a>
            <div class="space-x-8">
                <a href="about.html" class="text-gray-600 hover:text-gray-900">About Us</a>
                <a href="services.html" class="text-gray-600 hover:text-gray-900">Services</a>
                <a href="projects.html" class="text-gray-600 hover:text-gray-900">Projects</a>
                <a href="contact.html" class="text-gray-600 hover:text-gray-900">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Services Section -->
    <section id="services" class="py-16 bg-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="section-heading mb-8">What We Do</h2>
            <p class="text-lg text-gray-700 max-w-3xl mx-auto mb-12">
                We provide a full range of shipbuilding, marine repair, and engineering services. Our expertise includes steel hulls, piping, electrical, and mechanical works, serving a variety of marine and offshore projects globally.
            </p>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="card p-8">
                    <div class="icon-box">
                        <i class="fas fa-ship fa-2x text-blue-600"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Shipbuilding</h3>
                    <p class="text-gray-600">
                        We specialize in the construction of new vessels, utilizing the latest technology, including CNC cutting systems.
                    </p>
                </div>
                <div class="card p-8">
                    <div class="icon-box">
                        <i class="fas fa-tools fa-2x text-blue-600"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Marine Repair</h3>
                    <p class="text-gray-600">
                        Our team of over 300 highly skilled engineers and workers manages repair work on marine and offshore vessels.
                    </p>
                </div>
                <div class="card p-8">
                    <div class="icon-box">
                        <i class="fas fa-cogs fa-2x text-blue-600"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Engineering Services</h3>
                    <p class="text-gray-600">
                        Our expertise spans across steel hulls, piping, electrical, and mechanical works for projects around the world.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Fabrication, Assembly & Erection Section -->
    <section id="process" class="py-16 bg-gray-50">
        <div class="container mx-auto px-6 text-center">
            <h2 class="section-heading mb-12">Our Process: From Start to Finish</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Fabrication Block -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="mb-4">
                        <img src="https://i.ibb.co/xqsRZx6B/6.png" alt="Steel fabrication with CNC technology" class="rounded-lg shadow-sm w-full">
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Fabrication</h3>
                    <p class="text-gray-600">
                        Using our state-of-the-art CNC technology, we meticulously cut and shape steel plates and profiles to the exact specifications of each project, ensuring minimal waste and maximum accuracy.
                    </p>
                </div>

                <!-- Assembly Block -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="mb-4">
                        <img src="https://i.ibb.co/LXPY6cFD/7.png" alt="Ship blocks being assembled" class="rounded-lg shadow-sm w-full">
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Assembly</h3>
                    <p class="text-gray-600">
                        The fabricated components are then expertly assembled into larger, pre-outfitted modules or 'blocks.' This modular approach enhances quality control and accelerates the overall construction timeline.
                    </p>
                </div>

                <!-- Erection Block -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="mb-4">
                        <img src="https://i.ibb.co/5pPc04m/8.png" alt="Vessel hull being erected" class="rounded-lg shadow-sm w-full">
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Erection</h3>
                    <p class="text-gray-600">
                        These assembled blocks are lifted into position and joined together to form the final hull and superstructure of the vessel. Our skilled team ensures seamless integration and structural integrity during this critical phase.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6 mt-16">
        <div class="container mx-auto px-6 text-center text-sm">
            <p>&copy; 2024 Tenglee Marine & Engineering Pte Ltd. All Rights Reserved.</p>
        </div>
    </footer>

</body>
</html>
