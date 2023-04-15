<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Magang</title>
    <link rel="shortcut icon" href="assets/image/faviconU.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/utama.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">


    <style>
        .container {
            width: 700px;
            margin: 30px 0 0 150px;
            padding: 10px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            /* box-shadow: -1px 0 0 0; */
        }
        #toggle-nav {
            position: absolute;
            top: 50px;
            right: 50px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: rgb(255, 255, 255);
            cursor: pointer;
            background-image: url('assets/image/faviconU.png');
            background-size: cover;
        }
        /* navigasi */
        .nav {
            position: fixed;
            right: -100px;
            list-style: none;
            width :60px;
            transition: opacity 0.3s ease, transform 0.3s ease;
        }
            

            .nav li {
                display: block;
            }

            .nav li a {
                display: block;
                padding: 20px 20px;
                color : #9a9a9a ;
                text-decoration: none;
                transition: background-color 0.3s ease-in-out;
            }

            .nav li a:hover {
                color: #333;
                border-radius :20px;
            }
            .nav-item a:before {
                content: attr(data-title);
                position: absolute;
                left: 0;
                top: 50%;
                transform: translateY(-50%);
                background-color: #333;
                color: #fff;
                padding: 5px;
                border-radius: 5px;
                opacity: 0;
                transition: opacity 0.3s ease-in-out, left 0.3s ease-in-out;
            }
            .nav-item a:hover:before {
                opacity: 1;
                left: -120%;
            }
            .nav.show {
                display: block;
                position: fixed;
                right: 0;
                list-style: none;
                width :60px;
                padding: 0;
                margin: 0;
                background-color: #f1f1f1;
                border-radius: 20px;
                display: block;
                transform: translateX(10px);
                transition: opacity 0.3s ease, transform 0.3s ease;
            }

        .nav.show .nav-item {
            margin-bottom: 10px;
        }
        .bgg {
            background-image: linear-gradient(to top, rgba(0, 0, 0, 0.95), rgba(0, 0, 0, 0.848), rgba(0, 0, 0, 0)),url('assets/image/bg.jpg');
            background-size: cover;
            margin: -10px;
            background-attachment: fixed;
            background-position: center;
            height: 67vh;
            width: auto;
        }
        body {
            background-image: linear-gradient(to top, rgba(0, 0, 0, 0.95), rgba(0, 0, 0, 0.848), rgba(0, 0, 0, 0));
        }
    </style>
</head>
<body>
    <div class="bgg">
        <div class="nab">
            <nav class="navbar">
                <div class="logo">
                    <a href="#"><img src="assets/image/logoSP.png" alt="Logo"></a>
                </div>
            </nav>
        </div>
        <div class="container">
            <div class="togle">
                <button id="toggle-nav"></button>
                <ul class="nav">
                    <li class="nav-item"><a href="hUtama.php" data-title="Home"><i class="fas fa-home"></i></a></li>
                    <li class="nav-item"><a href="#about" data-title="About"><i class="fas fa-user"></i></a></li>
                    <li class="nav-item"><a href="contac.php" data-title="Contac"><i class="fas fa-envelope"></i></a></li>
                    <li class="nav-item"><a href="login.php" data-title="Login"><i class="fas fa-sign-in-alt"></i></a></li>
                </ul>
            </div>
                
            <div class="content">
                <h1>Welcome To My Website</h1>
                <p>I'm a <span id="texBerganti"></span></p>
                <div class="daftar">
                    <ul>
                        <li id="daftar"><a href="halamanuser.php">daftar</a></li>
                        <li><a href="info.php">info magang</a></li>
                        <li><a href="lebihlanjut.php">lebih lanjut</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
      


    <!-- info -->
    <div class="info">
        <div class="row">
          <div class="col-4">
            <h3>Hubungi Kami</h3>
            <p>Telpon: 08xxxxxxx<br>WhatsApp: 08xxxxxxx<br>24 Jam Nonstop</p>
          </div>
          <div class="col-4 text-center">
            <h3>Layanan</h3>
            <p>Pendaftaran Magang<br>PT Semen Padang 2023</p>
          </div>
          <div class="col-4 text-right">
            <h3>Kenapa Memilih Magang di PT Semen Padang?</h3>
            <p>Program Magang Bersertifikat</p>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-right">
            <h3>Ikuti Kami</h3>
            <a href="#"><i class="fab fa-facebook fa-lg"></i></a>
            <a href="#"><i class="fab fa-twitter fa-lg"></i></a>
            <a href="#"><i class="fab fa-instagram fa-lg"></i></a>
          </div>
        </div>
      </div>
      
    
      
      
      
      

    
    <div class="footer">
        <footer>
            <p>©2023 | Design By: Sistem Informasi</p>
        </footer>          
    </div>


    <script>
        const toggleNav = document.getElementById('toggle-nav');
        const navList = document.querySelector('.nav');
        let isDragging = false;
        let dragOffset = { x: 0, y: 0 };
        toggleNav.addEventListener('mousedown', (event) => {
        isDragging = true;
        dragOffset = { x: event.offsetX, y: event.offsetY };
        });

        toggleNav.addEventListener('click', () => {
          navList.classList.toggle('show');
        });
        document.addEventListener('mousemove', (event) => {
        if (isDragging) {
            toggleNav.style.left = `${event.pageX - dragOffset.x}px`;
            toggleNav.style.top = `${event.pageY - dragOffset.y}px`;
            }
        });

        document.addEventListener('mouseup', () => {
            isDragging = false;
        });

        const textRotate = document.querySelector("#texBerganti");
        const textArray = ["Developer","UI/UX Designer","Mahasiswa",];
        let index = 0;

        function changeText() {
            textRotate.textContent = textArray[index];
            index = (index + 1) % textArray.length;
        }

        setInterval(changeText, 2000);


        document.addEventListener("mousemove", function(e) {
			var cursor = document.querySelector('.cursor');
			cursor.style.left = e.pageX + 'px';
			cursor.style.top = e.pageY + 'px';
		})
        const navLinks = document.querySelectorAll('#daftar');

        navLinks.forEach(link => {
        link.addEventListener('click', event => {
            if (!isLoggedIn()) { 
            event.preventDefault();
            const confirmed = confirm('Anda harus login terlebih dahulu untuk mengakses halaman ini. Apakah Anda ingin menuju halaman login sekarang?');
            if (confirmed) {
        window.location.href = 'login.php';
            }
        }
        });
        });

        function isLoggedIn() {
  
        }

      </script>
      
</body>
</html>