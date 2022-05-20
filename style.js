const sideMenu = document.querySelector('aside');
const menuBtn = document.querySelector('#menu-btn');
const closeBtn = document.querySelector('#close-btn');
const themeToggler = document.querySelector('.theme-toggler');
const bar = document.querySelector('.las la-bars');
const closer = document.querySelector('#closer')

//Open Sidebar
menuBtn.addEventListener('click', () => {
sideMenu.style.display = 'block';
})

//Close Sidebar
closeBtn.addEventListener('click', () => {
 sideMenu.style.display = 'none';
})

//Change Theme
themeToggler.addEventListener('click', () => {
 document.body.classList.toggle('dark-theme-variables');

 themeToggler.querySelector('span:nth-child(1)').classList.toggle('active');
 themeToggler.querySelector('span:nth-child(2)').classList.toggle('active');
}) 

//Button Color
themeToggler.addEventListener('click', () => {
    bar.style.color = 'green';
})

//Pop Remove
closer.addEventListener('click', ()=> {
    popup.classList.remove("open-popup");
})

//The Pop Up Message
let popup = document.getElementById("popup");

  function openPopup(){
      popup.classList.add("open-popup");
  }

  
  function closePopup(){
      popup.classList.remove("open-popup");
  }