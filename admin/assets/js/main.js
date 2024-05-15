//const { event } = require("jquery");


(function () {
  /* ========= Preloader ======== */
  const preloader = document.querySelectorAll('#preloader')

  window.addEventListener('load', function () {
    if (preloader.length) {
      this.document.getElementById('preloader').style.display = 'none'
    }
  })

  /* ========= Add Box Shadow in Header on Scroll ======== */
  window.addEventListener('scroll', function () {
    const header = document.querySelector('.header')
    if (window.scrollY > 0) {
      header.style.boxShadow = '0px 0px 30px 0px rgba(200, 208, 216, 0.30)'
    } else {
      header.style.boxShadow = 'none'
    }
  })

  /* ========= sidebar toggle ======== */
  const sidebarNavWrapper = document.querySelector(".sidebar-nav-wrapper");
  const mainWrapper = document.querySelector(".main-wrapper");
  const menuToggleButton = document.querySelector("#menu-toggle");
  const menuToggleButtonIcon = document.querySelector("#menu-toggle i");
  const overlay = document.querySelector(".overlay");

  menuToggleButton.addEventListener("click", () => {
    sidebarNavWrapper.classList.toggle("active");
    overlay.classList.add("active");
    mainWrapper.classList.toggle("active");

    if (document.body.clientWidth > 1200) {
      if (menuToggleButtonIcon.classList.contains("lni-chevron-left")) {
        menuToggleButtonIcon.classList.remove("lni-chevron-left");
        menuToggleButtonIcon.classList.add("lni-menu");
      } else {
        menuToggleButtonIcon.classList.remove("lni-menu");
        menuToggleButtonIcon.classList.add("lni-chevron-left");
      }
    } else {
      if (menuToggleButtonIcon.classList.contains("lni-chevron-left")) {
        menuToggleButtonIcon.classList.remove("lni-chevron-left");
        menuToggleButtonIcon.classList.add("lni-menu");
      }
    }
  });
  overlay.addEventListener("click", () => {
    sidebarNavWrapper.classList.remove("active");
    overlay.classList.remove("active");
    mainWrapper.classList.remove("active");
  });
})();

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

// function show_list() {
//   var courses = document.getElementById("courses_id");

//   if (courses.style.display == "block") {
//     courses.style.display = "none";
//   } else {
//     courses.style.display = "block";
//   }
// }
// window.onclick = function (event) {
//   if (!event.target.matches('.dropdown_button')) {
//     document.getElementById('courses_id').style.display = "none";

//   }
// }    

let log = console.log;

$('.select').on('change', function () {
  let row__group = this.closest('.row__group');
  $.ajax({
    url: '../admin/test.php',
    type: 'POST',
    data: { data: $(this).val(), id: row__group.querySelector('#id').innerText },
    success: function (data) {
      log(data);
    }
  })
})

$('.select-admin').on('change', function () {
  let row__group = this.closest('.row__group');
  $.ajax({
    url: '../admin/admin.php',
    type: 'POST',
    data: { data: $(this).val(), id: row__group.querySelector('#id').innerText },
    success: function (data) {
      location.reload();
    }
  })
})


let search_result = document.querySelector('#search_result');


$(document).ready(function () {
  $("#live_search").keyup(function () {
    var query = $(this).val();
    if (query != "") {
      $.ajax({
        url: 'user_tmp.php',
        method: 'POST',
        data: {
          query: query,
        },
        success: function (data) {
          $('#search_result').html(data);
          $('#search_result').css('display', 'block');
          $("#live_search").focusout(function () {
            search_result.querySelectorAll("#items").forEach(el => {
              el.addEventListener("click", function () {
                $.ajax({
                  url: 'user_tmp_save.php',
                  method: 'post',
                  dataType: 'html',
                  data: {
                    mess: this.innerText,
                  },
                  success: function (data) {
                    location.reload();
                  }
                });
              })
            })
            // $('#search_result').css('display', 'none');
          });
          $("#live_search").focusin(function () {
            $('#search_result').css('display', 'block');
          });
        }
      });
    } else {
      $('#search_result').css('display', 'none');
    }
  });
});

for (items of document.querySelectorAll("#mdiv")) {
  items.addEventListener("click", function () {
    // log(this.closest('.row__group').querySelector('#id').innerText)
    $.ajax({
      url: 'admin_del.php',
      method: 'post',
      dataType: 'html',
      data: { id: this.closest('.row__group').querySelector('#id').innerText },
      success: function (data) {
        location.reload();
      }
    });
  })
}


//Добавление товара

document.querySelectorAll('.plus').forEach(tmp => {
  tmp.addEventListener("click", () => {
    document.querySelector('.blur').style = "filter: blur(5px);";
    document.querySelector('.main').style.display = "block";
    document.querySelector('.main').style.width = "auto";
  })
})

//Редактирование товара
document.querySelectorAll('#edit').forEach(el => {
  el.addEventListener("click", function () {
    if (document.querySelector('.auth-edit')) {
      return false;
    } else {

      $.ajax({
        url: 'edit.php',
        method: 'post',
        dataType: 'html',
        data: { id: this.closest('.row__group').querySelector('#id').innerText },
        success: function (data) {
          $(data).prependTo($("body"));
        }

      });
      return false;
    }
  })
})

document.querySelectorAll('#edit').forEach(tmp => {
  tmp.addEventListener("click", () => {
    document.querySelector('.blur').style = "filter: blur(5px);";
  })
})


function closed() {
  document.querySelector('.blur').style = "filter: none;";
  document.querySelector('.main').style.display = "none";
  document.querySelector('.main-edit').style.display = "none";
  document.querySelector('.auth-edit').remove();
}

//Изображение

// $(".input-select-img").change(function () {
//   if ($(this).val() === "-1") {
//     document.querySelector('#file').style.display = "block";
//   } else {
//     document.querySelector('#file').style.display = "none";
//   }
// });

// $(function () {
//   $('#form').submit(function () {
//     var file = $('#file'), result = $('#result');
//     if (file.prop('files').length) {
//       var formData = new FormData();
//       formData.append('file', file.prop('files')[0]);
//       $.ajax({
//         url: 'img_tmp.php',
//         data: formData,
//         processData: false,
//         contentType: false,
//         type: 'POST',
//         success: function (data) {
//           // log(data)
//         }
//       });
//     } else {
//       result.html("Не выбран файл для загрузки!");
//     }
//     return false;
//   });
// });

$('body').on('input', '.input-range', function () {
  var value = this.value.replace(/[^0-9]/g, '');
  if (value < $(this).data('min')) {
    this.value = $(this).data('min');
  } else if (value > $(this).data('max')) {
    this.value = $(this).data('max');
  } else {
    this.value = value;
  }
});


$("#form").on("submit", function () {
  let group = $('select[name=group]').val(), rate = $('select[name=rate]').val(), img = $('select[name=img]').val();

  $.ajax({
    url: 'save.php',
    method: 'post',
    dataType: 'html',
    data: $(this).serialize(), group, rate, img,
    success: function (data) {
      location.reload();
    }
  });
  return false;
});


//Удаление товара


document.querySelectorAll('#delete').forEach(el => {
  el.addEventListener("click", () => {
    $.ajax({
      url: 'delete.php',
      method: 'post',
      dataType: 'html',
      data: { id: el.closest('.row__group').querySelector('#id').innerText },
      success: function (data) {
        location.reload();
      }
    });
    return false;
  })
})