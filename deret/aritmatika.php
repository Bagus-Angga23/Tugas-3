<?php
//Form submitted
//set input hasil dan deret menjadi kosong
$suku1 = "";           //input1
$beda = "";            //input2
$suku_n = "";          //suku ke - n
$baris = "";           //baris yang akan disimpan
$baristampil = "";       //baris yang akan tampil
$hasil = "";           //hasil yang akan tampil


if (isset($_POST['submit'])) {      //cek jika tombol submit ditekan

    $suku1 = $_POST["suku1"];
    $beda = $_POST["beda"];
    $suku_n = $_POST["suku_n"];

    //aritmatika

    $a = $suku1;
    $b = $beda;
    $n = $suku_n;

    //suku ke n
    $hasil = $a + ($n - 1) * $b;

    //tampilan baris
    for ($i = 1; $i < $n + 1; $i++) {
        $baris = $a + ($i - 1) * $b;
        $baristampil .= $baris . " ";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <!-- My CSS -->
    <style>
        section {
            min-height: 420px;
        }
    </style>

    <title>TechIndo </title>
</head>
<!-- mengatur jarak dari navbar atas -->

<body class="mt-5">

    <!-- Navbar -->
    <nav class="navbar fixed-top  text-right navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Tech Indo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link " href="../index.php">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link " href="../media/about.html">About us</a>
                    <a class="nav-item nav-link" href="../media/contact.html">Contact</a>
                    <a class="nav-item nav-link" href="../media/register.html">Register</a>
                    <a class="nav-item nav-link " href="../deret/fibonacci.php">Fibonacci</a>
                    <a class="nav-item nav-link active" href="../deret/aritmatika.php">Aritmatika</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Konten -->
    <div class="container">
        <div class="row justify-content-center mb-5 pt-5">
            <div class="col-12 col-md-8 ">
                <form method="POST" action="#" class="bg-white form-container text-center  " id="forminput">
                    <h2>Menghitung Baris Aritmatika</h2>
                    <br />
                    <div class="form-group">
                        <label for="input1">Suku Pertama (a)</label>
                        <input type="text" class="form-control" value="<?php echo $suku1; ?>" id="input1"
                            placeholder="Masukkan Suku Pertama" name="suku1" required />
                    </div>
                    <div class="form-group">
                        <label for="input2">Beda (b)</label>
                        <input type="text" class="form-control" value="<?php echo $beda; ?>" id="input2"
                            placeholder="Masukkan Beda Dari Baris" name="beda" required />
                    </div>

                    <div class="form-group">
                        <label for="input2">Suku Yang Dicari (n)</label>
                        <input type="text" class="form-control" value="<?php echo $suku_n; ?>" id="jmlderet"
                            placeholder="Masukkan Suku Yang Ingin Dicari" name="suku_n" required />
                    </div>

                    <button type="submit" class="btn btn-success btn-block daftar-btn" name="submit">
                        Hitung
                    </button>

                    <br />
                    <div class="form-group">
                        <h5> <b>Suku Ke-N (Un): </b> </h5>
                        <h4> <?php echo $hasil; ?> </h4>
                    </div>

                    <div class="form-group">
                        <h5> <b>Baris Aritmatika: </b> </h5>
                        <h4> <?php echo $baristampil; ?> </h4>
                    </div>

                </form>
            </div>
        </div>
        <!-- Akhir Container -->
    </div>
    <hr>

</section>


</section>

    <footer class="bg-dark text-white">
        <div class="container">
            <div class="row text-center mb-3 pt-3">
                <div class="col">
                <p>Bagus Angga Copyright 2021.</p>
                </div>
            </div>
        </div>
    </footer>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>