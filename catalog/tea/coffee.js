let counter = JSON.parse(window.localStorage.getItem("counter")),
  cart = [];
cart = JSON.parse(window.localStorage.getItem("cart"));
// cart = localStorage.getItem("cart");

let log = console.log,
  counterVal = 0;

// Анимации для выбора веса

$('.wrapper-goods-list').on("click", '.item', function () {
  let cost = $(this).attr("data-id");
  $(this).closest('.weight').find('.item').removeClass('border-checked');
  $(this).addClass('border-checked');
  $(this).closest('.properties').find('.cost_value').text(cost + "₽");
});

// Счётчик

// document.querySelectorAll('.counter_block').forEach(el => {
//   var minus = el.querySelector(".minus");
//   var number = el.querySelector(".text-value");
//   var plus = el.querySelector(".plus");
//   plus.addEventListener("click", function () {
//     number.innerText++;
//   });
//   minus.addEventListener("click", function () {
//     if (number.innerText == 0) {
//       return;
//     }
//     number.innerText--;
//   });
// })

$(document).on('click', '.counter_block .plus', function () {
  $(this).closest('.counter_block').find('.text-value').text(function (i, text) {
    return Number(text) + 1;
  });
});

$(document).on('click', '.counter_block .minus', function () {
  if ($(this).closest('.counter_block').find('.text-value').text() === '0') {
    return;
  }

  $(this).closest('.counter_block').find('.text-value').text(function (i, text) {
    return Number(text) - 1;
  });
});




// let counts = document.querySelectorAll(".counter_block");
// counts.forEach(addHandlers);

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

$('.cart-counter-value').text(counter);

let costArr = [];
$(".wrapper-goods-list").on("click", ".button_block", function () {
  counter++;
  $('.cart-counter-value').text(counter);
  localStorage.setItem("counter", JSON.stringify(counter));

  let block = $(this).closest(".container");
  let card = block.closest(".goods-list-item");
  let weightBlock = card.find(".weight");

  weightBlock.find(".item").each(function () {
    costArr.push($(this).data("id"));
  });

  let cartItem = {
    code_tovara: card.data("code"),
    weight: card.find(".weight .border-checked").text(),
    quantity: block.find(".text-value").text(),
    costCart: parseInt(card.find(".cost").text().slice(0, -1)),
    img: card.find("#milk_blend_img").attr("src"),
    name: card.find(".properties-name").text(),
    weightBlock: card.find(".weight").html(),
    costArr: costArr,
  };

  cart.push(cartItem);
  console.log(cart);
  localStorage.setItem("cart", JSON.stringify(cart));
});


// Регистрация/авторизация

document.querySelectorAll('#acc').forEach(tmp => {
  tmp.addEventListener("click", () => {
    document.querySelector('#wrapper').style = "filter: blur(5px);";
    document.querySelector('.main-container').style = "filter: blur(5px);";
    document.querySelector('.main-container-head').style = "filter: blur(5px);";
    document.querySelector('footer').style = "filter: blur(5px);";
    document.querySelector('.main').style.display = "block";
  })
})

function closed() {
  document.querySelector('#wrapper').style = "filter: none;";
  document.querySelector('.main-container').style = "filter: none;";
  document.querySelector('.main-container-head').style = "filter: none;";
  document.querySelector('footer').style = "filter: none;";
  document.querySelector('.main').style.display = "none";
}

$(".email-form").on("submit", function () {
  $.ajax({
    url: '../reg/reg_tmp.php',
    method: 'post',
    dataType: 'html',
    data: $(this).serialize(),
    success: function (data) {
      if (data == 1) {
        window.location.href = '../main/index.php';
      } else {
        if (data == 2) {
          $('.access').html(Логин);
        } else {
          $('#message').html(data);
        }
      }
    }
  });
  return false;
});


$(function () {
  $("#input-access").on("keyup", function () {
    var username = $(this).val();
    var usernameRegex = /^[a-zA-Z0-9]+$/;
    if (usernameRegex.test(username) && username != '' && username.length > 3) {
      $.ajax({
        url: '../reg/access.php',
        type: 'post',
        dataType: 'html',
        data: { login: username },
        success: function (response) {
          $('.access').html(response);
        }
      });
    } else {
      $(".access").html("<span style='color: red;'>Необходимо ввести валдиный логин (Больше 3 символов)</span>");
    }
  })
});

