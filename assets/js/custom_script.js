jQuery(document).ready(function ($) {
  //latest_updates_section
  $(".updates_tabs li:first").find("a").addClass("active");
  $(".updates_tab_content").hide();
  $(".updates_tab_content:first").show();
  // Click function
  $(".updates_tabs li").click(function () {
    $(".updates_tabs li a").removeClass("active");
    $(this).find("a").addClass("active");
    $(".updates_tab_content").hide();

    var activeTab = $(this).find("a").attr("href");
    $(activeTab).fadeIn();
    return false;
  });

  //faq_accordion_section
  //toggle aria-attribute and style state open
    $(".accordion_btn").click(function (e) {
    e.currentTarget.classList.toggle("open");
    $(this).attr("aria-expanded", function (index, attr) {
      return attr == "true" ? "false" : "true";
    });
  });

  //Blog Sidebar Categories
  $(".blog_sidebar ul").prepend(
    '<li class="most-recent"><a href="/Boozang/blog">Most Recent</a></li>'
  );
  // $(window).on("load", function () {
  var path = window.location.pathname;
  if (path.indexOf("blog") >= 0) {
    $(".most-recent").addClass("current-misse");
  }
  // });
  //Menu Desktop
  //toggle class
  $("nav ul li.menu-item-has-children").click(function (event) {
    event.stopPropagation(); // to stop the 'document handler' from activating
    $(this).toggleClass("is_open");
    $(this)
      .children("a")
      .attr("aria-expanded", function (index, attr) {
        return attr == "true" ? "false" : "true";
      });

    $(this).children("ul").toggleClass("sub-menu-open");
  });
  //Remove class clicking anywhere on page
  $(document).click(function (event) {
    if (
      !$(event.target).closest("nav ul li.menu-item-has-children ul").length
    ) {
      $("nav ul li.menu-item-has-children ul").removeClass("sub-menu-open");
    }
  });

  //Mobile menu
  //toggle classes and attributes
  $(".menu_toggle_btn").click(function () {
    $(this).toggleClass("btn_clicked");
    let expanded = $(this).attr("aria-expanded") === "true";
    $(this).attr("aria-expanded", !expanded);
    $(".nav-mobile").toggleClass("menu_open");
    $("body").toggleClass("no_scroll");
  });
  $(".nav-mobile ul li.menu-item-has-children").click(function (event) {
    event.stopPropagation();
    $(this).toggleClass("is_open");
    let subExpanded = $(this).children("a").attr("aria-expanded") === "true";
    $(this).children("a").attr("aria-expanded", !subExpanded);
    $(this).children("ul").toggleClass("sub-menu-open");
  });

  //Review badges
  $(window).on("load", function () {
    var sc = document.createElement("script");
    sc.async = true;
    sc.src = "https://b.sf-syn.com/badge_js?sf_id=2969897&variant_id=sf";
    var p = document.getElementsByTagName("script")[0];
    p.parentNode.insertBefore(sc, p);

    var sc = document.createElement("script");
    sc.async = true;
    sc.src = "https://b.sf-syn.com/badge_js?sf_id=2969897&variant_id=sd";
    var p = document.getElementsByTagName("script")[0];
    p.parentNode.insertBefore(sc, p);

    var sc = document.createElement("script");
    sc.async = true;
    sc.src = "https://b.sf-syn.com/badge_js?sf_id=2969897&variant_id=tbs";
    var p = document.getElementsByTagName("script")[0];
    p.parentNode.insertBefore(sc, p);
  });

  //feature slider
  // var rand = Math.floor(Math.random() * 3 + 1);
  // //set active class on rand
  // $(".tab_content:nth-child(" + rand + ")").addClass("active");
  // $(".tab_link:nth-child(" + rand + ")").addClass("active");
  // $(".tab_link").click(function () {
  //   //value of data_tab-attribute
  //   var tab_id = $(this).attr("data_tab");

  //   //Toggle tab link
  //   // $(this).addClass("active").siblings().removeClass("active");
  //   $(".tab_link").attr("aria-selected", "false"); //deselect all the tabs
  //   $(this).attr("aria-selected", "true"); // select this tab

  //   //Toggle target tab
  //   $("img[role='tabpanel']").attr("aria-hidden", "true"); //hide all the img panels
  //   $("div[role='tabpanel']").attr("aria-hidden", "true"); //hide all the video panels

  //   $("#" + tab_id).attr("aria-hidden", "false"); // show our panel
  // });

  //enlarge image in two_columns_block
  // $(".part.image .pict").click(function () {
  //   // console.log("this", this);
  //   $(this).toggleClass("enlarge");
  // });
  // //Remove class clicking anywhere on page
  // $(document).click(function (event) {
  //   if (!$(event.target).closest(".part.image .pict").length) {
  //     $(".part.image .pict").removeClass("enlarge");
  //   }
  // });

  //enlarge image blog
  // $(".post_text figure img").click(function () {
  //   $(this).toggleClass("enlarge");
  // });
  // $(document).click(function (event) {
  //   if (!$(event.target).closest(".post_text figure img").length) {
  //     $(".post_text figure img").removeClass("enlarge");
  //   }
  // });
});
