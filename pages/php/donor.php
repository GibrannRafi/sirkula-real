<?php
include "../../database/koneksi.php";

if (isset($_POST['submit'])) {
    $nama_donor = mysqli_real_escape_string($koneksi, $_POST['nama_donor']);
    $tgl_lahir = mysqli_real_escape_string($koneksi, $_POST['tgl_lahir']);
    $jenis_kel = mysqli_real_escape_string($koneksi, $_POST['jenis_kel']);
    $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
    $berat_badan = mysqli_real_escape_string($koneksi, $_POST['berat_badan']);
    $umur = mysqli_real_escape_string($koneksi, $_POST['umur']);
    $blood_type = mysqli_real_escape_string($koneksi, $_POST['blood_type']);
    $rhesus = mysqli_real_escape_string($koneksi, $_POST['rhesus']);
    $donor_type = mysqli_real_escape_string($koneksi, $_POST['donor_type']);
    $fullname = mysqli_real_escape_string($koneksi, $_POST['fullname']);
    $no_telp = mysqli_real_escape_string($koneksi, $_POST['no_telp']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);

    $sub = "INSERT INTO sub_blood (nama_donor, tgl_lahir, jenis_kel, alamat, berat_badan,umur,blood_type,rhesus,donor_type,fullname,no_telp,email)
    VALUES ('$nama_donor', '$tgl_lahir', '$jenis_kel', '$alamat', '$berat_badan', '$umur', '$blood_type', '$rhesus', '$donor_type', '$fullname', '$no_telp', '$email')";


    if (mysqli_query($koneksi, $sub)) {
        echo "<script>alert('Data berhasil ditambahkan!');</script>";
        echo "<script>window.location.href = '../../index.php';</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan: " . mysqli_error($koneksi) . "');</script>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor | Sirkula</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/permohonan.css">
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <img src="../../img/logo.png" alt="Sirkula Logo"> Sirkula
            </div>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="article.html">Article</a></li>
                <li><a href="kontak.html">Contact</a></li>
            </ul>
            <a href="signin.html">
                <button class="login-btn">Log in</button>
            </a>
        </nav>
    </header>
    <div class="title">
        <a href="index.html"><img src="../../img/panah.png" alt="Arrow Left"></a>Donor
    </div>
    <br>

    <div class="container">
        <form class="form" method="post">
            <br>
            <h2 class="pateintinf">Donor Name</h2>



            <div class="form-group">
                <label for="patient-name">Name</label>
                <input type="text" id="patient-name" placeholder="Full Name" name="nama_donor">
            </div>

            <div class="form-group">
                <label for="hospital">Place and date of birth</label>
                <input type="text" id="hospital" placeholder="Place and date of birth" name="tgl_lahir">
            </div>

            <div class="form-group">
                <label for="city">Gender</label>
                <input type="text" id="city" placeholder="Male/Female" name="jenis_kel">
            </div>

            <div class="form-group">
                <label for="location">Blood donor location & additional information</label>
                <textarea id="location" placeholder="Where blood donations take place" name="alamat"></textarea>
            </div>

            <div class="form-group">
                <label for="blood-type">Blood Type</label>
                <select id="blood-type" name="blood_type" required>
                    <option value="">Select ABO</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                    <option value="O">O</option>
                </select>
            </div>

            <div class="form-group">
                <label for="donor-type">Donor Type</label>
                <select id="donor-type" name="donor_type" required>
                    <option value="">Select donor type</option>
                    <option value="Whole Blood">Whole Blood</option>
                    <option value="Apherasis">Apherasis</option>
                    <option value="Plasma Konvalesen">Plasma Konvalesen</option>
                </select>

                <select id="rhesus-type" name="rhesus" required>
                    <option value="">Select Rhesus</option>
                    <option value="Positive">Positive</option>
                    <option value="Negative">Negative</option>
                </select>
            </div>

            <div class="form-group">
                <label for="city">Weight</label>
                <input type="text" id="city" placeholder="Enter weight" name="berat_badan">
            </div>

            <div class="form-group">
                <label for="city">Age</label>
                <input type="text" id="city" placeholder="Enter age" name="umur">
            </div>

            <br>
            <hr class="garis1">
            <br>

            <h2>Contact Person</h2>

            <div class="form-group">
                <label for="contact-name">Full Name</label>
                <input type="text" id="contact-name" placeholder="Name of the patient's companion" name="fullname">
            </div>

            <div class="form-group">
                <label for="phone">Phone Number/Whatsapp</label>
                <input type="text" id="phone" placeholder="Example: 08xxx" name="no_telp">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Email address" name="email">
            </div>

            <br>
            <button type="submit" class="submit-button" name="submit">Send</button>
            <br>


        </form>
    </div>
    <br>

    <footer>
        <div class="bawah">
            <div class="left">
                <div>
                    <img src="img/logo2.png" alt="Sirkula Logo" class="footer-logo">
                </div>
                <div class="logo-text">
                    <h2>Sirkula</h2>
                    <p>Flowing Health, Sustaining Life</p>
                </div>
            </div>

            <div class="mid">
                <div class="contact-info">
                    <img src="img/smartphone-call.png" alt="phone" class="phone-icon">
                    (+62)12358398
                    <br>
                    sirkulaidn@gmail.com
                </div>
                <br>
                <div class="contact-info">
                    <img src="img/placeholder.png" alt="phone" class="phone-icon">
                    Jln Krikil no.55
                    <br>
                    Jakarta, Indonesia
                </div>
            </div>

            <div class="right">
                <a href="#">Help & Support</a>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#">Our Team</a>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#">Home</a>
                <br><br>
                <a href="#">Partnership</a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#">About Us</a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#">Privacy</a>
            </div>
        </div>

        <hr class="garis2">

        <br>
        <div class="social-icons">
            <img src="img/instagram.png" alt="instagram">
            <img src="img/twitter.png" alt="twitter">
            <img src="img/youtube.png" alt="youtube">
            <img src="img/facebook.png" alt="facebook">
            <img src="img/linkedin.png" alt="linkedin">
        </div>

        <br>
        <div class="footer-bottom">
            <p>&copy; Copyright. All rights reserved.</p>
        </div>
        <br>
    </footer>

</body>

</html>