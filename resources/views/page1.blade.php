<head>
    <title>Bloom</title>
    <link rel="icon" type="image/x-icon" href="favicon1.ico">
</head>
<body >
    <x-header/>
    <div class="grid-container">
        <a href=".">
            <img src="images/Abutilon.png" alt="Abutilon"/>
        </a>
        <a href=".">
            <img src="images/Acacia.png" alt="Acacia"/>
        </a>
        <a href=".">
            <img src="images/Aconite.png" alt="Aconite"/>
        </a>
        <a href=".">
            <img src="images/African daisy.png" alt="African daisy"/>
        </a>
        <a href=".">
            <img src="images/Agapanthus.png" alt="Agapanthus"/>
        </a>
        <a href=".">
            <img src="images/Allium.png" alt="Allium"/>
        </a>
        <a href=".">
            <img src="images/Alstroemeria.png" alt="Alstroemeria"/>
        </a>
        <a href=".">
            <img src="images/Alyssum.png" alt="Alyssum"/>
        </a>
        <a href=".">
            <img src="images/Amaranthus.png" alt="Amaranthus"/>
        </a>
        <a href=".">
            <img src="images/Amaryllis.png" alt="Amaryllis"/>
        </a>
        <a href=".">
            <img src="images/Anemone.png" alt="Anemone"/>
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