'use strict';



/**
 * add event on element
 */

const addEventOnElem = function (elem, type, callback) {
  if (elem.length > 1) {
    for (let i = 0; i < elem.length; i++) {
      elem[i].addEventListener(type, callback);
    }
  } else {
    elem.addEventListener(type, callback);
  }
}



/**
 * navbar toggle
 */

const navbar = document.querySelector("[data-navbar]");
const navTogglers = document.querySelectorAll("[data-nav-toggler]");
const overlay = document.querySelector("[data-overlay]");

const toggleNavbar = function () {
  navbar.classList.toggle("active");
  overlay.classList.toggle("active");
  document.body.classList.toggle("active");
}

addEventOnElem(navTogglers, "click", toggleNavbar);



/**
 * active header when window scroll down to 100px
 */

const header = document.querySelector("[data-header]");

const activeElemOnScroll = function () {
  if (window.scrollY > 100) {
    header.classList.add("active");
  } else {
    header.classList.remove("active");
  }
}

window.addEventListener("scroll", activeElemOnScroll);



// Loading Screen and Fade-in Animation
document.addEventListener('DOMContentLoaded', function() {
  const loadingScreen = document.querySelector('.loading-screen');
  const video = document.querySelector('.video-background video');
  const heroContent = document.querySelector('.hero-content');

  // Hide loading screen when video is loaded
  video.addEventListener('loadeddata', function() {
    setTimeout(() => {
      loadingScreen.classList.add('fade-out');
      // Show hero content after 3 seconds
      setTimeout(() => {
        heroContent.classList.add('visible');
      }, 3000);
    }, 500); // Small delay before hiding loading screen
  });
});

// Add dropdown functionality for mobile
const dropdownItems = document.querySelectorAll('.has-dropdown');

dropdownItems.forEach(item => {
  item.addEventListener('click', function(e) {
    if (window.innerWidth <= 991) {
      e.preventDefault();
      this.classList.toggle('active');
    }
  });
});