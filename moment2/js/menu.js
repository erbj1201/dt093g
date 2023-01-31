"use strict";

//Funktion för huvudmenyn, för att den ska öppnas och stängas
// Hämta meny-knapparna med hjälp av id:t för varje knapp
let openBtn = document.getElementById("open-menu");
let closeBtn = document.getElementById("close-menu");

//Eventlyssnare som ska reagera på klick på menyknapparna meny och stäng
openBtn.addEventListener('click', openCloseMenu);
closeBtn.addEventListener('click', openCloseMenu);

//Funktion för att öppna/toggla/stänga navigeringsmenyn
function openCloseMenu() {
    let navMenuEl = document.getElementById("nav-menu");

    //hämtar in css för menyn
    let style = window.getComputedStyle(navMenuEl);

    //koll om navigering är synlig eller ej, ändrar display block/none
    if(style.display === "none") {
        navMenuEl.style.display = "block";
    } else {
        navMenuEl.style.display = "none";
    }
}