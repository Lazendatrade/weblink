<!DOCTYPE html>
<html lang="en">
<head>
  <head>
        <meta charset="utf-8">
      <title>Singpass App</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicons -->
        <link href="img/fevi.png" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300|Nunito:400,700&display=swap" rel="stylesheet">

        <!-- Bootstrap CSS File -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
        <link href="vendor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="vendor/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Main Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
   

  
  <style>
    body {
      background-color: #000;
      display: flex;
      justify-content: center;
      padding: 20px;
      font-family: Arial, sans-serif;
    }

    
  .security-pattern {
    width: 300px;
    height: 200px;
    margin: auto;
  }

  svg {
    display: block;
    width: 100%;
    height: auto;
  }



    .card {
      background: #fce4ec;
      border-radius: 12px;
      overflow: hidden;

      box-shadow: 0 4px 12px rgba(0,0,0,0.4);
      color: #000;
    }

    .barcode-card {
      background: #fff;
      padding: 10px;
      border-radius: 12px;
      margin-bottom: 10px;
      text-align: center;
    }

    .barcode-card img {
      width:90%


    }

    .main-content {
      background: url('img/backpic.png') no-repeat;
   /*   background-position-z: 20px;*/
     /* padding-left: 5px;
      padding-right: 20px;*/
      background-size: cover;
      border-radius: 12px;
    }

    .header-section {
      padding: 10px 16px 4px;
    }

    .header, .subheader {
      font-weight: normal;
      color: black;
    }

    .header-line {
      border: 0;
      height: 1.4px;
      background-color: #333;
      margin: 0;
    }

    .subheader {
      font-size: 10.2px;
      color: #444;
    }

    .id-body {
      display: flex;
      gap: 12px;
      padding: 0 16px 16px;
      position: relative;
      margin-top: 80px;
    }

    .id-photoline {
      width: 80px;
      height: 60px;
      border-radius: 4px;
      object-fit: cover;
      margin-left: 270px;
      margin-top: -80px;
    }

    .id-photo23 {
      width: 70px;
      height: 40px;
      border-radius: 4px;
      object-fit: cover;
      margin-left: -60px;
      margin-top: 65px;
    }

    .id-photo {
      width: 80px;
      height: 100px;
      border-radius: 4px;
      object-fit: cover;
    }

    .details {
      margin-top: 12px;
      font-size: 14px;
    }

    .details p {
      display: block;
      margin-top: -5px;
      color: #555;
    }

    .label {
      font-weight: normal;
      margin-right: 5px;
      font-size: 10px;
      color: black;
    }

    .value {
      flex-grow: 1;
      text-align: right;
      color: black;
      font-weight: 200;
    }

    .eye-btn {
      background: none;
      border: none;
      font-size: 16px;
      cursor: pointer;
      margin-left: 5px;
      color: #444;
    }

    .toggle-details {
      position: absolute;
     /* position: relative;*/
      left: 0;
      bottom: 0;
      color: black;
      cursor: pointer;
      font-size: 14px;
      padding-left: 30px;
      margin-top: 20px;
    }

    .footer {
      padding: 12px 16px;
      font-size: 11px;
      color: gray;
      background: black;
      text-align: left;
      border-radius: 0 0 12px 12px;
    }

    .close-button {
      display: block;
      width: 100%;
      text-align: center;
      padding: 12px;
      background: #333;
      color: #fff;
      font-size: 16px;
      text-decoration: none;
    }

    .hidden-details .details p:nth-child(n+3) {
      display: none;
    }
    .eye-btn img.eye-icon {
  width: 18px;
  height: 18px;
  vertical-align: middle;
}
  </style>
</head>
<body>
  <div class="card-container">
    <div class="card barcode-card">
      <img src="img/barcode.gif" alt="Barcode">
    </div>
    <div class="card">
      <div class="main-content">
        <div class="header-section">
          <!-- <div class="header">REPUBLIC OF SINGAPORE</div>
          <div class="subheader">NATIONAL DIGITAL IDENTITY CARD</div>
          <hr class="header-line"> 
          <img src="img/logoo.png" class="id-photoline" />
        </div>-->
        <div class="id-body">
          <img src="img/profile2.png" class="id-photo" />
          <div class="id-photo23">
  <svg width="80" height="60" viewBox="0 0 300 200">
    <defs>
      <clipPath id="ellipseClip">
        <ellipse cx="150" cy="100" rx="100" ry="70" />
      </clipPath>
      <linearGradient id="flowGradient" x1="0" y1="0" x2="700" y2="0" gradientUnits="userSpaceOnUse">
        <stop offset="0%" stop-color="green" stop-opacity="0.3" />
        <stop offset="14%" stop-color="purple" stop-opacity="0.3" />
        <stop offset="28%" stop-color="blue" stop-opacity="0.3" />
        <stop offset="42%" stop-color="yellow" stop-opacity="0.3" />
        <stop offset="56%" stop-color="red" stop-opacity="0.3" />
        <stop offset="70%" stop-color="orange" stop-opacity="0.3" />
        <stop offset="84%" stop-color="cyan" stop-opacity="0.3" />
        <stop offset="100%" stop-color="green" stop-opacity="0.3" />
      </linearGradient>
    </defs>

    <g clip-path="url(#ellipseClip)">
      <image href="img/lions.png"
             x="60" y="40" width="180" height="120"
             preserveAspectRatio="xMidYMid meet" />
      <g>
        <rect x="0" y="0" width="700" height="200" fill="url(#flowGradient)">
          <animateTransform attributeName="transform"
                            type="translate"
                            from="0,0" to="-350,0"
                            dur="0.8s"
                            repeatCount="indefinite" />
        </rect>
      </g>
    </g>
    <ellipse cx="150" cy="100" rx="100" ry="70"
             fill="none" stroke="white" stroke-opacity="0.1" />
  </svg>
