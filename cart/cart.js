var log = console.log;
var cart = JSON.parse(window.localStorage.getItem("cart")),
  counter = JSON.parse(window.localStorage.getItem("counter"));

document.querySelectorAll('.cart_counter').forEach(e => {
  e.innerText = counter;
})

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

//Получение данных в корзине

let cardItem = '';

var mainCart = document.querySelector('.tbody'), totalAll = 0;
cart.forEach((menu) => {
  total = menu.costCart * menu.quantity;
  totalAll += total;
  cardItem += `
  <tr class="basket-items-list-item-container" data-key="${menu.code_tovara}">
                <td class="basket-items-list-item-descriptions">
                    <div class="basket-items-list-item-descriptions-inner">
                        <div class="basket-item-block-image">
                             <img src="${menu.img}">
                        </div>
                        <div class="basket-item-block-info">
                            <h2 class="basket-item-info-name">${menu.name} (<span id="w">${menu.weight}</span>, без помола)</h2>
                            <div class="basket-item-property-custom">
                                <div class="basket-item-property-custom-name">Вес упаковки</div>
                            </div>
                            <div class="weight-check">
                            `

    + menu.weightBlock + `
                        </div>
                        </div>
                    </div>
                </td>
                <td class="basket-items-list-item-price">
                    <div class="basket-item-block-price">
                        <div class="basket-item-price-current">
                            ${menu.costCart}₽
                        </div>
                        <div class="basket-item-price-title">
                            цена за 1 шт
                        </div>
                    </div>
                </td>
                <td class="basket-items-list-item-amount">
                    <div class="container">
                        <div class="container-flex">
                            <div class="counter_block">
                                <span data-name="minus-btn<?= $product['id'] ?>" onclick="addHandlers()" class="minus">
                                    <h3>-</h3>
                                </span>
                                <span class="text">
                                    <h3 data-text="<?= $product['id'] ?>" class="text-value">${menu.quantity}</h3>
                                </span>
                                <span data-name="plus-btn<?= $product['id'] ?>" onclick="addHandlers()" class="plus">
                                    <h3>+</h3>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="basket-item-amount-field-description">
                        шт
                    </div>
                </td>
                <td class="basket-items-list-item-price-total">
                    ${total}₽
                </td>
                <td class="basket-items-list-item-delete">
                    <div class="basket-items-list-item-delete-hover">
                    <div id="mdiv">
                    <div class="mdiv">
                        <div class="md"></div>
                    </div>
                </div>
                </div>
                </div>
                    </div>
                </td>
                          </tr>
  `

})
document.querySelector(".basket-coupon-block-total-price-old").innerText = totalAll + "₽";
mainCart.insertAdjacentHTML('afterbegin', cardItem);


//счётчик

function addHandlers(count) {
  totalAll = 0;
  var minus = count.querySelector(".minus");
  var number = count.querySelector(".text-value");
  var plus = count.querySelector(".plus");
  plus.addEventListener("click", function () {
    number.innerText++;
    let
      basketContainer = this.closest('.counter_block').closest('.container-flex').closest('.container').closest('.basket-items-list-item-amount').closest('.basket-items-list-item-container'),
      basketPrice = basketContainer.querySelector('.basket-item-price-current'),
      basketInfo = basketContainer.querySelector('.basket-item-block-info'),
      basketName = basketInfo.querySelector("#w"),
      basketTotalPrice = basketContainer.querySelector(".basket-items-list-item-price-total"),
      counter = basketContainer.querySelector(".text-value");
    basketTotalPrice.innerText = Number(basketPrice.innerText.slice(0, -1)) * Number(number.innerText) + "₽";
    document.querySelectorAll(".basket-items-list-item-price-total").forEach(all => {
      totalAll += Number(all.innerText.slice(0, -1))
      document.querySelector(".basket-coupon-block-total-price-old").innerText = totalAll + "₽";
    })
  });
  minus.addEventListener("click", function () {
    if (number.innerText == 0) {
      return;
    }
    number.innerText--;
    let
      basketContainer = this.closest('.counter_block').closest('.container-flex').closest('.container').closest('.basket-items-list-item-amount').closest('.basket-items-list-item-container'),
      basketPrice = basketContainer.querySelector('.basket-item-price-current'),
      basketInfo = basketContainer.querySelector('.basket-item-block-info'),
      basketName = basketInfo.querySelector("#w"),
      basketTotalPrice = basketContainer.querySelector(".basket-items-list-item-price-total"),
      counter = basketContainer.querySelector(".text-value");
    basketTotalPrice.innerText = Number(basketPrice.innerText.slice(0, -1)) * Number(number.innerText) + "₽";
    document.querySelectorAll(".basket-items-list-item-price-total").forEach(all => {
      totalAll -= Number(all.innerText.slice(0, -1))
      document.querySelector(".basket-coupon-block-total-price-old").innerText = Math.abs(totalAll) + "₽";
    })
  });
}

