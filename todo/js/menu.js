$(document).ready(function () {
    $(".menu-links li a").click(function (e) {
      $(".menu-links li.active").removeClass("active");
      var $parent = $(this).parent();
      $parent.addClass("active");
    });
    $(".hamburger-icon").click(function () {
      $(".menu-links").toggleClass("left");
    });
    $(".hamburger-icon").click(function () {
      $(this).toggleClass("ham-style");
    });
    const themeSwitch = document.querySelector("#checkbox");
    themeSwitch.addEventListener("change", () => {
      document.body.classList.toggle("dark-theme");
    });
  });

  document.addEventListener('DOMContentLoaded', function () {
    const menu = document.querySelector('.menu-links');
    const toggleBtn = document.querySelector('.hamburger-icon');
  
    toggleBtn.addEventListener('click', () => {
      menu.classList.toggle('active');
    });
  });
  