<header id="myHeader">
    <div class="header">
        <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
        <a href="."><img src="favicon.ico" alt="logo" class="image"/></a>
        <a href="."><h1 class="header-title">Bloom</h1></a>
        <nav>
            <ul class="list">
                <li><button id="Button1" class="button">Home</button></li>
                <li>
                    <button class="drpbutton">Pages</button>
                    <div class="dropdown-content">
                        <button id="Button2a" class="button">Page 1 (A-E)</button>
                        <button id="Button2b" class="button">Page 2 (F-J)</button>
                        <button id="Button2c" class="button">Page 3 (K-O)</button>
                        <button id="Button2d" class="button">Page 4 (P-T)</button>
                        <button id="Button2e" class="button">Page 5 (U-Z)</button>
                    </div>
                </li>
                <li><button id="Button5" class="button">Services</button></li>
                <li><button id="Button3" class="button">About us</button></li>
                <li><button id="Button4" class="button">Contact us</button></li>
            </ul>
        </nav>
        <style>
            .header{
                background-color:rgb(82, 12, 102);
                height: 75px;
            }
            .header-title{
                color:rgb(254, 254, 254);
                margin-left: 10%;
                float: left;
                font-family:cursive;
                font-style:oblique;
            }
            .image{
                border:2px solid white;
                position: absolute;
                left:50px;
                height: 70px;
                width: 75px;
                border-radius: 50%;
                margin-top:1px;
            }
            .list{
                color:rgb(254, 254, 254);
                display: flex;
                padding:10px;
                position: absolute;
                right: 0;
                list-style: none;
            }
            .list li {
                color:rgb(254, 254, 254);
                margin-right: 20px;
                font-size: 20px;
                text-decoration: none;
            }
            .button{
                background-color: rgb(82, 12, 102);
                color: #fff;
                font-size: 1.6rem;
                font-weight: bold;
                border: none;
                padding: 1px 20px;
                border-radius: 5px;
                cursor: pointer;
                font-family:cursive;
                font-style:oblique;
                transition: background-color 0.2s ease-in-out;
            }
            .button:hover {
                background-color: #fff;
                color:rgb(82, 12, 102);
            }
            .button:active {
                background-color: rgb(82, 12, 102);
                color:#fff;
            }
            .drpbutton{
                background-color: rgb(82, 12, 102);
                color: #fff;
                font-size: 1.6rem;
                font-weight: bold;
                border: none;
                padding: 1px 20px;
                border-radius: 5px;
                cursor: pointer;
                font-family:cursive;
                font-style:oblique;
            }
            .drpbutton:hover {
                background-color: #fff;
                color:rgb(82, 12, 102);
            }
            .drpbutton:active {
                background-color: rgb(82, 12, 102);
                color:#fff;
            }
            .dropdown-content {
                display: none;
                position: absolute;
                z-index: 1;
            }
            .show {
                display: flex;
                flex-direction: column;
            }
            .sticky {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            }
            img{
                transition: transform 0.3s ease;
            }
            img:hover{
                transform: scale(1.1);
                z-index: 1;
                border-radius:5px;
            }
        </style>
        <script>
            const myButton1 = document.getElementById("Button1");
            myButton1.addEventListener("click", function() {
                window.location = ".";
            });
            const myButton2a = document.getElementById("Button2a");
            myButton2a.addEventListener("click", function() {
                window.location = "page1";
            });
            const myButton2b = document.getElementById("Button2b");
            myButton2b.addEventListener("click", function() {
                window.location = "page2";
            });
            const myButton2c = document.getElementById("Button2c");
            myButton2c.addEventListener("click", function() {
                window.location = "page3";
            });
            const myButton2d = document.getElementById("Button2d");
            myButton2d.addEventListener("click", function() {
                window.location = "page4";
            });
            const myButton2e = document.getElementById("Button2e");
            myButton2e.addEventListener("click", function() {
                window.location = "page5";
            });
            const myButton3 = document.getElementById("Button3");
            myButton3.addEventListener("click", function() {
                window.location = "about";
            });
            const myButton4 = document.getElementById("Button4");
            myButton4.addEventListener("click", function() {
                window.location = "contact";
            });
            const myButton5 = document.getElementById("Button5");
            myButton5.addEventListener("click", function() {
                window.location = "services";
            });

            var dropdownBtn = document.querySelector('.drpbutton');
            var dropdownContent = document.querySelector('.dropdown-content');

            dropdownBtn.addEventListener('click', function() {
                dropdownContent.classList.toggle('show');
            });

            window.addEventListener('click', function(event) {
                if (!event.target.matches('.drpbutton')) {
                    dropdownContent.classList.remove('show');
                }
            });

            var header = document.getElementById("myHeader");
            var sticky = header.offsetTop;

            window.onscroll = function() {
                if (window.pageYOffset > sticky) {
                    header.classList.add("sticky");
                } else {
                    header.classList.remove("sticky");
                }
            }
        </script>
    </div>
</header>