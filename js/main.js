//Show more sidebar button
jQuery(document).ready(function () {
  const loadmore = document.querySelector("#loadmore");
  let currentItems = 4;
  loadmore.addEventListener("click", (e) => {
    const elementList = [
      ...document.querySelectorAll(".topics-list .cat-item"),
    ];
    for (let i = currentItems; i < currentItems + 4; i++) {
      if (elementList[i]) {
        elementList[i].style.display = "flex";
      }
    }
    currentItems += 4;

    // Load more button will be hidden after list fully loaded
    if (currentItems >= elementList.length) {
      event.target.style.display = "none";
      document.getElementById("loadmore").classList.toggle("d-block");
    }
  });
});

//Bootstrap caroulsel
jQuery(document).ready(function () {
  // Carousel
  jQuery(".carousel").carousel({
    interval: false,
    pause: true,
  });

  jQuery(".carousel .carousel-inner").swipe({
    swipeLeft: function (event, direction, distance, duration, fingerCount) {
      this.parent().carousel("next");
    },
    swipeRight: function () {
      this.parent().carousel("prev");
    },
    threshold: 0,
    tap: function (event, target) {
      window.location = $(this).find(".carousel-item.active a").attr("href");
    },
    excludedElements: "label, button, input, select, textarea, .noSwipe",
  });

  jQuery(".carousel .carousel-inner").on("dragstart", "a", function () {
    return false;
  });
});

//Top button
jQuery(document).ready(function () {
  var offset = 220;
  var duration = 500;
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > offset) {
      jQuery(".top").fadeIn(duration);
    } else {
      jQuery(".top").fadeOut(duration);
    }
  });
  jQuery(".top").click(function (event) {
    event.preventDefault();
    jQuery("html, body").animate({ scrollTop: 0 }, duration);
    return false;
  });
});
