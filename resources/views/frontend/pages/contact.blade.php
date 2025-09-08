   @extends('frontend.layout.master')

      @section('content')
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-center text-3xl sm:text-4xl font-extrabold text-[#0C47A6] mb-12">Our Offices</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">
                <!-- Singapore Office Card -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:scale-105 transition-transform duration-300">
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Singapore</h3>
                    <address class="not-italic text-gray-600 leading-relaxed space-y-2">
                        <p><strong>Email:</strong> <a href="mailto:ray.teng@tengleemarine.com" class="text-blue-600 hover:underline">ray.teng@tengleemarine.com</a></p>
                        <p><strong>Phone:</strong> +65 9119 0377 / +65 6863 6280</p>
                        <p><strong>Address:</strong> 50 Tuas View Square, Singapore 637726</p>
                        <a href="https://share.google/kjkLVLJ4deZylHC1l" class="inline-flex items-center space-x-2 text-blue-600 hover:underline font-semibold" target="_blank">
                            <span>SEE ON MAP</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </address>
                </div>
                <!-- Azerbaijan Office Card -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:scale-105 transition-transform duration-300">
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Azerbaijan</h3>
                    <address class="not-italic text-gray-600 leading-relaxed space-y-2">
                        <p><strong>Email:</strong> <a href="mailto:ray.teng@tengleemarine.com" class="text-blue-600 hover:underline">ray.teng@tengleemarine.com</a></p>
                        <p><strong>Phone:</strong> +994 50 278 92 80 / +994 50 278 92 78</p>
                        <p><strong>Address:</strong> 15/2 Salyan Highway, Baku, Azerbaijan</p>
                        <a href="https://share.google/OghWgVVLtQm3Assbz" class="inline-flex items-center space-x-2 text-blue-600 hover:underline font-semibold" target="_blank">
                            <span>SEE ON MAP</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </address>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-center text-3xl sm:text-4xl font-extrabold text-[#0C47A6] mb-12">Send Us a Message</h2>
            <form id="contactForm" class="mx-auto max-w-2xl bg-gray-100 p-8 rounded-xl shadow-lg">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="mb-4 md:mb-0">
                        <label for="name" class="block text-gray-700 font-bold mb-2">Your Name</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Enter your name" required>
                    </div>
                    <div class="mb-4 md:mb-0">
                        <label for="email" class="block text-gray-700 font-bold mb-2">Your Email Address</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Enter your email address" required>
                    </div>
                </div>
                <div class="mt-6">
                    <label for="subject" class="block text-gray-700 font-bold mb-2">Subject</label>
                    <input type="text" id="subject" name="subject" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Enter the subject" required>
                </div>
                <div class="mt-6">
                    <label for="message" class="block text-gray-700 font-bold mb-2">Your Message</label>
                    <textarea id="message" name="message" rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Write your message" required></textarea>
                </div>
                <div class="text-center mt-8">
                    <button type="submit" class="bg-[#0C47A6] text-white py-3 px-8 rounded-full font-semibold hover:bg-blue-800 transition-colors">
                        Submit Message
                    </button>
                </div>
                <div id="statusMessage" class="mt-6 text-center text-green-600 font-bold hidden">
                    Thank you! Your message has been sent successfully.
                </div>
            </form>
        </div>
    </section>
      @endsection