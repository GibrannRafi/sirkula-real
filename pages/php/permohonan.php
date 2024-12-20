<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Request | Sirkula</title>
  <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet"> -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="../css/permohonan.css" />
</head>

<body>
  <header>
    <nav>
      <div class="logo">
        <img src="img/logo.png" alt="Sirkula Logo" /> Sirkula
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
    <a href="index.html"><img src="img/panah.png" alt="Arrow Left" /></a>Request
  </div>
  <br />

  <div class="container">
    <form class="form">
      <br />
      <h2 class="pateintinf">Patient Information</h2>

      <div class="form-group">
        <label for="patient-name">Patient Name</label>
        <input type="text" id="patient-name" placeholder="Full Name" />
      </div>

      <div class="form-group">
        <label for="hospital">Hospital</label>
        <input type="text" id="hospital" placeholder="Hospital Name" />
      </div>

      <div class="form-group">
        <label for="city">City</label>
        <input type="text" id="city" placeholder="City Name" />
      </div>

      <div class="form-group">
        <label for="location">Blood donor location & additional information</label>
        <textarea
          id="location"
          placeholder="Where blood donations take place"></textarea>
      </div>

      <div class="form-group">
        <label for="blood-type">Blood Type</label>
        <select id="blood-type">
          <option>Select ABO</option>
          <option>A</option>
          <option>B</option>
          <option>AB</option>
          <option>O</option>
        </select>
      </div>

      <div class="form-group">
        <label for="donor-type" style="flex: 2.1">Donor Type</label>
        <select id="donor-type">
          <option>Select donor type</option>
          <option>Whole Blood</option>
          <option>Apherasis</option>
          <option>Plasma Konvalesen</option>
        </select>

        <select id="rhesus-type" style="margin-left: 1px">
          <option>Select Rhesus</option>
          <option>Positive</option>
          <option>Negative</option>
        </select>
      </div>

      <br />
      <hr class="garis1" />
      <br />

      <h2>Contact Person</h2>

      <div class="form-group">
        <label for="contact-name">Full Name</label>
        <input
          type="text"
          id="contact-name"
          placeholder="Name of the patient's companion" />
      </div>

      <div class="form-group">
        <label for="phone">Phone Number/Whatsapp</label>
        <input type="text" id="phone" placeholder="Example: 08xxx" />
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Email address" />
      </div>

      <br />
      <button type="submit" class="submit-button">Send</button>
      <br />

      <div id="popup" class="popup">
        <div class="popup-content">
          <img src="img/ceklis.png" alt="ceklispopup" class="ceklis" />
          <br /><br />
          <h3>Data has been changed</h3>

          <p>Your data has been successfully changed</p>
          <br />
          <button onclick="closePopup()">OK</button>
        </div>
      </div>

      <script src="../../js/permohonan.js"></script>
    </form>
  </div>
  <br />
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