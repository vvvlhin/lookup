let counter = JSON.parse(window.localStorage.getItem("counter")),
  cart = [];
cart = JSON.parse(window.localStorage.getItem("cart"));
// cart = localStorage.getItem("cart");

let log = console.log,
  counterVal = 0;

// Анимации для выбора веса

let item = document.querySelectorAll(".item"),
  cost;
for (items of item) {
  items.addEventListener("click", function () {
    cost = this.getAttribute("data-id");
    let weight = this.closest(".weight"),
      properties = weight.closest(".properties");
    weight.querySelectorAll(".item").forEach((el) => {
      el.classList.remove("border-checked");
      this.classList.add("border-checked");
    });
    properties.querySelectorAll(".cost_value").forEach((e) => {
      e.innerText = cost + "₽";
    });
  });
}

// Счётчик

function addHandlers(count) {
  var minus = count.querySelector(".minus");
  var number = count.querySelector(".text-value");
  var plus = count.querySelector(".plus");
  plus.addEventListener("click", function () {
    number.innerText++;
  });
  minus.addEventListener("click", function () {
    if (number.innerText == 0) {
      return;
    }
    number.innerText--;
  });
}

let counts = document.querySelectorAll(".counter_block");
counts.forEach(addHandlers);

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

// отправка товара в корзину

document.querySelectorAll('.cart-counter-value').forEach(e => {
  e.innerText = counter;
});

let btns = document.querySelectorAll(".button_block"),
  costArr = [];
for (btn of btns) {
  btn.addEventListener("click", function () {
    counter++;
    document.querySelectorAll('.cart-counter-value').forEach(e => {
      e.innerText = counter;
    });
    window.localStorage.setItem("counter", JSON.stringify(counter));
    let block = this.closest(".container"),
      card = block.closest(".goods-list-item"),
      weightBlock = card.querySelector(".weight");
    weightBlock.querySelectorAll(".item").forEach(i => {
      costArr.push(i.getAttribute("data-id"));
    })
    let cartItem = {
      code_tovara: card.getAttribute("data-code"),
      weight: card.querySelector(".weight").querySelector(".border-checked")
        .innerText,
      quantity: block.querySelector(".text-value").innerText,
      costCart: card.querySelector(".cost").innerText.slice(0, -1),
      img: card.querySelector("#milk_blend_img").src,
      name: card.querySelector(".properties-name").innerText,
      weightBlock: card.querySelector(".weight").innerHTML,
      costArr: costArr,
    };
    cart.push(cartItem);
    window.localStorage.setItem("cart", JSON.stringify(cart));
    log(typeof (cart));
  });
}

$("#form").on("submit", function () {
  $.ajax({
    url: 'private_tmp.php',
    method: 'post',
    dataType: 'html',
    data: $(this).serialize(),
    success: function (data) {
      log(data);
      document.querySelector('.alert-success').style.display = "block";
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
      window.location.replace("/")
    }
  });
}