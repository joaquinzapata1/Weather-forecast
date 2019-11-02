"use strict";

document.addEventListener("DOMContentLoaded", ()=>{

function renderInfo(json) {
    let icon = getIcon(json.id);
    let temp = json.temp.toFixed(0);
    let context = {
        info: json,
        temp: temp,
        icon
    }
    let source = document.getElementById("entry-template").innerHTML;
    let template = Handlebars.compile(source);
    let html = template(context);
    document.getElementById("content-placeholder").innerHTML = html;
}

function getIcon(i) {
    let prefix = 'wi wi-';
    let icon = icons[i].icon;

    if (!(i > 699 && i < 800) && !(i > 899 && i < 1000)) {
        icon = 'day-' + icon;
    }

    icon = prefix + icon;

    return icon;
}

document.getElementById("search").addEventListener("click", e=> {
    e.preventDefault();
    let city = document.getElementById("city").value;
    fetch(`services/weather?city=${city}`)
    .then( data => {
        data.json()
            .then( j => {
                renderInfo(j)
        });
    })
    .catch( e => console.log(e.toString()));

});





});
