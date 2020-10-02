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
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-title">
        <h2>Introduction To Hiking</h2>
      </div>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--Image Slider-->
  <div id="slides" class="carousel-slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" id="slide1">
        <img class="d-block w-100" src="images/pexels-dustin-cox-159884.jpg" alt="First slide">
        <div class="carousel-caption">
          <h1 class="display-2">Hiking is Great</h1>
          <h3>Informational Site about Hiking</h3>
          <a href = "https://www.google.com/maps/dir//hiking%20near%20me" target = "_blank"><button type="button" class="btn btn-outline-light btn-lg">Find Fun Places Near You Today</button></a>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-caption">
          <h1 class="display-2">Hiking is Healthy</h1>
          <h3>Informational Site about Hiking</h3>
          <a href = "https://www.google.com/maps/dir//hiking%20near%20me" target = "_blank"><button type="button" class="btn btn-outline-light btn-lg">Find Fun Places Near You Today</button></a>
        </div>
        <img class="d-block w-100" src="images/pexels-krivec-ales-554609.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <div class="carousel-caption">
          <h1 class="display-2">Hiking is Fun</h1>
          <h3>Informational Site about Hiking</h3>
          <a href = "https://www.google.com/maps/dir//hiking%20near%20me" target = "_blank"><button type="button" class="btn btn-outline-light btn-lg">Find Fun Places Near You Today</button></a>
        </div>
        <img class="d-block w-100" src="images/pexels-simon-migaj-746386.jpg" alt="Third slide">
      </div>
      
    </div>
  </div>


  <!--Circle Images with more info-->
  <div class="container fluid">
    <div class="row">
      <div class="col-lg-4">
        <img class="rounded-circle" width=150 height=150 src="images/logo.jpg">
        <h2>Health Benefits</h2>
        <p>Besides fresh air, there are plenty of other benefits that comes from 
          consistently hiking.
        </p>
        <p><a class="btn btn-secondary" href="#health-benefits">Read More...</a></p>
      </div>
      <div class="col-lg-4">
        <img class="rounded-circle" width=150 height=150 src="images/stjinDijkstra.jpg">
        <h2>Photos</h2>
        <p>Hiking provides lots of memories as you see more beautiful vistas the more you hike.
        </p>
        <p><a class="btn btn-secondary" href="#PhotoGallery">Read More...</a></p>
      </div>
      <div class="col-lg-4">
        <img class="rounded-circle" width=150 height=150 src="images/pikrepo.com.jpg">
        <h2>Common Items</h2>
        <p>A standard set of items that will help on any beginner's hike and are crucial to a great trip.</p>
        <p><a class="btn btn-secondary" href="#commonItems">Read More...</a></p>
      </div>
    </div>
  </div>
  <!--Jumbotron-->
  <div class="container-fluid">
    <div class="row jumbotron">
      <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
        <p class="lead">"...let go of technology and be completely in the moment"</p>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
        <a target = "_blank" href="https://www.fridayhealthplans.com/2019/04/16/hiking-is-so-good-for-you/"><button type="button" class="btn btn-outline-secondary btn-lg">More Information...</button></a>
      </div>
    </div>
  </div>
  <!--Two Column Section text on left image on right-->
  <div class="container-fluid padding" id="health-benefits">
    <div class="row padding">
      <div class="col-md-12 col-lg-6">
        <h2>Hiking brings...</h2>
        <hr class = "light-100">
        <h4>Healthy toned exercise for the enitre body</h4>
        <p>Regular walking can get your butt in better shape, but 
          taking on sharp inclines, using trekking poles to propel you forward, 
          and clambering over rocks gives your body an all-over workout.  </p>
        <h4>Increased happiness and less depression</h4>
        <p>Research shows that using hiking as an additional therapy can help 
          people with severe depression. It may even inspire those suffering to 
          lead a more active lifestyle.</p>
        <br>
        <a href="https://www.healthfitnessrevolution.com/top-10-health-benefits-hiking/" target = "_blank" class="btn-outline-secondary">Learn More</a>
      </div>
      <div class="col-lg-6">
        <img src="images/stjinDijkstra.jpg" class="img-fluid">
      </div>
    </div>
  </div>
  <!--Fixed Background-->
  <figure>
    <div class="fixed-wrap">
      <div id="fixed" style="background-image: url('images/oziel-gomez.jpg');">
      </div>
    </div>
  </figure>

  <!--PhotoGallery Lightbox Drop Down Section-->
  <div class="row welcome text-center" id = "PhotoGallery">
    <div class="col-12">
      <h2 class="display-4">Hiking Gallery</h2>
    </div>
  </div>
  <button class="accordion" id="photoGalleryButton">Click to expand</button>
  <div class="panel" id="photoGalleryPanel">
    <div class="lightbox-gallery">
      <div class="container">
        <div class="intro">
          <p class="text-center" style="position:relative; top:20px;">Click on any image to see more detail<br>
            <a href="https://www.pexels.com/search/hiking/" target = "_blank">Source</a></p>
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
  <div class="container-fluid padding" id="commonItems">
    <div class="row welcome text-center">
      <div class="col-12">
        <h2 class="display-4">Common Items</h2>
      </div>
    </div>
  </div>
  <!--cards-->
  <div class="container-fluid padding">
    <!--First Row of items-->
    <div class="row padding">
      <div class="col-md-4">
        <div class="card">
          <div class = "card-image"><img class="card-img-top" src="images/hiking-backpack.jpg"></div>
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
                <p><img style = "object-fit: cover;" src = "images/pwc-lotus.jpg">A hiking pack is similar to a regular urban backpack in size, but
                  is usually made of lighter ripstop fabric, has a frame or backboard to
                  give the pack structure and has a hip belt as well as shoulder straps to
                  take some of the weight of your shoulders. Many day packs also have a built-in
                  hydration reservoir to make drinking on the trail easier.<br>
                  <br><!--Spacing-->
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

      <div class="col-md-4">
        <div class="card">
          <div class = "card-image"><img class="card-img-top" src="images/hiking1.jpg"></div>
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
                <p><img src = "images/Hiking_shoes_Lowa.jpg">Hiking shoes are one of the most important items of 
                  hiking gear, since their quality and durability can determine a hiker's ability to walk 
                  long distances without injury. Hiking boots are constructed to provide comfort for walking 
                  considerable distance over rough terrain. Boots that protect the hiker's feet and heel are 
                  recommended. Hiking boots give ankle support and are fairly stiff.<br>
                  <br><!--Spacing-->
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

      <div class="col-md-4">
        <div class="card">
          <div class = "card-image"><img class="card-img-top"
            src="images/mountain-hiking-ride-hiking-poles-walking-sticks-cairn-pile-of-stones-mound-of-stones-landscape.jpg"></div>
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
                
                <h2 style = "width:490px;">Trekking Poles vs. Hiking Stick</h2>
                <p><img src = "images/nordic-poles-4607092_640.png">A trekking pole (also known as a hiking pole) is 
                  basically a ski pole with a handle that you use when hiking. Trekking poles are almost always used in 
                  pairs. <br><br>
                  There is also something called a hiking staff (also known as a hiking stick) that is a single 
                  pole. Most hikers go with two trekking poles over a hiking staff. I think the pair just provides 
                  more benefits. It gives great support for your knees, and helps you carry a heavier pack to hike
                  even further.<br>
                  <br><!--Spacing-->
                  <a href="https://hikingguy.com/how-to-hike/do-i-need-trekking-poles/" target="_blank" id="source">Source</a>
                  <a href="https://www.amazon.com/Best-Sellers-Sports-Outdoors-Trekking-Poles/zgbs/sporting-goods/3401281" target="_blank" id="amazonLink"><i
                      class="fab fa-amazon"></i></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Second Row of items-->
    <div class="row padding">
      <div class="col-md-4">
        <div class="card">
          <div class = "card-image"><img class="card-img-top" src="images/bottles-water-steel-glass-774466.jpg"></div>
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
                <p><img src = "images/pexels-julia-sakelli-1342529.jpg">Water bottles are very important for hiking
                  and this cannot be emphasized enough. Comfort and size can vary from model to model but 
                  it's better to have multiple for various types of hikes. For example, if you want more comfort
                  and will be hiking for longer, a <a href = "https://www.amazon.com/s?k=hydrationpack&dc&ref=a9_asc_1" target = "_blank">hydration pack</a> is 
                  a great option. 
                  <br>
                  <br>
                  Below is an article from CNET that goes over the best water bottles in 2020<br>
                  <br><!--Spacing-->
                  <br>
                  <br>
                  <a href="https://www.cnet.com/health/best-water-bottle-to-buy-for-2020/" target="_blank" id="source">Source</a>
                  <a href="https://www.amazon.com/s?k=water+bottles+hiking&ref=nb_sb_noss" target="_blank" id="amazonLink"><i
                      class="fab fa-amazon"></i></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <div class = "card-image"><img class="card-img-top" src="images/glasses-png_1291567.png" style = "object-fit: contain;"></div>
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
                
                <h2 style = "width: 450px;">Sunblock / Sun Glasses</h2>
                <p><img src = "images/Hiking_shoes_Lowa.jpg">If the sun doesn't bother my eyes, do I still need to wear sunglasses?
                  <br><br>
                  <b>Yes.</b> The sun emits damaging ultraviolet (UV) rays that can damage the eyes. 
                  And UV rays penetrate clouds, so you can get sun damage to your eyes even on overcast days.<br>
                  Making the right decision is very important in order to have the best protection, safety, and comfort.<br>
                  Sunblock <a href="https://www.amazon.com/s?k=sunscreen&ref=nb_sb_noss_1" target="_blank" id="amazonLink"><i
                    class="fab fa-amazon"></i></a>
                  <br>
                  Sunglasses <a href="https://www.amazon.com/s?k=sunglasses&ref=nb_sb_noss_1" style = "position:relative; left:43%;" target="_blank" id="amazonLink"><i
                    class="fab fa-amazon"></i></a>
                  <br>
                  <a href="https://www.allaboutvision.com/faq/sunglasses.htm" target="_blank" id="source"  style = "position:relative; top:40%" >Source</a>
                  </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <div class = "card-image"><img class="card-img-top"
            src="images/snacksThumb.jpg"></div>
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
                <p><img src = "images/snacks2.jpg">Hiking snacks are sometimes just as important as water but definitely helps
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
  <div class = "container-fluid padding">
    <div class = "row welcome text-center">
      <h3 class = "display-4">Keep in mind these questions <em>BEFORE</em> your hike</h3>
      <hr>
      <ul class = "list-group">
        <li>How much distant is this hike?</li>
        <li>What is the elevation gain?</li>
        <li>How much time will this hike take?</li>
        <li>Is this hike going to be difficult?</li>
      </ul>
    </div>
  </div>


  <!--Fixed Background2-->
  <figure>
    <div class="fixed-wrap">
      <div id="fixed" style="background-image: url('images/pexels-ibadah-mimpi-3230857.jpg');">
      </div>
    </div>
  </figure>



  <!--DropDown Facts-->
  <div class="container-fluid padding">
    <div class="row welcome text-center">
      <div class="col-12">
        <h2 class="display-4">More Facts About Hiking</h2>
      </div>
    </div>
    <button class="accordion">Section 1</button>
    <div class="panel">
      <p>Lorem ipsum...</p>
    </div>

    <button class="accordion">Section 2</button>
    <div class="panel">
      <p>Lorem ipsum...</p>
    </div>

    <button class="accordion">Section 3</button>
    <div class="panel">
      <p>Lorem ipsum...</p>
    </div>

    <button class="accordion">Section 4</button>
    <div class="panel">
      <p>Lorem ipsum...</p>
    </div>
  </div>

  <div class = "container-fluid padding">
    
  </div>
  <hr class="my-4">
  <!--Two Column Section text on right, img on left-->
  <div class="container-fluid padding" style="padding-top:60px;">
    <div class="row padding">
      <div class="col-lg-6">
        <img src="images/logo.jpg" class="img-fluid">
      </div>
      <div class="col-md-12 col-lg-6">
        <h2 style = "text-align: center;" >Hiking philosphy</h2>
        <hr class = "light">
        <ul>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
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
        <a href="https://www.facebook.com/sharer.php?u=https://hikingsite.herokuapp.com/"><i class="fab fa-facebook"></i></a>
        <a href="https://twitter.com/intent/tweet?url=https://hikingsite.herokuapp.com/&text=Check%20out%20this%20Hiking%20Informational&via="><i class="fab fa-twitter"></i></a>
        <a href="https://www.linkedin.com/shareArticle?url=https://hikingsite.herokuapp.com/&title=Check%20out%20this%20Hiking%20Informational"><i class="fab fa-linkedin"></i></a>
        <a href="mailto:%7Bemail_address%7D?subject=Check%20out%20this%20Hiking%20Informational&body=https://hikingsite.herokuapp.com/%20It's%20an%20interesting%20site%20with%20lots%20of%20information%20to%20create%20"><i class="far fa-envelope"></i></a>
      </div>
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

      <!--BACK TO TOP BTN-->
    <a id="back-top" href="#"><i class="fa fa-chevron-up"></i></a>



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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
  <!--LIGHTBOX JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

  <script src="JS/index.js"></script>
</body>

</html>