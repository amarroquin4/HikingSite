<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
  <link rel="stylesheet" href="style.css">
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
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--Image Slider-->
  <div id="slides" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" id="slide1">
        <img class="d-block w-100" src="images/pexels-dustin-cox-159884.jpg" alt="First slide">
        <div class="carousel-caption">
          <h1 class="display-2">Hiking is Great</h1>
          <h3>Informational Site about Hiking</h3>
          <a href="https://www.google.com/maps/dir//hiking%20near%20me" target="_blank"><button type="button"
              class="btn btn-outline-light btn-lg">Find Fun Places Near You Today</button></a>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-caption">
          <h1 class="display-2">Hiking is Healthy</h1>
          <h3>Informational Site about Hiking</h3>
          <a href="https://www.google.com/maps/dir//hiking%20near%20me" target="_blank"><button type="button"
              class="btn btn-outline-light btn-lg">Find Fun Places Near You Today</button></a>
        </div>
        <img class="d-block w-100" src="images/pexels-krivec-ales-554609.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <div class="carousel-caption">
          <h1 class="display-2">Hiking is Fun</h1>
          <h3>Informational Site about Hiking</h3>
          <a href="https://www.google.com/maps/dir//hiking%20near%20me" target="_blank"><button type="button"
              class="btn btn-outline-light btn-lg">Find Fun Places Near You Today</button></a>
        </div>
        <img class="d-block w-100" src="images/alfredPana.jpg" alt="Third slide">
      </div>

    </div>
  </div>


  <!--Circle Images with more info-->
  <div class="container-fluid padding">
    <div class="row">
      <div class="col-lg-4">
        <img class="rounded-circle" width=150 height=150 src="images/logo.jpg">
        <h2>Health Benefits</h2>
        <p>Besides fresh air, there are way more benefits that comes from
          hiking.
        </p>
        <p><a class="btn btn-secondary" href="#health-benefits">Read More...</a></p>
      </div>
      <div class="col-lg-4">
        <img class="rounded-circle" width=150 height=150 src="images/stjinDijkstra.jpg">
        <h2>Photos</h2>
        <p>Sharing your passion for hiking encourages others to hike too.
        </p>
        <p><a class="btn btn-secondary" href="#PhotoGallery">Read More...</a></p>
      </div>
      <div class="col-lg-4">
        <img class="rounded-circle" width=150 height=150 src="images/pikrepo.com.jpg">
        <h2>Common Items</h2>
        <p>A set of items that will help on any hike and are crucial to a great trip.</p>
        <p><a class="btn btn-secondary" href="#commonItems">Read More...</a></p>
      </div>
    </div>
  </div>
  <!--Jumbotron Report-->
  <div class="container-fluid">
    <div class="row jumbotron">
      <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
        <p class="lead">"...let go of technology and be completely in the moment..."
        </p>
      </div>
      <div id="articleButton" class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
        <a target="_blank" href="https://www.fridayhealthplans.com/2019/04/16/hiking-is-so-good-for-you/"><button
            type="button" class="btn btn-outline-secondary btn-lg">Read More...</button></a>
      </div>
    </div>
  </div>
  <!--Two Column Section text on left image on right-->
  <div class="container-fluid padding" id="health-benefits">
    <div class="row padding">
      <div class="col-md-12 col-lg-6">
        <h2>Hiking brings...</h2>
        <hr class="light-100">
        <h4>Healthy toned exercise for the enitre body</h4>
        <p>Regular walking can get your butt in better shape, but
          taking on sharp inclines, using trekking poles to propel you forward,
          and clambering over rocks gives your body an all-over workout. </p>
        <br>
        <h4>Increased happiness and less depression</h4>
        <p>Research shows that using hiking as an additional therapy can help
          people with severe depression. It may even inspire those suffering to
          lead a more active lifestyle.</p>
        <br>
        <br>
        <a href="https://www.healthfitnessrevolution.com/top-10-health-benefits-hiking/" target="_blank"
          class="btn-outline-secondary">Learn More</a>
      </div>
      <div class="col-lg-6">
        <img src="images/alfredoM1.jpg" class="img-fluid">
      </div>
    </div>
  </div>
  <!--Fixed Background-->
  <figure>
    <div class="fixed-wrap">
      <div id="fixed" style="background-image: url('images/alfredoM5.jpg');">
      </div>
    </div>
  </figure>

  <!--PhotoGallery Lightbox Drop Down Section-->
  <div class="container-fluid padding">
    <div class="row welcome text-center" id="PhotoGallery">
      <div class="col-12">
        <h2 class="display-4">Hiking Gallery</h2>
      </div>
    </div>
  </div>

  <button class="accordion" id="photoGalleryButton">Click to expand</button>
  <div class="panel" id="photoGalleryPanel">
    <div class="lightbox-gallery">
      <div class="container">
        <div class="intro">
          <p class="text-center" style="position:relative; top:20px;">Click on any image to see more detail<br>
            <a href="https://www.pexels.com/search/hiking/" target="_blank">Source</a></p>
        </div>
        <div class="row photos" id="photos">
          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="images/pexels-simon-migaj-746386.jpg"
              data-lightbox="photos"><img class="img-fluid" src="images/pexels-simon-migaj-746386.jpg"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="images/pexels-dustin-cox-159884.jpg"
              data-lightbox="photos"><img class="img-fluid" src="images/pexels-dustin-cox-159884.jpg"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="images/pexels-gabriela-palai-397096.jpg"
              data-lightbox="photos"><img class="img-fluid" src="images/pexels-gabriela-palai-397096.jpg"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="images/pexels-flo-maderebner-238622.jpg"
              data-lightbox="photos"><img class="img-fluid" src="images/pexels-flo-maderebner-238622.jpg"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="images/pexels-pixabay-258045.jpg"
              data-lightbox="photos"><img class="img-fluid" src="images/pexels-pixabay-258045.jpg"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="images/pexels-vlad-bagacian-1061640.jpg"
              data-lightbox="photos"><img class="img-fluid" src="images/pexels-vlad-bagacian-1061640.jpg"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="images/pexels-flo-maderebner-869258.jpg"
              data-lightbox="photos"><img class="img-fluid" src="images/pexels-flo-maderebner-869258.jpg"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="images/pexels-tirachard-kumtanom-450062.jpg"
              data-lightbox="photos"><img class="img-fluid" src="images/pexels-tirachard-kumtanom-450062.jpg"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="images/pexels-mike-andrei-1271619.jpg"
              data-lightbox="photos"><img class="img-fluid" src="images/pexels-mike-andrei-1271619.jpg"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="images/pexels-eric-sanman-1365428.jpg"
              data-lightbox="photos"><img class="img-fluid" src="images/pexels-eric-sanman-1365428.jpg"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="images/pexels-pixabay-235734.jpg"
              data-lightbox="photos"><img class="img-fluid" src="images/pexels-pixabay-235734.jpg"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="images/pexels-artem-beliaikin-2106776.jpg"
              data-lightbox="photos"><img class="img-fluid" src="images/pexels-artem-beliaikin-2106776.jpg"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="images/pexels-min-an-1375560.jpg"
              data-lightbox="photos"><img class="img-fluid" src="images/pexels-min-an-1375560.jpg"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="images/pexels-spencer-lind-1370668.jpg"
              data-lightbox="photos"><img class="img-fluid" src="images/pexels-spencer-lind-1370668.jpg"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="images/pexels-pixabay-533769.jpg"
              data-lightbox="photos"><img class="img-fluid" src="images/pexels-pixabay-533769.jpg"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="images/pexels-ibadah-mimpi-3230857.jpg"
              data-lightbox="photos"><img class="img-fluid" src="images/pexels-ibadah-mimpi-3230857.jpg"></a></div>


        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <hr class="my-4">
  <!--Common Items Title -->
  <div class="container-fluid padding" id="commonItemsTitle">
    <div class="row welcome text-center">
      <div class="col-12">
        <h2 class="display-4">Common Items</h2>
      </div>
    </div>
  </div>
  <!--cards-->
  <div class="container-fluid padding" id="commonItems">
    <!--First Row of items-->
    <div class="row padding">
      <!--BackpackCard-->
      <div class="col-md-4">
        <div class="card">
          <div class="card-image"><img class="card-img-top" src="images/hiking-backpack.jpg"></div>
          <div class="card-body">
            <div class=card-front>
              <h4 class="card-title">DayPacks</h4>
              <p>Essential to hold snacks, water, and various other items for your trip</p>
              <button id="backpackBtn" class="btn btn-outline-secondary">More info...</button>
            </div>
            <!-- The BACKPACK Modal -->
            <div id="backpackModal" class="modal">
              <!-- Modal content -->
              <div class="modal-content">
                <span class="close">&times;</span>

                <h2>DayPacks</h2>
                <p><img style="object-fit: cover;" src="images/pwc-lotus.jpg">A hiking pack is similar to a regular
                  urban backpack in size, but
                  is usually made of lighter ripstop fabric, has a frame or backboard to
                  give the pack structure and has a hip belt as well as shoulder straps to
                  take some of the weight of your shoulders. Many day packs also have a built-in
                  hydration reservoir to make drinking on the trail easier.<br>
                  <br>
                  <!--Spacing-->
                  <br>
                  <br>
                  <br>
                  <br>
                  <a href="https://www.quora.com/What-is-a-hiking-backpack" target="_blank" id="source">Source</a>
                  <a href="https://www.amazon.com/s?k=Hiking+backpack&ref=nb_sb_noss" target="_blank" id="amazonLink"><i
                      class="fab fa-amazon"></i></a></p>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!--ShoesCard-->
      <div class="col-md-4">
        <div class="card">
          <div class="card-image"><img class="card-img-top" src="images/hiking1.jpg"></div>
          <div class="card-body">
            <div class=card-front>
              <h4 class="card-title">Hiking Shoes</h4>
              <p>Essential obviously cause you don't want feet pain</p>
              <button id="shoesBtn" class="btn btn-outline-secondary">More info...</button>
            </div>
            <!-- The Hiking Shoes Modal -->
            <div id="shoesModal" class="modal">
              <!-- Modal content -->
              <div class="modal-content">
                <span class="close">&times;</span>

                <h2>Hiking Shoes</h2>
                <p><img src="images/Hiking_shoes_Lowa.jpg">Hiking shoes are one of the most important items of
                  hiking gear, since their quality and durability can determine a hiker's ability to walk
                  long distances without injury. Hiking boots are constructed to provide comfort for walking
                  considerable distance over rough terrain. Boots that protect the hiker's feet and heel are
                  recommended. Hiking boots give ankle support and are fairly stiff.<br>
                  <br>
                  <!--Spacing-->
                  <br>
                  <br>
                  <br>
                  <br>
                  <a href="https://en.wikipedia.org/wiki/Hiking_boot" target="_blank" id="source">Source</a>
                  <a href="https://www.amazon.com/s?k=hiking+shoes&ref=nb_sb_noss_1" target="_blank" id="amazonLink"><i
                      class="fab fa-amazon"></i></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--HikingPolesCard-->
      <div class="col-md-4">
        <div class="card">
          <div class="card-image"><img class="card-img-top"
              src="images/mountain-hiking-ride-hiking-poles-walking-sticks-cairn-pile-of-stones-mound-of-stones-landscape.jpg">
          </div>
          <div class="card-body">
            <div class="card-front">
              <h4 class="card-title">Trekking Poles / Hiking Stick</h4>
              <p>To ease foot pain and to make walks last longer</p>
              <button id="sticksBtn" class="btn btn-outline-secondary">More info...</button>
            </div>
            <!-- The Hiking Sticks Modal -->
            <div id="sticksModal" class="modal">
              <!-- Modal content -->
              <div class="modal-content">
                <span class="close">&times;</span>

                <h2>Trekking Poles vs. Hiking Stick</h2>
                <p><img src="images/nordic-poles-4607092_640.png">A trekking pole (also known as a hiking pole) is
                  basically a ski pole with a handle that you use when hiking. Trekking poles are almost always used in
                  pairs. <br><br>
                  There is also something called a hiking staff (also known as a hiking stick) that is a single
                  pole. Most hikers go with two trekking poles over a hiking staff. I think the pair just provides
                  more benefits. It gives great support for your knees, and helps you carry a heavier pack to hike
                  even further.<br>
                  <br>
                  <!--Spacing-->
                  <a href="https://hikingguy.com/how-to-hike/do-i-need-trekking-poles/" target="_blank"
                    id="source">Source</a>
                  <a href="https://www.amazon.com/Best-Sellers-Sports-Outdoors-Trekking-Poles/zgbs/sporting-goods/3401281"
                    target="_blank" id="amazonLink"><i class="fab fa-amazon"></i></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Second Row of items-->
  <div class="container-fluid padding" id="commonItemsRow2">
    <div class="row padding">
      <!--WaterCard-->
      <div class="col-md-4">
        <div class="card">
          <div class="card-image"><img class="card-img-top" src="images/bottles-water-steel-glass-774466.jpg"></div>
          <div class="card-body">
            <div class=card-front>
              <h4 class="card-title">Water</h4>
              <p>This cannot be emphasized enough. It is absolutely crucial to have water</p>
              <button id="waterBtn" class="btn btn-outline-secondary">More info...</button>
            </div>
            <!-- The Hiking Sticks Modal -->
            <div id="waterModal" class="modal">
              <!-- Modal content -->
              <div class="modal-content">
                <span class="close">&times;</span>

                <h2>Water</h2>
                <p><img src="images/pexels-julia-sakelli-1342529.jpg">Water bottles are very important for hiking
                  and this cannot be emphasized enough. Comfort and size can vary from model to model but
                  it's better to have multiple for various types of hikes. For example, if you want more comfort
                  and will be hiking for longer, a <a id="hydrationButton"
                    href="https://www.amazon.com/s?k=hydrationpack&dc&ref=a9_asc_1" target="_blank">hydration pack</a>
                  is
                  a great option.
                  <br>
                  <br>
                  Below is an article from CNET that goes over the best water bottles in 2020<br>
                  <br>
                  <!--Spacing-->
                  <br>
                  <br>
                  <a href="https://www.cnet.com/health/best-water-bottle-to-buy-for-2020/" target="_blank"
                    id="source">Source</a>
                  <a href="https://www.amazon.com/s?k=water+bottles+hiking&ref=nb_sb_noss" target="_blank"
                    id="amazonLink"><i class="fab fa-amazon"></i></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--SunglassesCard-->
      <div class="col-md-4">
        <div class="card">
          <div class="card-image"><img class="card-img-top" src="images/glasses-png_1291567.png"
              style="object-fit: contain;"></div>
          <div class="card-body">
            <div class=card-front>
              <h4 class="card-title">Sunblock / Sunglasses</h4>
              <p>The earth is getting warmer and it can destroy your skin if you aren't cautious</p>
              <button id="sunBtn" class="btn btn-outline-secondary">More info...</button>
            </div>
            <!-- The Hiking Shoes Modal -->
            <div id="sunModal" class="modal">
              <!-- Modal content -->
              <div class="modal-content">
                <span class="close">&times;</span>

                <h2>Sunblock / Sun Glasses</h2>
                <p><img id = "sunModalImg" src="images/Hiking_shoes_Lowa.jpg">If the sun doesn't bother my eyes, do I still need to wear
                  sunglasses?
                  <br><br>
                  <b>Yes.</b> The sun emits damaging ultraviolet (UV) rays that can damage the eyes.
                  And UV rays penetrate clouds, so you can get sun damage to your eyes even on overcast days.<br>
                  Making the right decision is very important in order to have the best protection, safety, and
                  comfort.<br><br>
                  Sunblock <a href="https://www.amazon.com/s?k=sunscreen&ref=nb_sb_noss_1" target="_blank"
                    id="amazonLinkSun1"><i class="fab fa-amazon"></i></a>
                  <br>
                  Sunglasses <a href="https://www.amazon.com/s?k=sunglasses&ref=nb_sb_noss_1"
                    style="position:relative; left:43%;" target="_blank" id="amazonLinkSun2"><i
                      class="fab fa-amazon"></i></a>
                  <br>
                  <a href="https://www.allaboutvision.com/faq/sunglasses.htm" target="_blank" id="source"
                    style="position:relative; top:40%">Source</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--SnackCard-->
      <div class="col-md-4">
        <div class="card">
          <div class="card-image"><img class="card-img-top" src="images/snacksThumb.jpg"></div>
          <div class="card-body">
            <div class="card-front">
              <h4 class="card-title">Snacks/Food</h4>
              <p>To ease foot pain and to make walks last longer</p>
              <button id="snackBtn" class="btn btn-outline-secondary">More info...</button>
            </div>
            <!-- The Snacks Modal -->
            <div id="snackModal" class="modal">
              <!-- Modal content -->
              <div class="modal-content">
                <span class="close">&times;</span>

                <h2>Snacks/Food</h2>
                <p><img class="img-fluid" src="images/healthy+hiking+snacks.jpg">Hiking snacks are sometimes just as important as
                  water but definitely helps
                  your body endure longer hikes. Not only do these hiking snacks hold up well in your backpack as
                  you hike, but they also taste delicious and will keep you energized on the trail.<br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <a href="https://www.quora.com/What-is-a-hiking-backpack" target="_blank" id="source">Source</a>
                  <a href="https://www.amazon.com/s?k=hiking+snacks&ref=nb_sb_noss_1" target="_blank" id="amazonLink"><i
                      class="fab fa-amazon"></i></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Warning about safety-->
  <div class="container-fluid padding">
    <div class="row welcome text-center">
      <div class="col-12">
        <h4 class="display-4">Key questions <em>BEFORE</em> your hike</h4>
        <hr>
        <ul id = "questionList" class="list-group">
          <li>How much distant is this hike?</li>
          <li>What is the elevation gain?</li>
          <li>How much time will this hike take?</li>
          <li>Is this hike going to be difficult?</li>
        </ul>
      </div>
    </div>
  </div>


  <!--Fixed Background2-->
  <figure>
    <div class="fixed-wrap">
      <div id="fixed" style="background-image: url('images/pexels-eric-sanman-1365428.jpg');">
      </div>
    </div>
  </figure>



  <!--DropDown Tips-->
  <div class="container-fluid padding">
    <div class="row welcome text-center">
      <div class="col-12">
        <h2 class="display-4">More Tips About Hiking</h2>
      </div>
    </div>
    <button class="accordion">Tips to Keep You On Track <svg width="1em" height="1em" viewBox="0 0 16 16"
        class="bi bi-caret-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
          d="M3.204 5L8 10.481 12.796 5H3.204zm-.753.659l4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z" />
      </svg>
      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-up" fill="currentColor"
        xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
          d="M3.204 11L8 5.519 12.796 11H3.204zm-.753-.659l4.796-5.48a1 1 0 0 1 1.506 0l4.796 5.48c.566.647.106 1.659-.753 1.659H3.204a1 1 0 0 1-.753-1.659z" />
      </svg>
    </button>
    <div class="panel">
      <p class="hikingTips">
        <ul>
          <li><em>Never hike alone. </em> You need to have a partner in case you have an accident.</li>
          <li>Know how to get to your destination, which may mean buying a map and carrying a compass.</li>
          <li>Along the way, you may need to refill your water supply. Know where to find water,
            and have that marked on your map.</li>
          <li>Always look at the weather forecast ahead of time and wear layers that you can remove
            as you’re hiking.</li>
          <li>If you have a four-legged friend, check if dogs are allowed on the trail. Everywhere
            has different rules about being on/off leash.</li>
        </ul>
      </p>
    </div>

    <button class="accordion">Tips to Keep You Safe <svg width="1em" height="1em" viewBox="0 0 16 16"
        class="bi bi-caret-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
          d="M3.204 5L8 10.481 12.796 5H3.204zm-.753.659l4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z" />
      </svg>
      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-up" fill="currentColor"
        xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
          d="M3.204 11L8 5.519 12.796 11H3.204zm-.753-.659l4.796-5.48a1 1 0 0 1 1.506 0l4.796 5.48c.566.647.106 1.659-.753 1.659H3.204a1 1 0 0 1-.753-1.659z" />
      </svg></button>
    <div class="panel">
      <p class="hikingTips">
        <ul>
          <li>Your safety on the trail is your own responsibility. Stay on the trail and don’t
            take shortcuts on switchbacks.</li>
          <li>Know your capabilities. It’s best to be conservative on your first hike.
            Altitude, climbing and heat can make hikes that much more difficult.</li>
          <li>Keep your medical conditions in mind when you’re planning a hike.
            Knee and back problems, heart conditions, diabetes, asthma and other
            medical conditions can be amplified with exertion and severe weather.</li>
          <li>Consider hiking poles to take the stress off your knees and thighs.</li>
          <li>Keep your backpack as light as possible. Water and food should be
            the heaviest items you pack.</li>
          <li>Invest in a good quality backpack that fits your style and body type.</li>
          <li>Hiking boots are always preferred to gym shoes, but wear them in first
            so you don't get blisters.</li>
          <li>Sun glasses, sunscreen, bug spray and a basic first aid kit are always
            good to carry with you.</li>
        </ul>
      </p>
    </div>

    <button class="accordion">Tips to Save Your Energy <svg width="1em" height="1em" viewBox="0 0 16 16"
        class="bi bi-caret-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
          d="M3.204 5L8 10.481 12.796 5H3.204zm-.753.659l4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z" />
      </svg>
      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-up" fill="currentColor"
        xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
          d="M3.204 11L8 5.519 12.796 11H3.204zm-.753-.659l4.796-5.48a1 1 0 0 1 1.506 0l4.796 5.48c.566.647.106 1.659-.753 1.659H3.204a1 1 0 0 1-.753-1.659z" />
      </svg></button>
    <div class="panel">
      <p class="hikingTips">
        <ul>
          <li>Hike at a pace where you can talk while your walking and know when to take a break.</li>
          <li>Stop once every hour for 10 minutes even if you don't think you need a rest.</li>
          <li>You should never hike on an empty stomach. Be sure to eat before, during and after your hike.</li>
          <li>Make sure your snacks are filled with carbohydrates and salt. The carbs will give you energy
            while the salts keep your electrolytes in check.</li>
          <li>Always carry your trash with you. Don’t leave litter on the trail.</li>
          <li>Drink before you are thirsty. For every hour of hiking, plan to drink half
            a quart to a quart of water.</li>
        </ul>
      </p>
    </div>

    <button class="accordion">Tips to Finish Your Hike <svg width="1em" height="1em" viewBox="0 0 16 16"
        class="bi bi-caret-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
          d="M3.204 5L8 10.481 12.796 5H3.204zm-.753.659l4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z" />
      </svg>
      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-up" fill="currentColor"
        xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
          d="M3.204 11L8 5.519 12.796 11H3.204zm-.753-.659l4.796-5.48a1 1 0 0 1 1.506 0l4.796 5.48c.566.647.106 1.659-.753 1.659H3.204a1 1 0 0 1-.753-1.659z" />
      </svg></button>
    <div class="panel">
      <p class="hikingTips">
        <ul>
          <li>Assume it will take twice as long to hike uphill as down.</li>
          <li>Give hikers going uphill the right of way.</li>
          <li>Plan to end your hike before sundown. If you do end up hiking
            in the dark, bring a flashlight with extra batteries or a headlamp.</li>
        </ul>
      </p>
    </div>
  </div>


  <hr class="my-4">
  <!--Two Column Section text on right, img on left-->
  <div class="container-fluid padding" style="padding-top:60px;">
    <div class="row padding">
      <div class="col-lg-6">
        <img src="images/alfredoM3.jpg" class="img-fluid">
      </div>
      <div class="col-md-12 col-lg-6">
        <h2 style="text-align: center;">Hiking philosphy</h2>
        <hr class="light">
        <p>
          <ul>
            <li>“Thousands of tired, nerve-shaken, over-civilized people are
              beginning to find out that going to the mountains is going home; that wildness is a necessity”
              <br>
              <em>― John Muir, Our National Parks</em></li>
            <br>
            <li>“The long distance hiker, a breed set apart,
              From the likes of the usual pack.
              He’ll shoulder his gear, be hittin’ the trail;
              Long gone, long ‘fore he’ll be back.”
              <br>
              <em>― M.J. Eberhart</em></li>
            <br>
            <li>“Perhaps there is no thrill so great as that which
              comes with a walk in the freshness of morning air.”
              <br>
              <em>― Hellen Keller</em></li>
            <br>
            <li>“Returning home is the most difficult part of long-distance hiking;
              You have grown outside the puzzle and your piece no longer fits.”
              <br>
              <em>― Cindy Ross</em></li>
            <br>
            <li>“Getting to the top is optional. Getting down is mandatory.”
              <br>
              <em>― Ed Viesturs, No Shortcuts to the Top: Climbing the World's 14 Highest Peaks</em></li>
            <br>
            <li>
              “Jumping from boulder to boulder and never falling, with a heavy pack, 
              is easier than it sounds; you just can't fall when you get into the rhythm of the dance.”
              <br>
              <em>―  Jack Kerouac, The Dharma Bums</em></li>
            <br>
            <li>
              “You need mountains, long staircases don't make good hikers.”
              <br>
              <em>― Amit Kalantri, Wealth of Words</em></li>
            <br>
          </ul>
        </p>
      </div>
    </div>
  </div>
  <hr class="my-4">

  <!--Connect-->
  <div class="container-fluid padding">
    <div class="row text-center padding">
      <div class="col-12">
        <h2>Share</h2>
      </div>
      <div class="col-12 social padding">
        <a href="https://www.facebook.com/sharer.php?u=https://hikingsite.herokuapp.com/"><i
            class="fab fa-facebook"></i></a>
        <a
          href="https://twitter.com/intent/tweet?url=https://hikingsite.herokuapp.com/&text=Check%20out%20this%20Hiking%20Informational&via="><i
            class="fab fa-twitter"></i></a>
        <a
          href="https://www.linkedin.com/shareArticle?url=https://hikingsite.herokuapp.com/&title=Check%20out%20this%20Hiking%20Informational"><i
            class="fab fa-linkedin"></i></a>
        <a
          href="mailto:%7Bemail_address%7D?subject=Check%20out%20this%20Hiking%20Informational&body=https://hikingsite.herokuapp.com/%20It's%20an%20interesting%20site%20with%20lots%20of%20information%20to%20create%20"><i
            class="far fa-envelope"></i></a>
      </div>
    </div>
  </div>

  <!--Footer-->
  <footer>
    <div class="container-fluid padding">
      <div class="row text-center">
        <div class="col-12">
          <a href="#"><img class="img-fluid" style="width:60px;" src="images/logo.jpg"></a>
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
      <!--BACK TO TOP BTN-->
      <a id="back-top" href="#"><i class="fa fa-chevron-up"></i></a>
    </div>
  </footer>





  <!--SCRIPTS-->

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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>-->
  <!--LIGHTBOX JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

  <script src="index.js"></script>
</body>

</html>