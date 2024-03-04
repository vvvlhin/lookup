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
  if (wat.term >= 2) {
    document.querySelector('.time').innerText = wat.term + " дня"
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


//Общая стоимость товаров

document.querySelector('.ur-order-cost-value').innerText = allPrice;


// выбор способа доставки

let value = document.getElementsByName('raz');

for (let i = 0; i < value.length; i++) {
  value[i].onchange = testRadio;
}

function testRadio() {
  document.querySelector('.ur-order-cost-ship-value').innerText = this.value;
  shipPriceAll.innerText = '';
  shipPriceAll.innerText = Number(allPrice.slice(0, -1)) + Number(this.value.slice(0, -1)) + "₽";
  if (this.value == '154₽') {
    document.querySelector('.order-ship-container-choose-post').style.display = 'block';
    document.querySelector('#order-selection-container-header-display').style.display = 'none';
    document.querySelector('.addressPVZ').style.display = 'block';
  } else
    if (this.value == '354₽') {
      document.querySelector('.addressPVZ').style.display = 'none';
      document.querySelector('.order-ship-container-choose-post').style.display = 'none';
      document.querySelector('#order-selection-container-header-display').style.display = 'block';
    }
}

//общая стоимость доставки


let shipPriceAll = document.querySelector('.ur-oreder-total-value');

shipPriceAll.innerText = Number(allPrice.slice(0, -1)) + 154 + "₽";


//печать чека
