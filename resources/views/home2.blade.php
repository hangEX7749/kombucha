<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }

    * {
      box-sizing: border-box;
    }

    div[style*="background-color"] {
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .product-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .product-image {
      max-width: 100%;
      height: auto;
    }
  </style>
</head>
<body>
  <nav class="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/images/Logo.png') }}" alt=""
                class="nav-logo d-inline-block align-text-top">
        </a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
  <div style="background-color: #FFFDEA">
    <div class="product-container">
      <img class="product-image" src="white-peach-kombucha.jpg" alt="White Peach Kombucha">
      <img class="product-image" src="green-pear-kombucha.jpg" alt="Green Pear Kombucha">
      <img class="product-image" src="peach-passionfruit-kombucha.jpg" alt="Peach Passionfruit Kombucha">
      <img class="product-image" src="wild-berries-kombucha.jpg" alt="Wild Berries Kombucha">
    </div>
    <h2>CRAFTING WELLNESS</h2>
    <p>Unlock Your Gut's Potential</p>
  </div>

  <div>
    <h1>Down</h1>
  </div>
</body>
</html>