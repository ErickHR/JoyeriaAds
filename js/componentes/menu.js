let _this = this
const id_hamburguer = document.querySelector(`#hamburger`)
const nav = document.querySelector(`#hamburger button`)
const menu = document.querySelector(`#menu`)
const app_menu = document.querySelector(`#app-menu`)
nav.addEventListener('click', () => {
    id_hamburguer.classList.toggle('hide-left')
    nav.classList.toggle('open')
    menu.classList.toggle('menu-hide')
    app_menu.classList.toggle('app-menu-hide')
    // _this.hide()
})