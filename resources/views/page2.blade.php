<head>
    <title>Bloom</title>
    <link rel="icon" type="image/x-icon" href="favicon1.ico">
</head>
<body >
    <x-header/>
    <div class="grid-container">
        <a href=".">
            <img src="images/Carnation.png" alt="Carnation"  onclick ="showInfo('info28',this.src)"/>
        </a>
        <a href=".">
            <img src="images/Celosia.png" alt="Celosia"/>
        </a>
        <a href=".">
            <img src="images/Cherry blossom.png" alt="Cherry blossom"  onclick ="showInfo('info28',this.src)"/>
        </a>
        <a href=".">
            <img src="images/Colchicum lusitanum.png" alt="Colchium lusitanum"/>
        </a>
        <a href=".">
            <img src="images/Common daisy.png" alt="Common daisy"/>
        </a>
        <a href=".">
            <img src="images/Dahlia.png" alt="Dahlia"/>
        </a>
        <a href=".">
            <img src="images/Dahlia pinnata.png" alt="Dahlia pinnata"/>
        </a>
        <a href=".">
            <img src="images/Daisy.png" alt="Daisy"/>
        </a>
        <a href=".">
            <img src="images/Dense peonies.png" alt="Dense peonies"/>
        </a>
        <a href=".">
            <img src="images/Dracula gigas.png" alt="Dracula gigas"/>
        </a>
        <a href=".">
            <img src="images/Egyptian lotus.png" alt="Egyptian lotus"/>
        </a>
        <a href=".">
            <img src="images/French hydrangea.png" alt="French hydrangea"/>
        </a>
        <a href=".">
            <img src="images/Fuchsia.png" alt="Fuchsia"/>
        </a>
        <a href=".">
            <img src="images/Gazania tiger strips.png" alt="Gazania tiger strips"/>
        </a>
        <a href=".">
            <img src="images/Geranium purple.png" alt="Geranium purple"/>
        </a>
        <a href=".">
            <img src="images/Gladiolas.png" alt="Gladiolas"/>
        </a>
        <a href=".">
            <img src="images/Hibiscus.png" alt="Hibiscus"/>
        </a>
        <a href=".">
            <img src="images/Himalayan blue poppy.png" alt="Himalayan blue poppy"/>
        </a>
        <a href=".">
            <img src="images/Hollyhock.png" alt="Hollyhock"/>
        </a>
        <a href=".">
            <img src="images/Hyacinth.png" alt="Hyacinth"/>
        </a>
        <a href=".">
            <img src="images/Hydrangea.png" alt="Hydrangea"/>
        </a>
        <a href=".">
            <img src="images/Impatiens bequaertii.png" alt="Impatiens bequaertii"/>
        </a>
        <a href=".">
            <img src="images/Iris.png" alt="Iris"/>
        </a>
        <a href=".">
            <img src="images/Japanese camellia.png" alt="Japanese camellia"/>
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