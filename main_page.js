let log = console.log, counterVal = 0;


// Счётчик
let updateDisplay = (val) => document.getElementById("text-value").innerHTML = val;

function incrementClick() {
    updateDisplay(++counterVal);
}

function decrementClick() {
    if (counterVal === 0) {
        return;
    }
    updateDisplay(--counterVal);
}

// Анимации для выбора веса

const list = document.querySelectorAll('.weight li')

document.querySelectorAll(".weight").forEach(function (test) {
    test.addEventListener('click', function () {
        if(test.dataset.number == 1){
            list.forEach(item => {
                item.addEventListener('click', (e) => {
                    list.forEach(el => {
                        el.classList.remove('border-checked');
                    });
                    item.classList.add('border-checked')
                })
            })
        }
    })
})




