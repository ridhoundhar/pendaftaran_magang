<!DOCTYPE html>
<html>

<head>
    <title>Daftar Pendaftar</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="assets/image/faviconU.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="utama.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        body {
            height: 100vh;
            width: 100%;
            background-size: cover;
            background-position: center;
        }

        .container {
            width: 700px;
            margin: 100px 0 0 300px;
            padding: 10px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            box-shadow: -1px 0 0 0;
            color: #000000;
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
            background-image: url('../assets/image/faviconU.png');
            background-size: cover;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
        }

        /* navigasi */
        .nav {
            position: fixed;
            right: -100px;
            list-style: none;
            width: 60px;
            transition: opacity 0.3s ease, transform 0.3s ease;
        }


        .nav li {
            display: block;
        }

        .nav li a {
            display: block;
            padding: 20px 20px;
            color: #9a9a9a;
            text-decoration: none;
            transition: background-color 0.3s ease-in-out;
        }

        .nav li a:hover {
            color: #333;
            border-radius: 20px;
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
            top: 250px;
            list-style: none;
            width: 60px;
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

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
            border: 1px solid #aeaeae;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            text-decoration: none;
            color: blue;
        }

        a:hover {
            text-decoration: underline;
        }

        .action-links a {
            display: inline-block;
            margin-right: 10px;
            color: #fff;
            text-decoration: none;
            background-color: #007bff;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease-in-out;
        }

        .action-links a:hover {
            background-color: #0062cc;
        }

        .tambah_data {
            color: #fff;
            background-color: #007bff;
            color: white;
            margin: 5px 27px auto;
            text-decoration: none;
            padding: 10px;
            border-radius: 5px;
            float: right;
        }

        .tambah_data:hover {
            background-color: #0062cc;
            text-decoration: none;
        }

        .data {
            margin: 50px 50px auto;
        }

        #myChart {
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>
    <div class="togle">
        <button id="toggle-nav"></button>
        <ul class="nav">
            <li class="nav-item"><a href="hUtama.php" data-title="Home"><i class="fas fa-home"></i></a></li>
            <li class="nav-item"><a href="#data" data-title="Data"><i class="fas fa-database"></i></a></li>
            <li class="nav-item"><a href="#grafik" data-title="Grafik"><i class="fas fa-chart-bar"></i></a></li>
            <li class="nav-item"><a href="login.php" data-title="Log out"><i class="fas fa-sign-in-alt"></i></a></li>
        </ul>
    </div>
    <h1 id="data">Data Pendaftaran Magang</h1>
    <form method="GET" action="">
        <label>Cari berdasarkan:</label>
        <select name="search_by">
            <option value="tanggal">Tanggal</option>
            <option value="nama">Nama</option>
            <option value="id">ID</option>
        </select>
        <input type="text" name="search_query">
        <button type="submit" name="search_button">Cari</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Lengkap</th>
                <th>Alamat</th>
                <th>Nomor Telepon</th>
                <th>Email</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Sekolah/Perguruan Tinggi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "pendaftaranOnline";
            $conn = mysqli_connect($servername, $username, $password, $dbname);

            // cek apakah tombol cari telah ditekan
            if (isset($_GET['search_button'])) {
                $search_by = $_GET['search_by'];
                $search_query = $_GET['search_query'];

                if ($search_by == 'tanggal') {
                    $sql = "SELECT * FROM pendaftaran WHERE tanggal_daftar='$search_query'";
                } else if ($search_by == 'nama') {
                    $sql = "SELECT * FROM pendaftaran WHERE nama LIKE '%$search_query%'";
                } else if ($search_by == 'id') {
                    $sql = "SELECT * FROM pendaftaran WHERE id=$search_query";
                }
            } else {
                $sql = "SELECT * FROM pendaftaran";
            }
            $query = mysqli_query($conn, $sql);

            $data = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

            while ($row = mysqli_fetch_array($query)) {
                $date = date_create($row['tanggal_daftar']);
                $month = date_format($date, 'n') - 1;
                $data[$month]++;
            }
            $query = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td>" . $row['alamat'] . "</td>";
                echo "<td>" . $row['no_telp'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['nim'] . "</td>";
                echo "<td>" . $row['jurusan'] . "</td>";
                echo "<td>" . $row['sekolah_pt'] . "</td>";
                echo "<td>";
                echo "<div class='action-links'>";
                echo "<a href='edit.php?id=" . $row['id'] . "'>Edit</a>";
                echo "<a href='delete.php?id=" . $row['id'] . "'>Hapus</a>";
                echo "<a href='detail.php?id=" . $row['id'] . "'>Detail</a>";
                echo "</div>";
                echo "</td>";
                echo "</tr>";
                $no++;
            }


            ?>
        </tbody>
    </table>
    <a href="tambahdata.php" class="tambah_data">Tambah Data</a>

    <div class="data" id="grafik">
        <canvas id="myChart"></canvas>
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



        // grafif
        var ctx = document.getElementById('myChart').getContext('2d');

        var date = new Date();
        var month = date.getMonth();

        var bgColor;
        if (month == 0) { // January
            bgColor = 'rgba(255, 99, 132, 0.2)';
        } else if (month == 1) { // February
            bgColor = 'rgba(54, 162, 235, 0.2)';
        } else if (month == 2) { // March
            bgColor = 'rgba(255, 206, 86, 0.2)';
        } else if (month == 3) { // April
            bgColor = 'rgba(75, 192, 192, 0.2)';
        } else if (month == 4) { // May
            bgColor = 'rgba(153, 102, 255, 0.2)';
        } else if (month == 5) { // June
            bgColor = 'rgba(255, 159, 64, 0.2)';
        } else if (month == 6) { // July
            bgColor = 'rgba(255, 99, 132, 0.2)';
        } else if (month == 7) { // August
            bgColor = 'rgba(54, 162, 235, 0.2)';
        } else if (month == 8) { // September
            bgColor = 'rgba(255, 206, 86, 0.2)';
        } else if (month == 9) { // October
            bgColor = 'rgba(75, 192, 192, 0.2)';
        } else if (month == 10) { // November
            bgColor = 'rgba(153, 102, 255, 0.2)';
        } else if (month == 11) { // December
            bgColor = 'rgba(255, 159, 64, 0.2)';
        }

        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                datasets: [{
                    label: 'Data Pendaftaran',
                    data: <?php echo json_encode($data); ?>,
                    backgroundColor: bgColor,
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });



    </script>
</body>

</html>