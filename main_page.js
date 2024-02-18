let log = console.log, counterVal = 0;

// Анимации для выбора веса

const listID = document.querySelectorAll('[data-id]');
let tmp, list;
const listItem = document.querySelectorAll(".weight li").forEach(function (test) {
    test.addEventListener("click", function () {
        for (let elem of listID) {
            if (elem.dataset.id == test.dataset.id) {
                tmp = elem.dataset.id;
                list = document.querySelectorAll(`.weight li[data-id="${tmp}"]`)
                list.forEach(item => {
                    item.addEventListener('click', (e) => {
                        list.forEach(el => {
                            el.classList.remove('border-checked');
                        });
                        item.classList.add('border-checked')
                    })
                })
            }
        }
    })
})

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

let wrapper = document.getElementById('wrapper').classList,
    logoScroll = document.getElementById('logo').classList;

window.addEventListener('scroll', e => {
    log(scrollY);
    if (scrollY > 200) {
        wrapper.add('scrolled')
        logoScroll.add('logo-scroll')
    } else {
        wrapper.remove('scrolled')
        logoScroll.remove('logo-scroll')
    }
});