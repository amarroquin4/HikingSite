window.onload = function () {
  // Get the modal
  var backpackModal = document.getElementById("backpackModal");
  var shoesModal = document.getElementById("shoesModal");
  var sticksModal = document.getElementById("sticksModal");
  var waterModal = document.getElementById("waterModal");
  var sunModal = document.getElementById("sunModal");
  var snackModal = document.getElementById("snackModal");

  // Get the button that opens the modal
  var backpackBtn = document.getElementById("backpackBtn");
  var shoesBtn = document.getElementById("shoesBtn");
  var sticksBtn = document.getElementById("sticksBtn");
  var waterBtn = document.getElementById("waterBtn");
  var sunBtn = document.getElementById("sunBtn");
  var snackBtn = document.getElementById("snackBtn");

  // Get the <span> element that closes the modal
  var backpackClose = document.getElementsByClassName("close")[0];
  var shoesClose = document.getElementsByClassName("close")[1];
  var stickClose = document.getElementsByClassName("close")[2];
  var waterClose = document.getElementsByClassName("close")[3];
  var sunClose = document.getElementsByClassName("close")[4];
  var snackClose = document.getElementsByClassName("close")[5];

  // When the user clicks on <span> (x), close the modal
  backpackClose.onclick = function () {
    backpackModal.style.display = "none";
  };

  shoesClose.onclick = function () {
    shoesModal.style.display = "none";
  };

  stickClose.onclick = function () {
    sticksModal.style.display = "none";
  };

  waterClose.onclick = function () {
    waterModal.style.display = "none";
  };

  sunClose.onclick = function () {
    sunModal.style.display = "none";
  };

  snackClose.onclick = function () {
    snackModal.style.display = "none";
  };

  // When the user clicks the button, open the modal
  backpackBtn.onclick = function () {
    backpackModal.style.display = "block";
  };

  shoesBtn.onclick = function () {
    shoesModal.style.display = "block";
  };

  sticksBtn.onclick = function () {
    sticksModal.style.display = "block";
  };

  waterBtn.onclick = function () {
    waterModal.style.display = "block";
  };

  sunBtn.onclick = function () {
    sunModal.style.display = "block";
  };

  snackBtn.onclick = function () {
    snackModal.style.display = "block";
  };

  //Button function for an accordion
  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      }
    });
  }

  // hide #back-top first
  $("#back-top").hide();

  // fade in #back-top
  $(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 500) {
        $("#back-top").fadeIn();
      } else {
        $("#back-top").fadeOut();
      }
    });

    // scroll body to 0px on click
    $("#back-top").click(function () {
      $("body,html").animate(
        {
          scrollTop: 0,
        },
        800
      );
      return false;
    });
  });
};
