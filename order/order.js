var log = console.log;
var cart = JSON.parse(window.localStorage.getItem("cart")),
  counter = JSON.parse(window.localStorage.getItem("counter")),
  allPrice = JSON.parse(window.localStorage.getItem("allPrice"));


document.querySelectorAll('.cart_counter').forEach(e => {
  e.innerText = counter;
})


//сдэк
var widjet = new ISDEKWidjet({
  hideMessages: false,
  defaultCity: 'auto',
  cityFrom: 'Омск',
  choose: true,
  link: false,
  detailAddress: true,
  popup: true,
  hidedelt: true,
  onReady: onReady,
  onChoose: onChoose,
  onChooseProfile: onChooseProfile,
  onCalculate: onCalculate
});

function onReady() {
  console.log('ready');
  ipjq('#linkForWidjet').css('display', 'inline');
}

function onChoose(wat) {
  console.log('chosen', wat);
  serviceMess(
    'Выбран пункт выдачи заказа ' + wat.id + "\n<br/>" +
    'цена ' + wat.price + "\n<br/>" +
    'срок ' + wat.term + " дн.\n<br/>" +
    'город ' + wat.cityName + ' (код: ' + wat.city + ')'
  );
  document.querySelector('input[name="address"').value = wat.cityName + ", " + wat.PVZ.Address + ". (Код: " + wat.city + ")";
  // log(document.querySelector('input[name="address"'))
  document.querySelector('.description154').innerText = wat.price.slice(0, -3) + "₽"
  document.querySelector('.ur-order-cost-ship-value').innerText = wat.price.slice(0, -3) + "₽"
  shipPriceAll.innerText = '';
  shipPriceAll.innerText = Number(allPrice.slice(0, -1)) + Number(wat.price.slice(0, -3)) + "₽";
  document.querySelector('.description154').style.display = 'block';
  document.querySelector('.time').style.display = 'block';
  window.localStorage.setItem("time", JSON.stringify(document.querySelector('.time').innerText));
  if (wat.term >= 2) {
    document.querySelector('.time').innerText = wat.term + " дня"
    log(document.querySelector('.time').innerText);
  } else {
    document.querySelector('.time').innerText = wat.term + " дней"

  }
}

function onChooseProfile(wat) {
  console.log('chosenCourier', wat);
  serviceMess(
    'Выбрана доставка курьером в город ' + wat.city + "\n<br/>" +
    'цена ' + wat.price + "\n<br/>" +
    'срок ' + wat.term + ' дн.',
  );

  log(wat.Address)
}

window.servmTimeout = false;
serviceMess = function (text) {
  clearTimeout(window.servmTimeout);
  ipjq('#service_message').show().html(text);
  window.servmTimeout = setTimeout(function () {
    ipjq('#service_message').fadeOut(1000);
  }, 4000);
}

function onCalculate(wat) {
  console.log('calculated', wat);
}


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

// выбор способа доставки

let value = document.getElementsByName('raz');

for (let i = 0; i < value.length; i++) {
  value[i].onchange = testRadio;
}


function testRadio() {
  if (this.value == '154₽') {
    document.querySelector('.order-ship-container-choose-post').style.display = 'block';
    document.querySelector('.description354').style.display = 'none';
    document.querySelector('.time2').style.display = 'none';
    document.querySelector('.ur-oreder-total-value').innerText = Number(allPrice.slice(0, -1)) + "₽"
    document.querySelector('.ur-order-cost-ship-value').innerText = 0 + "₽";
  } else
    if (this.value == '354₽') {
      document.querySelector('.order-ship-container-choose-post').style.display = 'none';
      document.querySelector('.description354').style.display = 'block';
      document.querySelector('.time2').style.display = 'block';
      document.querySelector('.description154').style.display = 'none';
      document.querySelector('.time').style.display = 'none';
      document.querySelector('input[name=address]').value = '';
      document.querySelector('.ur-order-cost-ship-value').innerText = 500 + "₽";
      document.querySelector('.ur-oreder-total-value').innerText = Number(allPrice.slice(0, -1)) + 500 + "₽"
    }
}

//проверка на ошибки

$(function () {
  $(".order-selection-container-input").on("keyup", function () {
    document.querySelector('#output').style.display = "none"
  })
})

// $(".form").on("submit", function () {
//   // event.preventDefault()
//   $.ajax({
//     url: 'order_tmp.php',
//     method: 'post',
//     dataType: 'html',
//     data: $(this).serialize(),
//     success: function (data) {
//       if (data == 1) {
//         document.location.reload();
//         document.querySelector('#output').style.display = "none"

//         // document.location.href = "../end-page/end_page.php"
//       } else {
//         $('#output').html(data);
//         document.querySelector('#output').style.display = "flex"
//       }
//       log(data);
//     }
//   });
//   return false;
// });
//общая стоимость доставки

document.querySelector('.ur-order-cost-value').innerText = allPrice;
let shipPriceAll = document.querySelector('.ur-oreder-total-value');
shipPriceAll.innerText = Number(allPrice.slice(0, -1)) + "₽";


//тело корзины

$.ajax({
  url: 'test.php',
  type: 'POST',
  data: { myarray: cart },
  dataType: 'json',
  success: function (json) {
    if (json) {
      log(json)
      $('#output').html(json);
    }
  }
});


//регистрация/авторизация

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

let exit = (e) => {
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