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
        
        console.log(this.id);
        if(this.id!=='undifined'){
            var id=this.id.replace('m-','');
            console.log(id);
            document.querySelector('#'+id).classList.add('is_active');
            document.querySelector('#m-'+id).classList.add('map_hover');
        }
        
    });
    path.addEventListener('mouseleave',function(e){
        if(this.id!=='undifined'){
            var id=this.id.replace('m-','');
            document.querySelector('#'+id).classList.remove('is_active');
            document.querySelector('#m-'+id).classList.remove('map_hover');
        }
    })
});
links.forEach(link => {
    link.addEventListener('mouseenter',function(e){
    
        if(this.id!=='undifined'){ 
            document.querySelector('#'+this.id).classList.add('is_active');
            document.querySelector('#'+this.id.replace('link','m-link')).classList.add('map_hover');
        }
    
    });
    link.addEventListener('mouseleave',function(e){
        if(this.id!=='undifined'){
            
            document.querySelector('#'+this.id).classList.remove('is_active');
            document.querySelector('#'+this.id.replace('link','m-link')).classList.remove('map_hover');
        }
    })
});