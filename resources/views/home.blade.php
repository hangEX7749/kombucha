<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <title>Jooy Kombucha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css">

    {{-- Google Web Font --}}
    <link rel="stylesheet" href="{{ asset('assets/fonts/font.css') }}" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    {{-- w3school CSS --}}
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    {{-- Font Awesome Icons --}}
    <script src="https://kit.fontawesome.com/c7555d58e5.js" crossorigin="anonymous"></script>

</head>

<body style="background-color: #FFFDEA">


    <div class="w3-bar w3-padding w3-card" style="letter-spacing:4px;">
        <a href="#home" class="w3-bar-item"><img src="{{ asset('assets/images/Logo.png') }}" class="nav-logo"
                alt="Cart"></a>
        <div class="w3-right roboto-medium nav-links">
            <a href="#about" class="w3-bar-item w3-button w3-mobile">HOME</a>
            <a href="#menu" class="w3-bar-item w3-button w3-mobile">ABOUT US</a>
            <a href="#contact" class="w3-bar-item w3-button w3-mobile">SHOP</a>
            <a href="#contact" class="w3-bar-item w3-button w3-mobile"><i class="fa-solid fa-cart-shopping"></i></a>

        </div>
    </div>

    <header style="background-color: #FFFDEA">
        <div class="container product-container">
            <div class="col col-lg-3">
                <img class="product-image" src="{{ asset('assets/images/Cherry.png') }}" alt="White Peach Kombucha">
            </div>
            <div class="col col-lg-3">
                <img class="product-image" src="{{ asset('assets/images/GreenPear.png') }}" alt="Green Pear Kombucha">
            </div>
            <div class="col col-lg-3">
                <img class="product-image" src="{{ asset('assets/images/Lemon.png') }}"
                    alt="Peach Passionfruit Kombucha">
            </div>
            <div class="col col-lg-3">
                <img class="product-image" src="{{ asset('assets/images/PassionFruit.png') }}"
                    alt="Wild Berries Kombucha">
            </div>
        </div>
        <div class="roboto-serif-title center">CRAFTING WELLNESS</div>
        <div class="roboto-serif-paragraph center">Unlock Your Gut's Potential</div>
    </header>


    <div class="w3-display-container headline">
        <img class="headline-img fade-in" id="fadeInImage" src="{{ asset('assets/images/headline.jpg') }}" alt="Headline">
        <div class="spacer"></div>
    </div>

    <div style="background-color: yellow">
        Picture
    </div>

    <div>
        <h2>Example of Jumbotron</h2>
        <div class="mt-4 p-5 bg-primary text-white rounded">
            <h1>Jumbotron Example</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat..</p>
        </div>
    </div>

</body>

<footer style="background-color: red">
    <div class="container">
        <h3>Footer</h3>
    </div>
</footer>


<script>

document.addEventListener("scroll", function() {
    var image = document.getElementById("fadeInImage");
    var rect = image.getBoundingClientRect();
    var windowHeight = window.innerHeight;

    // Check if the image is in the viewport
    if (rect.top < windowHeight && rect.bottom >= 0) {
        image.classList.add("visible");
    }
});

</script>




</html>
