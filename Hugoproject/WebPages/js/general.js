let x = document.querySelector("#bouton");
let cacher = document.querySelectorAll("tr.cacher");
x.addEventListener("click", () => {
    for (let index = 0; index < cacher.length; index++) {
        let element = cacher[index];
        if(getComputedStyle(element).display != "none"){
            element.style.display = "none";
        } else {
            element.style.display = "block";
        }
    }
})

function agrandir(id) {
    let img = document.getElementById(id);
    img.style.width = "130%";
}

function diminuer(id) {
    let img = document.getElementById(id);
    img.style.width = "100%";
}

function add(text) {
    let quantite = document.getElementById(text);
    if (quantite.value*1 < 10) {
        quantite.value = (quantite.value*1) + 1;
    }
}

function substract(text) {
    let quantite = document.getElementById(text);
    if (quantite.value*1 > 0) {
        quantite.value = quantite.value - 1;
    }
}

