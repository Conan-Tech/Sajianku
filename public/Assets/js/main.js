/*===== TAMPIL MENU =====*/
const showMenu = (toggleId, navId)=>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId)

    if(toggle && nav){
        toggle.addEventListener('click', ()=>{
            nav.classList.toggle('show')
        })
    }
}

showMenu('nav-toggle','nav-menu')

/*===== HAPUS MENU ======*/
const navLink = document.querySelectorAll('.nav__link'),
    navMenu = document.getElementById('nav-menu')

    function linkAction(){
        navMenu.classList.remove('show')
    }
    navLink.forEach(n => n.addEventListener('click', linkAction))

/*===== MENYELEKSI LINK YG AKTIF SAAT DI SCROLL =====*/
var header = document.getElementById("nav-menu");
var link = header.getElementsByClassName("nav__link");
for (var i = 0; i < link.length; i++) {
  link[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  if (current.length > 0) { 
    current[0].className = current[0].className.replace(" active", "");
  }
  this.className += " active";
  });
}

/*===== GANTI WARNA HEADER =====*/
window.onscroll = ()=>{
    const nav = document.getElementById('header')
    if(this.scrollY >=200) nav.classList.add('scroll-header'); else nav.classList.remove('scroll-header')
}