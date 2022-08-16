const $ = e => document.querySelector(e)

$('.header-user').addEventListener('click', () => {
    $('.header-menu').classList.toggle('show-menu')
})

