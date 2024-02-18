let log = console.log, counterVal = 0;

// Анимации для выбора веса

let item = document.querySelectorAll('.item');
for (items of item) {
    items.addEventListener('click', function () {
        let weight = this.closest('.weight');
        weight.querySelectorAll('.item').forEach(el => {
            el.classList.remove('border-checked')
            this.classList.add('border-checked');
        })
    })
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

let wrapper = document.getElementById('wrapper').classList,
    logoScroll = document.getElementById('logo').classList;

window.addEventListener('scroll', e => {
    // log(scrollY);
    if (scrollY > 200) {
        wrapper.add('scrolled')
        logoScroll.add('logo-scroll')
    } else {
        wrapper.remove('scrolled')
        logoScroll.remove('logo-scroll')
    }
});

// отправка товара в корзину

let btns = document.querySelectorAll('.button_block');
for (btn of btns) {
    btn.addEventListener('click', function () {
        let block = this.closest('.container')
        let text = block.querySelector('.text-value').innerText
        alert(text)
    })
}