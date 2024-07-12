const hamburgerBtn = document.querySelector('.hamburger')
const navItems = document.querySelectorAll('.nav-item')
const navMenu = document.querySelector('#navbar-cta')

const hamburgerHandler = () => {
    hamburgerBtn.classList.toggle('is-active')
    navMenu.classList.toggle('hidden')
}

const closeMenu = ()=>{
    navMenu.classList.toggle('hidden')
    hamburgerBtn.classList.toggle('is-active')
   
}

hamburgerBtn.addEventListener('click',hamburgerHandler)

navItems.forEach(item => item.addEventListener('click',closeMenu))