$('.slick-slider').slick({
  dots: true,
  autoplay:true
});
$('.boxhome__tille--slick-slider').slick({
  autoplay:true
});



/* click model */
        const receiveNews = document.getElementById('js-receive-news')
        
        const model = document.querySelector('.js-model')
        const modelContainer = document.querySelector('.js-model-container')
        const modelClose = document.querySelector('.js-model-close')
        //show model
        function showFormNews() {
            model.classList.add('open')
        }
        //close model
        function closeFormNews() {
            model.classList.remove('open')
        }
        receiveNews.addEventListener('click', showFormNews)
        //ngăn chặn hành vi mặt định của model
        modelContainer.addEventListener('click', function (event) {
          event.stopPropagation()
        })
        //khi click vào icon sẽ close model
        modelClose.addEventListener('click', closeFormNews)
        model.addEventListener('click', closeFormNews)


        //modal resposive
        const jsModalTablet = document.querySelector('.js-receive-news-mobile')
        jsModalTablet.addEventListener('click', showFormNews) 

/* Menu hidden responsive */
const menuHidden = document.getElementById('js-menu-hidden')
const closeMenuHidden = document.querySelector('.js-close-menu-hidden ')
const modalHidden = document.querySelector('.js-modal-menu')
function showMenu(){
  modalHidden.classList.add('active')
  
}
function closeMenu(){
  modalHidden.classList.remove('active')
}
menuHidden.addEventListener('click', showMenu)
closeMenuHidden.addEventListener('click', closeMenu)

/* Dropdown */  
const iconHiddenMenu = document.querySelector('.js-menu-hidden-icon')     
const listHiddenMenu = document.querySelector('.submenu-hidden__list')    




const iconHiddenMenuSubcoffee = document.querySelector('.js-menu-hidden-icon-coffee ') 
const listHiddenMenucoffee = document.querySelector('.submenu-hidden__list--coffee')     



const iconHiddenMenuSubFreeze = document.querySelector('.js-menu-hidden-icon-freeze') 
const listHiddenMenuFreeze = document.querySelector('.submenu-hidden__list--freeze')    


const iconHiddenMenuSubTea = document.querySelector('.js-menu-hidden-icon-tea') 
const listHiddenMenuTea = document.querySelector('.submenu-hidden__list--tea')   


const iconHiddenMenuSubbakery = document.querySelector('.js-menu-hidden-icon-bakery') 
const listHiddenMenubakery = document.querySelector('.submenu-hidden__list--bakery')   


const iconHiddenMenuSuborder = document.querySelector('.js-menu-hidden-icon-order') 
const listHiddenMenuorder = document.querySelector('.submenu-hidden__list--order')   

const iconHiddenMenuSubnews = document.querySelector('.js-menu-hidden-icon-news') 
const listHiddenMenunews = document.querySelector('.submenu-hidden__list--news') 


const iconHiddenMenuSubCommunity = document.querySelector('.js-menu-hidden-icon-community ') 
const listHiddenMenuCommunity = document.querySelector('.submenu-hidden__list-community') 

const iconHiddenMenuSubcultural = document.querySelector('.js-menu-hidden-icon-cultural ') 
const listHiddenMenucultural = document.querySelector('.submenu-hidden__list--cultural') 

const iconHiddenMenuSubcommunities = document.querySelector('.js-menu-hidden-icon-communities ') 
const listHiddenMenucommunities = document.querySelector('.submenu-hidden__list--communities') 




const iconHiddenMenuSubgobackme = document.querySelector('.js-menu-hidden-icon-gobackme') 
const listHiddenMenugobackme = document.querySelector('.submenu-hidden__list--gobackme') 

function showSubMenuHidden(){
  listHiddenMenu.classList.toggle('hidden')
  listHiddenMenu.classList.add('animate__animated', 'animate__fadeInRight'); 
}


function showSubMenuHiddenSubcoffee(){
  listHiddenMenucoffee.classList.toggle('hidden')
  listHiddenMenucoffee.classList.add('animate__animated', 'animate__fadeInRight');
}


function showSubMenuHiddenSubFreeze(){
  listHiddenMenuFreeze.classList.toggle('hidden')
  listHiddenMenuFreeze.classList.add('animate__animated', 'animate__fadeInRight');
}

function showSubMenuHiddenSubTea(){
  listHiddenMenuTea.classList.toggle('hidden')
  listHiddenMenuTea.classList.add('animate__animated', 'animate__fadeInRight');
}
function showSubMenuHiddenSubBakery(){
  listHiddenMenubakery.classList.toggle('hidden')
  listHiddenMenubakery.classList.add('animate__animated', 'animate__fadeInRight');
}
function showSubMenuHiddenSuborder(){
  listHiddenMenuorder.classList.toggle('hidden')
  listHiddenMenuorder.classList.add('animate__animated', 'animate__fadeInRight');
}
function showSubMenuHiddenSubnews(){
  listHiddenMenunews.classList.toggle('hidden')
  listHiddenMenunews.classList.add('animate__animated', 'animate__fadeInRight');
}
function showSubMenuHiddenSubgobackme(){
  listHiddenMenugobackme.classList.toggle('hidden')
  listHiddenMenugobackme.classList.add('animate__animated', 'animate__fadeInRight');
}
function showSubMenuHiddenSubCommunity(){
  listHiddenMenuCommunity.classList.toggle('hidden')
  listHiddenMenuCommunity.classList.add('animate__animated', 'animate__fadeInRight');
}
function showSubMenuHiddenSubcultural(){
  listHiddenMenucultural.classList.toggle('hidden')
  listHiddenMenucultural.classList.add('animate__animated', 'animate__fadeInRight');
}
function showSubMenuHiddenSubcomunities(){
  listHiddenMenucommunities.classList.toggle('hidden')
  listHiddenMenucommunities.classList.add('animate__animated', 'animate__fadeInRight');
}

iconHiddenMenu.addEventListener('click', showSubMenuHidden)
iconHiddenMenuSubcoffee.addEventListener('click', showSubMenuHiddenSubcoffee)
iconHiddenMenuSubFreeze.addEventListener('click', showSubMenuHiddenSubFreeze)
iconHiddenMenuSubTea.addEventListener('click', showSubMenuHiddenSubTea)
iconHiddenMenuSubbakery.addEventListener('click', showSubMenuHiddenSubBakery)
iconHiddenMenuSuborder.addEventListener('click', showSubMenuHiddenSuborder)
iconHiddenMenuSubnews.addEventListener('click', showSubMenuHiddenSubnews)
iconHiddenMenuSubgobackme.addEventListener('click', showSubMenuHiddenSubgobackme)
iconHiddenMenuSubCommunity.addEventListener('click', showSubMenuHiddenSubCommunity)
iconHiddenMenuSubcultural.addEventListener('click', showSubMenuHiddenSubcultural)
iconHiddenMenuSubcommunities.addEventListener('click', showSubMenuHiddenSubcomunities)




