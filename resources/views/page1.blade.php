<head>
    <title>Bloom</title>
    <link rel="icon" type="image/x-icon" href="favicon1.ico">
</head>
<body class="no-sticky-header">
    <x-header/>
    <div class="grid-container">
        <div class="grid-item">
            <a href=".">
                <img src="images/Birds of paradise.png" alt="Birds of paradise"/>
                <div class="overlay">
                    <p class="text">Birds of paradise</p>
                </div>
            </a>
        </div>
        <div class="grid-item">
            <a href=".">
                <img src="images/Bleeding heart.png" alt="Bleeding heart"/>
                <div class="overlay">
                    <p class="text">Bleeding heart</p>
                </div>
            </a>
        </div>
        <div class="grid-item">
            <a href=".">
                <img src="images/Blue hydrangea.png" alt="Blue hydrangea"/>
                <div class="overlay">
                    <p class="text">Blue hydrangea</p>
                </div>
            </a>
        </div>
        <div class="grid-item">
            <a href=".">
                <img src="images/Calla lilies.png" alt="Calla lilies"/>
                <div class="overlay">
                    <p class="text">Calla lilies</p>
                </div>
            </a>
        </div>
        <div class="grid-item">
            <a href=".">
                <img src="images/Cherry blossom.png" alt="Cherry blossom"/>
                <div class="overlay">
                    <p class="text">Cherry blossom</p>
                </div>
            </a>
        </div>
        <div class="grid-item">
            <a href=".">
                <img src="images/Dahlia pinnata.png" alt="Dahlia pinnata"/>
                <div class="overlay">
                    <p class="text">Dahlia pinnata</p>
                </div>
            </a>
        </div>
    </div>
    <style>
        .grid-container{
            margin-top:20px;
            margin-bottom:20px;
            margin-left:10px;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 20px;
            z-index: 1;
        }
        .grid-item{
            position:relative;
            text-align:center;
        }
        img{
            width:350px;
            height:280px;
            transition: transform 0.5s ease-in-out opacity 0.5s ease-in-out;
        }
        img:hover{
            transform: scale(1.1);
            z-index: 1;
            border-radius:5px;
            opacity:0.5;
        }
        img:hover+ .overlay{
            opacity:1;
        }
        .overlay {
            position:absolute;
            background-color: rgba(0, 0, 0, 0.5);
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        .text {
            position:absolute;
            transform: translate(-50%, -50%);
            color: rgb(82, 12, 102);
            font-family:cursive;
            font-style:bold;
            font-weight:bold;
            font-size: 50px;
            top:50%;
            left:50%;
            margin-top: -150px;
            margin-left: 170px;
        }
        .no-sticky-header x-header {
    display: none;
}
    </style>
    <x-footer/>
</body>