$("#form").on("submit", function () {
  $.ajax({
    url: '../../login/login.php',
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
    url: '../../login/logout.php',
    method: 'post',
    dataType: 'html',
    data: $(this).serialize(),
    success: function (data) {
      // console.log(data);
    }
  });
}

// выпадающий список каталога

document.querySelector('.title-menu').addEventListener("click", () => {
  let menu_dropdown = document.querySelector('.menu-dropdown');
  if (menu_dropdown.style.display == "none") {
    document.querySelector('.svg-inline-down').style.transform = "rotate(180deg)";
    menu_dropdown.style.display = "block";
  } else {
    document.querySelector('.svg-inline-down').style.transform = "rotate(0deg)";
    menu_dropdown.style.display = "none";
  }
})

document.querySelectorAll('.menu-dropdown-wrapper').forEach(el => {
  el.addEventListener("click", (element) => {
    let menu_dropdown = el.closest('#menu-dropdown-item').querySelector('.submenu-dropdown')
    // log(el.closest('#menu-dropdown-item').querySelector('.submenu-dropdown'))
    if (menu_dropdown.style.display == "none") {
      menu_dropdown.style.display = "none";
      el.querySelector('.sub-svg').style.transform = "rotate(180deg)";
      el.closest('#menu-dropdown-item').querySelectorAll('.submenu-dropdown').forEach(e => {
        e.style.display = "block"
      })
    } else {
      el.querySelector('.sub-svg').style.transform = "rotate(0deg)";
      // log(el.closest('#menu-dropdown-item').querySelector('.submenu-dropdown'))
      el.closest('#menu-dropdown-item').querySelectorAll('.submenu-dropdown').forEach(e => {
        e.style.display = "none"
      })
    }
  })
})

//Открытие блоков сортировки

document.querySelector('#price').addEventListener("click", () => {
  if (document.querySelector('.price-block').style.display == "none") {
    document.querySelector('.price-block').style.display = "block";
    document.querySelector('.stock-block').style.display = "none";
  } else {
    document.querySelector('.price-block').style.display = "none"
  }
})

document.querySelector('#stock').addEventListener("click", () => {
  if (document.querySelector('.stock-block').style.display == "none") {
    document.querySelector('.stock-block').style.display = "block";
    document.querySelector('.price-block').style.display = "none";
  } else {
    document.querySelector('.stock-block').style.display = "none"
  }
})

//слайдер цены


$('#slider').slider({
  range: true,
  min: Number($('#min').val()),
  max: Number($('#max').val()),
  values: [$('#min').val(), $('#max').val()],
  animate: true,
  slide: function (event, ui) {
    $('#min').val(ui.values[0]);
    $('#max').val(ui.values[1]);
    document.querySelector('.goods_list').style.opacity = ".5";
    $('#load').fadeIn(1000, function () {
      $.ajax({
        url: 'price_search.php',
        method: 'post',
        dataType: 'html',
        data: {
          min: $('#min').val(),
          max: $('#max').val(),
          stock: document.querySelector('#input-stock').checked,
          new: document.querySelector('#input-new').checked,
          rec: document.querySelector('#input-rec').checked,
          hit: document.querySelector('#input-hit').checked
        },
        success: function (data) {
          $('.wrapper-goods-list').html(data)
          document.querySelector('.goods_list').style.opacity = "1";
          $('#load').fadeOut(1000)
        }
      });
    })
  },
});

$(".input-min").on("keyup", function (event) {
  // event.preventDefault();
  $("#slider").slider({ values: [$('#min').val(), $('#max').val()], });
  document.querySelector('.goods_list').style.opacity = ".5";
  $('#load').fadeIn(1000, function () {
    $.ajax({
      url: 'price_search.php',
      method: 'post',
      dataType: 'html',
      data: {
        min: $('#min').val(),
        max: $('#max').val(),
      },
      success: function (data) {
        $('.wrapper-goods-list').html(data)
        document.querySelector('.goods_list').style.opacity = "1";
        $('#load').fadeOut(1000)
      }
    });
  })
})
$(".input-max").on("keyup", function () {
  $("#slider").slider({ values: [$('#min').val(), $('#max').val()], });
  document.querySelector('.goods_list').style.opacity = ".5";
  $('#load').fadeIn(1000, function () {
    $.ajax({
      url: 'price_search.php',
      method: 'post',
      dataType: 'html',
      data: { min: $('#min').val(), max: $('#max').val(), },
      success: function (data) {
        $('.wrapper-goods-list').html(data)
        document.querySelector('.goods_list').style.opacity = "1";
        $('#load').fadeOut(1000)
      }
    });
  })
})
function kisl() {
  document.querySelector('.goods_list').style.opacity = ".5";
  $('#load').fadeIn(1000, function () {
    $.ajax({
      url: 'price_search.php',
      method: 'post',
      dataType: 'html',
      data: {
        stock: document.querySelector('#input-stock').checked,
        new: document.querySelector('#input-new').checked,
        rec: document.querySelector('#input-rec').checked,
        hit: document.querySelector('#input-hit').checked
      },
      success: function (data) {
        // log(data)
        $('.wrapper-goods-list').html(data)
        document.querySelector('.goods_list').style.opacity = "1";
        $('#load').fadeOut(1000)
      }
    });
  })
}
