<head>
    <title>Bloom</title>
    <link rel="icon" type="image/x-icon" href="favicon1.ico">
</head>
<body>
    <x-header/>
    <div class="grid-container">
        <img src="images/Birds of paradise.png" alt="Birds of paradise"/>
        <img src="images/Bleeding heart.png" class="grid" alt="Bleeding heart"/>
        <img src="images/Blue hydrangea.png" alt="Blue hydrangea"/>
        <img src="images/Calla lilies.png" alt="Calla lilies"/>
        <img src="images/Cherry blossom.png" alt="Cherry blossom"/>
        <img src="images/Dahlia pinnata.png" alt="Dahlia pinnata"/>        
    </div>
    <style>
        .grid-container{
            margin-top:20px;
            margin-bottom:20px;
            margin-left:10px;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 20px;
        }
        img{
            width:350px;
            height:280px;
            transition: transform 0.3s ease;
        }
        img:hover{
            transform: scale(1.1);
            z-index: 1;
            border-radius:5px;
        }
        img:hover::after {
        content: "This is some tooltip text!";
        display: block;
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translateX(-50%);
        background-color: black;
        color: white;
        padding: 10px;
        border-radius: 5px;
        z-index: 1;
      }
    </style>
    <x-footer/>
</body>