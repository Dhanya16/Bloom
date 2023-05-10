<head>
    <title>Bloom</title>
    <link rel="icon" type="image/x-icon" href="favicon1.ico">
</head>
<body >
    <x-header/>
    <div class="grid-container">
        <a href=".">
            <img src="images/Common daisy.png" alt="Common daisy"/>
        </a>
        <a href=".">
            <img src="images/Daisy.png" alt="Daisy"/>
        </a>
        <a href=".">
            <img src="images/Dense peonies.png" alt="Dense peonies"/>
        </a>
        <a href=".">
            <img src="images/Dahlia.png" alt="Dahlia"/>
        </a>
        <a href=".">
            <img src="images/Dahlia pinnata.png" alt="Dahlia pinnata"/>
        </a>
        <a href=".">
            <img src="images/French hydrangea.png" alt="French hydrangea"/>
        </a>
        <a href=".">
            <img src="images/Gladiolas.png" alt="Gladiolas"/>
        </a>
        <a href=".">
            <img src="images/Himalayan blue poppy.png" alt="Himalayan blue poppy"/>
        </a>
        <a href=".">
            <img src="images/Iris.png" alt="Iris"/>
        </a>
        <a href=".">
            <img src="images/Japanese camellia.png" alt="Japanese camellia"/>
        </a>
        <a href=".">
            <img src="images/Azalea.png" alt="Azalea"/>
        </a>
        <a href=".">
            <img src="images/Bachelors button.png" alt="Bachelors button"/>
        </a>
        <a href=".">
            <img src="images/Balloon.png" alt="Balloon"/>
        </a>
        <a href=".">
            <img src="images/Bee balm.png" alt="Bee balm"/>
        </a>
        <a href=".">
            <img src="images/Begonia.png" alt="Begonia"/>
        </a>
        <a href=".">
            <img src="images/Bellflower.png" alt="Bellflower"/>
        </a>
        <a href=".">
            <img src="images/Bergenia.png" alt="Bergenia"/>
        </a>
        <a href=".">
            <img src="images/Birds of paradise.png" alt="Birds of paradise"/>
        </a>
        <a href=".">
            <img src="images/Black eyed susan.png" alt="Black eyed susan"/>
        </a>
        <a href=".">
            <img src="images/Bleeding heart.png" alt="Bleeding heart"/>
        </a>
        <a href=".">
            <img src="images/Blue hydrangea.png" alt="Blue hydrangea"/>
        </a>
        <a href=".">
            <img src="images/Broom.png" alt="Broom"/>
        </a>
        <a href=".">
            <img src="images/Buttercup.png" alt="Buttercup"/>
        </a>
        <a href=".">
            <img src="images/Calla lilies.png" alt="Calla lilies"/>
        </a>
         <a href=".">
            <img src="images/Celosia.png" alt="Celosia"/>
        </a>
        <a href=".">
            <img src="images/Cherry blossom.png" alt="Cherry blossom"/>
        </a>
        <a href=".">
            <img src="images/Dahlia.png" alt="Dahlia"/>
        </a>
        <a href=".">
            <img src="images/Dahlia pinnata.png" alt="Dahlia pinnata"/>
        </a>
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
        img{
            width:350px;
            height:280px;
            transition: transform 0.5s ease-in-out opacity 0.5s ease-in-out;
        }
        img:hover{
            transform: scale(1.1);
            border-radius:5px;
            opacity:0.5;
        }
    </style>
    <x-footer/>
</body>