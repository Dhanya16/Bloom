<head>
    <title>Bloom</title>
    <link rel="icon" type="image/x-icon" href="favicon1.ico">
    <style>
        body{
            background-image: url('images/services_bg.png');
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
        }
    </style>
</head>
<body>
    <x-header/>
    <h1 class="prompt">Share your knowledge!</h1>
    <div class="box">
        <div class="form">
            <form action="services" method="post" enctype="multipart/form-data">
		        @csrf
                <div class="label-div">
                    <label for="username" class="label1">Username</label><br>
                    <label for="email" class="label">Email</label><br>
                </div>
                <div class="form1">
                    <input type="text" id="name" name="name" placeholder="Username" required><br>
		            <input type="email" id="email" name="email" placeholder="Email" required><br>
                </div>
                <div class="label-div">
                    <label for="flower" class="label1">Flower</label><br>
                    <label for="message" class="label">Information</label><br>
                </div>
                <div class="form2">
                    <input type="text" id="flower" name="flower" placeholder="Flower" required><br>
                    <textarea id="message" name="message" rows="5" cols="30" placeholder="Information" required></textarea><br>
                </div>
                <label for="image" class="label">Image</label><br>
                <div class="form3">
                    <input type="file" id="image" name="image" placeholder="Image" required><br>
                </div>
    
		        <button class="button" id="center" type="submit" value="Submit">Submit</button>
	        </form>
        </div>
        <div class="flowers">

        </div>
    </div>
    <h1 class="prompt">Want to order flowers or get millions of their beautiful pictures? Search away!</h1>
    <script async src="https://cse.google.com/cse.js?cx=609fa1ced3172409a"></script>
    <div class="gcse-search"></div>
    <style>
        .prompt{
            font-size: 30px;
            font-family:cursive;
            font-style:bold;
            color:white;
        }
        .box{
            display:flex;
        }
        .form{
            border: 1px solid black;
            padding: 20px;
            border-radius:5px;
            width: 900px;
            height: 500px;
            background-image:url({{url("images/box_bg.png")}});
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3), 0 0 20px rgba(0, 0, 0, 0.2), 0 0 30px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.05), 0 0 50px rgba(0, 0, 0, 0.01);
        }
        .flowers{
            border: 1px solid black;
            padding: 10px;
            width: 510px;
            border-radius:5px;
            height: 520px;
            background-image: url('images/Tulip.png');
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
			transition: background-image 1s ease-in-out;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3), 0 0 20px rgba(0, 0, 0, 0.2), 0 0 30px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.05), 0 0 50px rgba(0, 0, 0, 0.01);
        }
        .form1{
            display:flex;
            text-align:center;
            padding:10px;
            height:60px;
            margin-left:30px;
            margin-bottom:20px;
        }
        .form2{
            display:flex;
            text-align:center;
            padding:10px;
            height:60px;
            margin-left:30px;
            margin-bottom:20px;
        }
        .form3{
            display:flex;
            text-align:center;
            padding:10px;
            height:30px;
            margin-left:30px;
            margin-bottom:20px;
        }
        #name{
            border-radius:5px;
            margin-right:100px;
        }
        #email{
            border-radius:5px;
        }
        #flower{
            border-radius:5px;
            margin-right:100px;
        }
        #image{
            border-radius:5px;
        }
        #message{
            border-radius:5px;
            width:300px;
            height:190px;
        }
        .label-div{
            display:flex;
        }
        .label1{
            font-size: 20px;
            font-family: cursive;
            font-style:bold;
            color:rgb(82, 12, 102);
            margin-right:300px;
            margin-left:40px;
        }
        .label{
            font-size: 20px;
            font-family: cursive;
            font-style:bold;
            color:rgb(82, 12, 102);
            margin-left:40px;
        }
        #center{
            text-align:center;
            margin-top:40px;
            margin-left:200px;
        }
        input[type="text"] {
            width: 300px;
        }
        input[type="email"] {
            width: 300px;
        }
        input[type="file"] {
            background-color: rgb(82, 12, 102);
            color: white;
            cursor: pointer;
            width: 300px;
            height:60px;
            font-size: 20px;
            font-family: cursive;
            font-style:bold;
        }
        input[type="file"]:hover {
            background-color: white;
            color:rgb(82, 12, 102);
        }
        input[type="file"]:active {
            background-color: rgb(82, 12, 102);
            color:white;
        }

    </style>
    <script>
        const images = ['images/Tulip.png', 'images/Tiger lily.png', 'images/Rose.png','images/Orchid.png','images/Himalayan Blue poppy.png','images/Dahlia pinnata.png','images/Cherry blossom.png','images/Calla lilies.png','images/Blue hydrangea.png','images/Bleeding heart.png','images/Birds of paradise.png','images/Abutilon.png','images/Acacia.png','images/Aconite.png','images/African daisy.png','images/Agapanthus.png','images/Allium.png','images/Alstroemeria.png','images/Alyssum.png','images/Amaranthus.png','images/Amaryllis.png','images/Anemone.png','images/Azalea.png','images/Bachelors button.png','images/Balloon.png','images/Bee balm.png','images/Begonia.png','images/Bellflower.png','images/Bergenia.png','images/Plumbago.png','images/Black eyed susan.png','images/Broom.png','images/Buttercup.png','images/Celosia.png']; // array of background images
        let currentImageIndex = 0; // current index of the background image

        function changeBackgroundImage() {
            currentImageIndex++; // increment the index
            if (currentImageIndex >= images.length) {
                currentImageIndex = 0; // reset the index if it exceeds the array length
            }
            const backgroundImage = document.querySelector('.flowers');
            backgroundImage.style.backgroundImage = `url('${images[currentImageIndex]}')`; // set the new background image
        }

        setInterval(changeBackgroundImage, 2000);
    </script>
    <x-footer/>
</body>