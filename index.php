<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dita</title>

    <link rel="shortcut icon" href="layouts/assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="layouts/assets/css/style.css">
</head>
<body>


    <aside>
        <header>
            <img src="layouts/assets/img/aku.jpg" class="brand">
            <div class="user" style="">kede kopi</div>
        </header>

        <nav>
            <ul>
                 <li>
                    <a href="index.php">
                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Home
                    </a>
                </li>
                <li>
                    <a href="index.php?hal=menu_tampil">
                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Menu
                    </a>
                </li>
                <li>
                    <a href="index.php?hal=kry_tampil">
                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Karyawan
                    </a>
                </li>
                <li>
                    <a href="index.php?hal=trk_tampil">
                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Transaksi
                    </a>
                </li>
            </ul>
    </aside>

    <main>
            <section>
                <?php 
                if (isset($_GET['hal'])) {
                    require $_GET['hal'] . ".php";
                } else {
                     require 'main.php';
                }
                        ?>
            </section>

            <footer>
                  Copyright &copy; 2023. Designed by Mrs. DITA SUCINTA SEMBIRINg
            </footer>
      </main>







</body>
</html>