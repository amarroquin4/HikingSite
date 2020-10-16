<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <title>Hiking Infographic</title>
</head>

<body>
    <!--Navigation-->
    <nav class="navbar navbar-expand-md navbar-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/index.html"><img style="width: 60px;" src="images/logo.jpg"></a>
            <div class="navbar-title">
                <h2>Introduction To Hiking</h2>
              </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>

    <!--Welcome Section-->
    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4">About</h1>
            </div>
            <div class="col-12">
                <p class="lead">This informational website covers everything there is to know about Hiking!
                    This is a small landing page that I have created to learn some of the basics of BootStrap along
                    with other tutorials. I wanted to see how responsive my design orignally would come out and learn 
                    how to set up sites quickly with BootStrap.
                </p>
            </div>
        </div>
    </div>


    <div class = "row welcome text-center">
        <div class = "col-12">
            <h1 class = "display-4">Credit</h1>
            <hr class = "light">
        </div>
    </div>


    <!--Three Column Section-->
    <div class="container-fluid padding">
        <div class="row text-center padding">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <i class="fas fa-code"></i>
                <h3>HTML5</h3>
                <p>Built with the latest version of HTML, HTML5</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <i class="fas fa-bold"></i>
                <h3>BOOTSTRAP</h3>
                <p>Built with the latest version of Bootstrap</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <i class="fab fa-css3"></i>
                <h3>CSS</h3>
                <p>Built with the latest version of CSS, CSS3</p>
            </div>
            <div class = "col-xs-12 col-sm-12 col-md-12">
                <i class = "fab fa-js"></i>
                <h3>JAVASCRIPT</h3>
                <p>Built with the latest version of Javascript</p>
            </div>
        </div>
    </div>

    <!--Sources for articles and pictures-->
    <div class = "container-fluid padding">
        <div class = "row text-center padding">
            <h1 class = "col-12">
                More Credits
            </h1>
        </div>
        <div class = "row text-center padding">
            <p class = "col-12">
                <a href = "https://www.coderstool.com/share-social-link-generator" target = "_blank">Social Link Generator</a>
                <br>
                <a href = "https://www.iexplore.com/experiences/hiking/22-things-to-know-you-go-hiking" target = "_blank">22 Things for Hiking</a>
                <br>
                <a href = "https://spoonuniversity.com/lifestyle/the-top-food-and-health-influencers-and-why-are-they-special" target = "_blank">Top Health influences</a>
                <br>
                <a href = "https://gowanderwild.com/best-hiking-snacks/" target = "_blank">Hiking Snacks</a>
                <br>
                <a href = "https://www.menshealth.com/nutrition/g31992235/best-hiking-snacks/" target = "_blank">Men's Health</a>
                <br>
                <a href = "https://hiconsumption.com/best-hiking-sunglasses/" target = "_blank">Hiking Sunglasses</a>
                <br>
                <a href = "https://www.pexels.com/search/hiking" target = "_blank">Pexels</a>
            </p>
        </div>
    </div>
    <!--Footer-->
    <footer>
        <div class="container-fluid padding">
          <div class="row text-center">
            <div class="col-12">
              <a href = "#"><img style="width:60px;" src="images/logo.jpg"></a>
              <hr class="light">
              <p>555-555-5555</p>
              <p>email@email.com</p>
              <p>9658 La Nana Way</p>
              <p>Los Angeles, CA, 90210</p>
            </div>
            <hr class="light-100">
            <div class="col-12">
              <h5>&copy; amarroquin4.com</h5>
            </div>
          </div>
        </div>
    </footer>
    
</body>

</html>