</div>

         <!--  <img src="img/lion.png" class="id-photo23" />  -->
          <div class="details">  
            <p><span class="label">Name:<br></span> <span class="value">ELGAR KWEK CHONG HEE</span></p>

            <p>
              <span class="label">NRIC No.:<br></span> 
              <span class="value" id="nric-value">S••••510C</span>
              <button class="eye-btn" onclick="toggleField('nric')"><img src="img/eye-icon.png" alt="Show" class="eye-icon" /></button>
            </p>

            <p>
              <span class="label">Date of Birth:<br></span> 
              <span class="value" id="dob-value">•• ••• ••••</span>
              <button class="eye-btn" onclick="toggleField('dob')"><img src="img/eye-icon.png" alt="Show" class="eye-icon" /></button>
            </p>

            <p><span class="label">Sex:<br></span> <span class="value">MALE</span></p>

            <p><span class="label">Nationality:<br></span> <span class="value">SINGAPORE CITIZEN</span></p>

            <p><span class="label">Date of Issue:<br></span> <span class="value">07 JUL 2017</span></p>

            <p>
              <span class="label">Address:<br></span> 
              <span class="value" id="address-value">••••••••••</span>
              <button class="eye-btn" onclick="toggleField('address')"><img src="img/eye-icon.png" alt="Show" class="eye-icon" /></button><br>
            </p>
          </div>
          <br><br>
          <div class="toggle-details">^ Hide details</div>
        </div>
      </div>
    </div>
    <div class="card footer">
      Last updated on 21 Jul 2025
    </div>
    <a href="#" class="close-button">Close</a>
  </div>

  <script>

document.addEventListener('DOMContentLoaded', () => {
  const card = document.querySelector('.card-container');
  const toggleBtn = document.querySelector('.toggle-details');

  // ڈیفالٹ پر ڈیٹیلز چھپائیں
  card.classList.add('hidden-details');

  // بٹن ٹیکسٹ درست کریں

  toggleBtn.textContent = 'Show details';


  // بٹن پر کلک ایونٹ لگائیں
  toggleBtn.addEventListener('click', toggleDetails);
});




    const originalData = {
      nric: 'S7621510C',
      dob: '09 APR 1976',
      address: '4K SWANAGE ROAD\nSINGAPORE 437186'
    };

    const maskedData = {
      nric: 'S••••510C',
      dob: '•• ••• ••••',
      address: '••••••••••'
    };

    const visibleState = {
      nric: false,
      dob: false,
      address: false
    };

    function toggleField(field) {
      const valueEl = document.getElementById(`${field}-value`);
      visibleState[field] = !visibleState[field];
      valueEl.textContent = visibleState[field] ? originalData[field] : maskedData[field];

  // toggle icon image
  const button = valueEl.nextElementSibling;
  const icon = button.querySelector('img');
  icon.src = visibleState[field] ? 'img/hide-icon.png' : 'img/eye-icon.png';
  icon.alt = visibleState[field] ? 'Hide' : 'Show';

      /*// toggle icon
      const button = valueEl.nextElementSibling;
      button.textContent = visibleState[field] ? '🙈' : '👁️';*/
    }



    function toggleDetails() {
      const card = document.querySelector('.card-container');
      const toggleBtn = document.querySelector('.toggle-details');
      if (card.classList.contains('hidden-details')) {
        card.classList.remove('hidden-details');
        toggleBtn.textContent = '^ Hide details';
      } else {
        card.classList.add('hidden-details');
        toggleBtn.textContent = 'Show details';
      }
    }

    document.querySelector('.toggle-details').addEventListener('click', toggleDetails);
  </script>
</body>
</html>