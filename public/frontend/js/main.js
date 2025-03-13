!(function (e) {
  "use strict";
  e("[data-bg-image]").each(function () {
    var t = e(this),
      a = t.data("bg-image");
    t.css("background-image", "url(" + a + ")");
  }),
    setTimeout(function e() {
      document.querySelectorAll(".bar").forEach(function (e) {
        let t = 0,
          a = e.dataset.size,
          s = setInterval(function o() {
            t >= a
              ? clearInterval(s)
              : (t++,
                (e.style.width = `${a}%`),
                (e.firstElementChild.innerText = `${t}%`));
          }, 20);
      });
    }, 1e3),
    e(window).on("load", function () {
      let t = e(".preloader");
      t.delay(500).fadeOut();
    }),
    e(".preloader .tj-primary-btn").on("click", function () {
      e(".preloader").fadeOut();
    }),
    e(window).on("scroll", function () {
      100 > e(window).scrollTop()
        ? e("#header-sticky").removeClass("header-sticky")
        : e("#header-sticky").addClass("header-sticky");
    }),
    e("#main-menu").meanmenu({
      meanMenuContainer: "#mobile-navbar-menu",
      meanScreenWidth: "991",
      meanExpand: ["<i class='fa-light fa-plus'></i>"],
    }),
    e(".search-btn").on("click", function () {
      e(".search_popup").addClass("search-opened"),
        e(".search-popup-overlay").addClass("search-popup-overlay-open");
    }),
    e(".search_close_btn").on("click", function () {
      e(".search_popup").removeClass("search-opened"),
        e(".search-popup-overlay").removeClass("search-popup-overlay-open");
    }),
    e(".search-popup-overlay").on("click", function () {
      e(".search_popup").removeClass("search-opened"),
        e(this).removeClass("search-popup-overlay-open");
    }),
    e(".canva_expander").length &&
      e(".canva_expander, #canva_close, #tj-overlay-bg2").on(
        "click",
        function (t) {
          t.preventDefault(), e("body").toggleClass("canvas_expanded");
        }
      ),
    e(".languages .activated").html(e(".lang_lists > li.active a").html()),
    e(".lang_lists > li a").on("click", function () {
      e(".languages .activated").html(e(this).html()),
        e(".lang_lists > li").removeClass("active"),
        e(".lang_lists > li").addClass("active");
    }),
    e(".languages").on("click", function () {
      e(".lang_lists").slideToggle(), e(this).toggleClass("open");
    }),
    // new Swiper(".sc-slider-1", {
    //   speed: 1e3,
    //   effect: "fade",
    //   loop: !0,
    //   autoplay: { delay: 2e3, disableOnInteraction: !1 },
    //   pagination: { el: ".swiper-pagination", clickable: !0 },
    //   lazy: { loadPrevNext: !0, loadOnTransitionStart: !0 },
    //   preloadImages: !1,
    //   watchSlidesProgress: !0,
    //   grabCursor: !0,
    // });
    new Swiper(".sc-slider-1", {
        speed: 1000,  
        effect: "fade",
        loop: true,
        autoplay: { delay: 2000, disableOnInteraction: false },
        pagination: { el: ".swiper-pagination", clickable: true },
        lazy: { loadPrevNext: true, loadOnTransitionStart: true },
        preloadImages: false,
        watchSlidesProgress: true,
        grabCursor: true,
        cssMode: true, 
    });
  var t = new Swiper(".thumb-slider", {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: !0,
    watchSlidesProgress: !0,
  });
  new Swiper(".thumb-slider2", {
    spaceBetween: 10,
    allowTouchMove: !1,
    thumbs: { swiper: t },
    lazy: { loadPrevNext: !0 },
    loop: !0,
  }),
    new Swiper(".tj-testimonial-slider", {
      slidesPerView: 3,
      spaceBetween: 30,
      autoplay: { delay: 5e3 },
      loop: !0,
      lazy: { loadPrevNext: !0 },
      breakpoints: {
        320: { slidesPerView: 1 },
        480: { slidesPerView: 2 },
        640: { slidesPerView: 2 },
        768: { slidesPerView: 3 },
        991: { slidesPerView: 3 },
        1024: { slidesPerView: 3 },
        1280: { slidesPerView: 3 },
      },
    }),
    new Swiper(".tj-testimonial-slider2", {
      slidesPerView: 3,
      spaceBetween: 30,
      autoplay: { delay: 5e3 },
      lazy: { loadPrevNext: !0 },
      pagination: { el: ".swiper-pagination", clickable: !0 },
      loop: !0,
      breakpoints: {
        320: { slidesPerView: 1 },
        640: { slidesPerView: 1 },
        768: { slidesPerView: 2 },
        992: { slidesPerView: 3 },
        1024: { slidesPerView: 3 },
      },
    }),
    e(".tj-project-slider").owlCarousel({
      items: 1,
      nav: !1,
      thumbs: !1,
      loop: !0,
      margin: 20,
      autoplayTimeout: 5e3,
      autoplay: !0,
      dots: !0,
      lazy: { loadPrevNext: !0 },
      responsive: {
        0: { items: 1 },
        480: { items: 1 },
        576: { items: 2 },
        767: { items: 2 },
        1080: { items: 3 },
        1200: { items: 3 },
        1500: { items: 4 },
      },
    }),
    e(".popup-videos-button").length &&
      e(".popup-videos-button").magnificPopup({
        disableOn: 10,
        type: "iframe",
        mainClass: "mfp-fade",
        removalDelay: 160,
        preloader: !1,
        fixedContentPos: !1,
      }),
    e(window).on("load resize", function () {
      e(".grid").imagesLoaded(function () {
        e(".grid").isotope({
          layoutMode: "fitRows",
          itemSelector: ".grid-item",
          percentPosition: !0,
          fitRows: { gutter: ".gutter-sizer" },
        });
      });
    }),
    e("select").niceSelect(),
    sal({ threshold: 0.1, once: !0 }),
    e(".odometer").appear(function () {
      e(".odometer").each(function () {
        var t = e(this).attr("data-count");
        e(this).html(t);
      });
    });
  var a = e(document),
    s = e('input[type="range"]');
  function o(e) {
    var t = e.value;
    e.parentNode.getElementsByTagName("output")[0].innerHTML = t;
  }
  for (var l = s.length - 1; l >= 0; l--) o(s[l]);
  a.on("input", 'input[type="range"]', function (e) {
    o(e.target);
  });
  var i = document.querySelector(".logiland-scroll-top");
  if (null != i) {
    var n = document.querySelector(".logiland-scroll-top path"),
      r = n.getTotalLength();
    (n.style.transition = n.style.WebkitTransition = "none"),
      (n.style.strokeDasharray = r + " " + r),
      (n.style.strokeDashoffset = r),
      n.getBoundingClientRect(),
      (n.style.transition = n.style.WebkitTransition =
        "stroke-dashoffset 10ms linear"),
      window.addEventListener("scroll", function (e) {
        var t = document.body.scrollTop || document.documentElement.scrollTop,
          a =
            document.documentElement.scrollHeight -
            document.documentElement.clientHeight;
        (n.style.strokeDashoffset = r - (t * r) / a),
          (document.body.scrollTop || document.documentElement.scrollTop) >= 50
            ? i.classList.add("progress-done")
            : i.classList.remove("progress-done");
      }),
      i.addEventListener("click", function (e) {
        e.preventDefault(),
          window.scroll({ top: 0, left: 0, behavior: "smooth" });
      });
  }
})(jQuery);
