require('./bootstrap');
import Swiper, { Navigation, Pagination } from 'swiper';
// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

const menu=document.getElementById('nav-menu');
const btnClose=document.getElementById('close-menu');
const btnToggle=document.getElementById('toggle-menu');
const iconC=document.getElementById('dropdown_icon');
const menuDropDown=document.getElementById('dropdown');
const megaMenu=document.getElementById('megamenu');
const dropDownLink=document.getElementById('dropdown-link');


// configure Swiper to use modules
Swiper.use([Navigation, Pagination]);

dropDownLink.addEventListener('mouseover',()=>{
    dropDownLink.style.color="#64553e";
});

dropDownLink.addEventListener('mouseout',()=>{
    dropDownLink.style.color="#fff";
});

menuDropDown.addEventListener('mouseover',()=>{
    iconC.setAttribute('color','#64553e');
});

menuDropDown.addEventListener('mouseout',()=>{
    iconC.setAttribute('color','#fff');
});

btnToggle.addEventListener('click',()=>{
    menu.classList.add('show-menu');
});

btnClose.addEventListener('click',()=>{
    menu.classList.remove('show-menu');
});

megaMenu.addEventListener('mouseover',()=>{
    
});

const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    speed:600,
    parallax:true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      dynamicBullets:true
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    
  });


var paths=document.querySelectorAll('.map_links a');
var links=document.querySelectorAll('.regions a');

paths.forEach(path => {
    path.addEventListener('mouseenter',function(e){
        console.log('biginning');
        console.log(this.id);
        if(this.id=='undifined'){
            console.log('enter');
            document.querySelector('#link-'+this.id).style.color='red';
        }
        console.log('outside');
    });
});