var log = console.log;
var cart = JSON.parse(window.localStorage.getItem("cart")),
  counter = JSON.parse(window.localStorage.getItem("counter")),
  allPrice = JSON.parse(window.localStorage.getItem("allPrice")),
  time = JSON.parse(window.localStorage.getItem("time"));


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

//reg

document.querySelectorAll('#acc').forEach(tmp => {
  tmp.addEventListener("click", () => {
    document.querySelector('.blur').style = "filter: blur(5px);";
    document.querySelector('.main').style.display = "block";
  })
})

function closed() {
  document.querySelector('.blur').style = "filter: none;";
  document.querySelector('.main').style.display = "none";
}

$("#form").on("submit", function () {
  $.ajax({
    url: '../login/login.php',
    method: 'post',
    dataType: 'html',
    data: $(this).serialize(),
    success: function (data) {
      if (data == 1) {
        location.reload();
      } else {
        $('#message').html(data);
      }
    }
  });
  return false;
});

let exit = () => {
  $.ajax({
    url: '../login/logout.php',
    method: 'post',
    dataType: 'html',
    data: $(this).serialize(),
    success: function (data) {
      console.log(data);
    }
  });
}