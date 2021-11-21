$(".slick-slider").slick({
  dots: true,
  autoplay: true,
});
$(".boxhome__tille--slick-slider").slick({
  autoplay: true,
});

/* click model */
const receiveNews = document.getElementById("js-receive-news");

const model = document.querySelector(".js-model");
const modelContainer = document.querySelector(".js-model-container");
const modelClose = document.querySelector(".js-model-close");
//show model
function showFormNews() {
  model.classList.add("open");
}
//close model
function closeFormNews() {
  model.classList.remove("open");
}
receiveNews.addEventListener("click", showFormNews);
//ngăn chặn hành vi mặt định của model
modelContainer.addEventListener("click", function (event) {
  event.stopPropagation();
});
//khi click vào icon sẽ close model
modelClose.addEventListener("click", closeFormNews);
model.addEventListener("click", closeFormNews);

//modal resposive
const jsModalTablet = document.querySelector(".js-receive-news-mobile");
jsModalTablet.addEventListener("click", showFormNews);

/* Menu hidden responsive */
const menuHidden = document.getElementById("js-menu-hidden");
const closeMenuHidden = document.querySelector(".js-close-menu-hidden ");
const modalHidden = document.querySelector(".js-modal-menu");
function showMenu() {
  modalHidden.classList.add("active");
}
function closeMenu() {
  modalHidden.classList.remove("active");
}
menuHidden.addEventListener("click", showMenu);
closeMenuHidden.addEventListener("click", closeMenu);

const showSubMenu = (list) => (e) => {
  list.classList.toggle("hidden");
  list.classList.add("animate__animated", "animate__fadeInRight");
};

const listSubMenu = document.querySelectorAll(".js-menu");

listSubMenu.forEach((item) => {
  item.addEventListener(
    "click",
    showSubMenu(item.parentNode.nextSibling.nextElementSibling)
  );
});

/* menu order */
const listSizes = document.querySelectorAll(".contentbox__size--item");
const extPrice = document.getElementById("ext__price");
var liS = document.querySelector(".li1");
var liM = document.querySelector(".li2");
var liL = document.querySelector(".li3");
liS.onclick = function () {
  liS.classList.toggle("current");
  extPrice.innerHTML = "49,000 VND";
  liM.classList.remove("current");
  liL.classList.remove("current");
};
liM.onclick = function () {
  liM.classList.toggle("current");
  extPrice.innerHTML = "59,000 VND";
  liS.classList.remove("current");
  liL.classList.remove("current");
};
liL.onclick = function () {
  liL.classList.toggle("current");
  extPrice.innerHTML = "69,000 VND";
  liS.classList.remove("current");
  liM.classList.remove("current");
};