var counts = document.querySelectorAll(".counter_block");
counts.forEach(addHandlers);

// анимации веса

let item = document.querySelectorAll(".item"),
  cost;
for (items of item) {
  items.addEventListener("click", function () {
    totalAll = 0;
    cost = this.getAttribute("data-id");
    let weight = this.closest(".weight-check"),
      basketInfo = weight.closest(".basket-item-block-info"),
      basketContainer = weight.closest('.basket-items-list-item-descriptions').closest('.basket-items-list-item-container'),
      basketPrice = basketContainer.querySelector('.basket-item-price-current'),
      basketName = basketInfo.querySelector("#w"),
      basketTotalPrice = basketContainer.querySelector(".basket-items-list-item-price-total"),
      counter = basketContainer.querySelector(".text-value"),
      properties = weight.closest(".properties");
    weight.querySelectorAll(".item").forEach((el) => {
      el.classList.remove("border-checked");
      this.classList.add("border-checked");
      basketName.innerText = this.innerText;
      if (basketName.innerText == '250 гр') {
        basketPrice.innerText = this.getAttribute("data-id") + "₽";
        basketTotalPrice.innerText = this.getAttribute("data-id") * Number(counter.innerText) + "₽";
      }
      if (basketName.innerText == '500 гр') {
        basketPrice.innerText = this.getAttribute("data-id") + "₽";
        basketTotalPrice.innerText = this.getAttribute("data-id") * Number(counter.innerText) + "₽";
      }
      if (basketName.innerText == '1000 гр') {
        basketPrice.innerText = this.getAttribute("data-id") + "₽";
        basketTotalPrice.innerText = this.getAttribute("data-id") * Number(counter.innerText) + "₽";
      }
    });
    document.querySelectorAll(".basket-items-list-item-price-total").forEach(all => {
      totalAll += Number(all.innerText.slice(0, -1))
      // log(totalAll)
    })
    document.querySelector(".basket-coupon-block-total-price-old").innerText = totalAll + "₽";
    properties.querySelectorAll(".cost_value").forEach((e) => {
      e.innerText = cost + "₽";
    });
  });
}


// удаление товара из корзины

let del = document.querySelectorAll(".basket-items-list-item-delete-hover");

for (dels of del) {
  dels.addEventListener("click", function () {
    totalAll = 0;
    basketContainer = this.closest(".basket-items-list-item-delete").closest(".basket-items-list-item-container");
    basketTotalPrice = basketContainer.querySelector('.basket-items-list-item-price-total');
    basketContainer.remove();
    document.querySelectorAll(".basket-items-list-item-price-total").forEach(all => {
      totalAll += Number(all.innerText.slice(0, -1))
      log(totalAll)
    })
    document.querySelector(".basket-coupon-block-total-price-old").innerText = totalAll + "₽";
    // log(basketContainer.getAttribute("data-key"))
    cart = cart.filter(num => num.code_tovara !== basketContainer.getAttribute("data-key"));
    log(cart)
    window.localStorage.setItem("cart", JSON.stringify(cart));
    document.querySelectorAll('.cart_counter').forEach(e => {
      e.innerText--;
    })
    counter--;
    window.localStorage.setItem("counter", JSON.stringify(counter));
  })
}


let allPrice = document.querySelector('.basket-coupon-block-total-price-old').innerText;

window.localStorage.setItem("allPrice", JSON.stringify(allPrice));

// отчистка корзины

function deleteCart() {
  cart = [], counter = 0;
  window.localStorage.setItem("cart", JSON.stringify(cart));
  window.localStorage.setItem("counter", JSON.stringify(counter));
  location.reload(); return false;
}

