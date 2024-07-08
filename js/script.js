/** @format */

const preloader = document.querySelector(".preloader");

window.addEventListener("load", () => {
  preloader.classList.add("active");
});

function loopEvent(btn, con, oBtn) {
  for (let i = 0; i < btn.length; i++) {
    if (btn[i].getAttribute("date-info") === con[i].id) {
      addItem(btn[i], con[i]);
    }
    addRemove(oBtn[i], con[i]);
    // windowRemove(con[i]);
  }
}

// nav
const navBtn = document.querySelector("  #menu-bar");
const navContent = document.querySelector("  header .header-content .nav-bar ");

addToggle(navBtn, navContent);

navBtn.onclick = () => {
  navBtn.classList.toggle("fa-xmark");
};

//  nav

//  login btn
const loginBtn = document.querySelectorAll(".login-modal-btn");
const loginContent = document.querySelector(".login-modal ");
const loginContentCancel = document.querySelector(".login-modal .fa-xmark");

addRemove(loginContentCancel, loginContent);
windowRemove(loginContent);

for (let i = 0; i < loginBtn.length; i++) {
  addItem(loginBtn[i], loginContent);
}

const homeAlertBtn = document.querySelector(".home-modal-first i ");


//  successful modal

let sureBtn = document.querySelectorAll(".sure-modal-btn");
let sureContent = document.querySelector(".sure-modal");
let sureBtnClose = sureContent.querySelector(".close-modal-sure");
for (let i = 0; i < sureBtn.length; i++) {
  addItem(sureBtn[i], sureContent);
}
addRemove(sureBtnClose, sureContent);

//  after sure

let succContent = document.querySelector(".succ-modal");
let succbtn = document.querySelector(".success-modal-btn");
let succClose = succContent.querySelector("button");

addItem(succbtn, succContent);
addRemove(succClose, succContent);

addRemove(succbtn, sureContent);

//  home alert

//  home alert  end

//  after sure end

//  successful modal  end

//  login btn end

let simpleModalBtn = document.querySelectorAll(".simple-modal-btn");
let simpleModalContent = document.querySelectorAll(".simple-modal");
let simpleModalBtnRemove = document.querySelectorAll(".simple-modal .fa-xmark");

loopEvent(simpleModalBtn, simpleModalContent, simpleModalBtnRemove);

function addItem(itembtn, itemcon) {
  itembtn.addEventListener("click", () => {
    itemcon.classList.add("active");
    navContent.classList.remove("active");
    navBtn.classList.remove("fa-xmark");
  });
}
function addRemove(itembtn, itemcon) {
  itembtn.addEventListener("click", () => {
    itemcon.classList.remove("active");
  });
}
function addToggle(itembtn, itemcon) {
  itembtn.addEventListener("click", () => {
    itemcon.classList.toggle("active");
  });
}

function windowRemove(main) {
  window.addEventListener("click", (e) => {
    if (e.target == main) {
      main.classList.remove("active");
    }
  });
}

//  add more btn
const addMorelBtn = document.querySelector(".add-more-btn");
const addMoreContent = document.querySelector(".add-more-food-modal ");
const addMoreContentCancel = document.querySelector(
  ".add-more-food-modal .fa-xmark"
);

addItem(addMorelBtn, addMoreContent);
addRemove(addMoreContentCancel, addMoreContent);
windowRemove(addMoreContent);

//  add more btn end
