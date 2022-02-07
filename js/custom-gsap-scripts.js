// wait until DOM is ready
document.addEventListener("DOMContentLoaded", function (event) {
  console.log("DOM loaded");

  // wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener(
    "load",
    function (e) {
      // custom GSAP code goes here
      var tl = gsap.timeline({});
      //add 3 tweens that will play in direct succession.
      tl.fromTo(".menu-item-47", { x: -200 }, { opacity: 1, x: 0 });
      tl.fromTo(".menu-item-45", { x: -200 }, { opacity: 1, x: 0 });
      tl.fromTo(".menu-item-44", { x: -200 }, { opacity: 1, x: 0 });
      tl.fromTo(".menu-item-46", { x: -200 }, { opacity: 1, x: 0 });
      tl.duration(2).play();
    },
    false
  );
});
