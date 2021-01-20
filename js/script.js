
// window.addEventListener("load", function (event) {
//     let btnDropdown = document.querySelector('.btn-drowpn__title')
//     let btnDropdownDescription = document.querySelector('.btn-drowpn__description')

//     btnDropdown.addEventListener('click', function () {
//         btnDropdownDescription.classList.toggle('show')
//     })
// });

$(document).ready(function(){
    $('[data-toggle="popover"]').popover();
    $(document).on('click', '.btn-add__cliente', function(){
      $('.div-add__cliente').toggleClass('d-none')
    })
});