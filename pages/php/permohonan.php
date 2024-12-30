<?php

include "../../database/koneksi.php"; 


if (isset($_POST['submit'])) {
  // Ambil data dari form dan sanitasi
  $nama_pasien = mysqli_real_escape_string($koneksi, $_POST['nama_pasien']);
  $nama_rs = mysqli_real_escape_string($koneksi, $_POST['nama_rs']);
  $kota = mysqli_real_escape_string($koneksi, $_POST['kota']);
  $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
  $blood_type = mysqli_real_escape_string($koneksi, $_POST['blood_type']);
  $rhesus = mysqli_real_escape_string($koneksi, $_POST['rhesus']);
  $donor_type = mysqli_real_escape_string($koneksi, $_POST['donor_type']);
  $fullname = mysqli_real_escape_string($koneksi, $_POST['fullname']);
  $no_telp = mysqli_real_escape_string($koneksi, $_POST['no_telp']);
  $email = mysqli_real_escape_string($koneksi, $_POST['email']);

  // Query untuk memasukkan data
  $query = "INSERT INTO req_blood (nama_pasien, nama_rs, kota, alamat, blood_type, rhesus, donor_type, fullname, no_telp, email) 
              VALUES ('$nama_pasien', '$nama_rs', '$kota', '$alamat', '$blood_type', '$rhesus', '$donor_type', '$fullname', '$no_telp', '$email')";

  // Eksekusi query
  if (mysqli_query($koneksi, $query)) {
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
  <title>Request | Sirkula</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <a href="index.html"><img src="../../img/panah.png" alt="Arrow Left"></a>Request
  </div>
  <br>

  <div class="container">
    <form class="form" method="post" action="">
      <br>
      <h2 class="pateintinf">Patient Information</h2>

      <div class="form-group">
        <label for="patient-name">Patient Name</label>
        <input type="text" id="patient-name" name="nama_pasien" placeholder="Full Name" required>
      </div>

      <div class="form-group">
        <label for="hospital">Hospital</label>
        <input type="text" id="hospital" name="nama_rs" placeholder="Hospital Name" required>
      </div>

      <div class="form-group">
        <label for="city">City</label>
        <input type="text" id="city" name="kota" placeholder="City Name" required>
      </div>

      <div class="form-group">
        <label for="location">Blood donor location & additional information</label>
        <textarea id="location" name="alamat" placeholder="Where blood donations take place" required></textarea>
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

      <br>
      <hr class="garis1">
      <br>

      <h2>Contact Person</h2>

      <div class="form-group">
        <label for="contact-name">Full Name</label>
        <input type="text" id="contact-name" name="fullname" placeholder="Name of the patient's companion" required>
      </div>

      <div class="form-group">
        <label for="phone">Phone Number/Whatsapp</label>
        <input type="text" id="phone" name="no_telp" placeholder="Example: 08xxx" required>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Email address" required>
      </div>

      <br>
      <button type="submit" name="submit" class="submit-button">Send</button>
      <br>
    </form>
  </div>

  <footer>
    <div class="bawah">
      <div class="left">
        <img src="../../img/logo2.png" alt="Sirkula Logo" class="footer-logo">
        <div class="logo-text">
          <h2>Sirkula</h2>
          <p>Flowing Health, Sustaining Life</p>
        </div>
      </div>
      <div class="mid">
        <div class="contact-info">
          <img src="../../img/smartphone-call.png" alt="phone" class="phone-icon">
          (+62)12358398
          <br>
          sirkulaidn@gmail.com
        </div>
        <br>
        <div class="contact-info">
          <img src="../../img/placeholder.png" alt="location" class="phone-icon">
          Jln Krikil no.55
          <br>
          Jakarta, Indonesia
        </div>
      </div>
      <div class="right">
        <a href="#">Help & Support</a>
        <a href="#">Our Team</a>
        <a href="#">Home</a>
        <a href="#">Partnership</a>
        <a href="#">About Us</a>
        <a href="#">Privacy</a>
      </div>
    </div>
    <hr class="garis2">
    <div class="social-icons">
      <img src="../../img/instagram.png" alt="instagram">
      <img src="../../img/twitter.png" alt="twitter">
      <img src="../../img/youtube.png" alt="youtube">
      <img src="../../img/facebook.png" alt="facebook">
      <img src="../../img/linkedin.png" alt="linkedin">
    </div>
    <div class="footer-bottom">
      <p>&copy; Copyright. All rights reserved.</p>
    </div>
  </footer>
</body>

</html>