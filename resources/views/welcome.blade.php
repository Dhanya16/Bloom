<head>
    <title>Bloom</title>
    <link rel="icon" type="image/x-icon" href="favicon1.ico">
    <style>
        body{
            background-image:url({{url("images/background.png")}});
            overflow:hidden;
        }
    </style>
</head>
<body>
    <x-header/>
    <div class="text-container">
        <span class="letter">B</span>
        <span class="letter">l</span>
        <span class="letter">o</span>
        <span class="letter">o</span>
        <span class="letter">m</span>
    </div>
    <div class="slideshow-container">
        <div class="fade"><p class="inner-box1">Welcome to the world of flowers. </p></div>
        <div class="fade"><p class="inner-box2">Flowers are one of the most beautiful things in the world.</p></div>
        <div class="fade"><p class="inner-box3">There are many rare and unique beautiful flowers in the world.</p></div>
        <div class="fade"><p class="inner-box4">Here, we will see lot such flowers.</p></div>
        <div class="fade"><p class="inner-box5">There is all you need to know about flowers here.</p></div>
    </div>  
    <style>
        .letter {
            display: inline-block;
            opacity: 0; 
            animation: drop 4s ease forwards infinite; 
            font-size: 300px;
            font-family:Brush Script;
            font-style:oblique;
            color:rgb(82, 12, 102);
            padding:30px;
            text-align:center;
            font-weight:bold;
        }

        @keyframes drop {
            0% {
                opacity: 0;
                transform: translateY(-100%);
            }
            100% {
                opacity: 1;
                transform: translateY(0%);
            }
        }

        .slideshow-container {
            position: relative;
            width: 100%;
            height: 400px;
        }

        .fade {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease;
        }

        .fade.active {
            opacity: 1;
        }

        .inner-box1, .inner-box2, .inner-box3, .inner-box4, .inner-box5 {
            position: absolute;
            top: 20%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 1350px;
            height: 80px;
            box-shadow: -44px 120px 80px -72px rgb(82, 12, 102) inset, -44px -120px 80px -72px rgb(82, 12, 102) inset;
            padding: 50px;
            margin: 20px;
            border-radius: 20px;
            border:rgb(82, 12, 102);
            text-align:center;
            font-family:cursive;
            font-style:bold;
            font-size: 40px;
            font-weight:bold;
            color:white;
        }
    </style>
    <script>
        const letters = document.querySelectorAll('.letter');

        letters.forEach((letter, index) => {
            setTimeout(() => {
                letter.style.animationDelay = `${index * 0.2}s`;
                letter.style.opacity = 1;
            }, index * 100);
        });

        var slides = document.querySelectorAll('.fade');
        var currentSlide = 0;
        var slideInterval = setInterval(nextSlide, 3000);

        function nextSlide() {
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].classList.add('active');
        }
    </script>
</body>