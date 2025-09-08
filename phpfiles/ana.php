<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenglee Marine & Engineering - Homepage</title>
    <script src="https://cdn.tailwindcss.com"></script>
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



    <!-- Header / Hero Slider Section -->


    <!-- Footer -->
  

    <script>
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
    </script>
</body>
</html>
