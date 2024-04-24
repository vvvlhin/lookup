var log = console.log;
var cart = JSON.parse(window.localStorage.getItem("cart")),
  counter = JSON.parse(window.localStorage.getItem("counter")),
  allPrice = JSON.parse(window.localStorage.getItem("allPrice")),
  time = JSON.parse(window.localStorage.getItem("time"));

cart = [], counter = 0;
window.localStorage.setItem("cart", JSON.stringify(cart));
window.localStorage.setItem("counter", JSON.stringify(counter));

// фиксированное навигационное меню
let wrapper = document.getElementById("wrapper").classList,
  logoScroll = document.getElementById("logo").classList;

window.addEventListener("scroll", (e) => {
  // log(scrollY);
  if (scrollY > 200) {
    wrapper.add("scrolled");
    logoScroll.add("logo-scroll");
  } else {
    wrapper.remove("scrolled");
    logoScroll.remove("logo-scroll");
  }
});



