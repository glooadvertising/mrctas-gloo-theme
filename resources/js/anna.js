
// Mobile 

// let open = document.getElementById('open')
// let close = document.getElementById('close')
// let mobileMenu = document.getElementById('mobile-menu')
// let mobileMenuFooter = document.querySelector('#mobile-menu-footer a')
// let btmm = document.querySelector('.btmm')
// let purpleSub = document.querySelector('.purple-sub')


// open.addEventListener("click", function(){
//     mobileMenu.classList.remove('menu-hide')
// })

// close.addEventListener("click", function(){
//     mobileMenu.classList.add('menu-hide')
// })

// mobileMenuFooter.addEventListener("click", function(){
//     mobileMenu.classList.add('menu-hide')
// })

// btmm.addEventListener("mouseover", function() {
//     purpleSub.classList.add("menu-hide")
// })





// let menuItem01 = document.getElementById('menu-link-01')
// let megaMenu01 = document.getElementById('mega-menu-01')
// let menuItem02 = document.getElementById('menu-link-02')
// let megaMenu02 = document.getElementById('mega-menu-02')
// let menuItem03 = document.getElementById('menu-link-03')
// let megaMenu03 = document.getElementById('mega-menu-03')
// let menuItem04 = document.getElementById('menu-link-04')
// let megaMenu04 = document.getElementById('mega-menu-04')
// let mainNav = document.getElementById('main-nav')
// let mainHeader = document.getElementById('main-header')

// menuItem01.addEventListener('mouseover', function (e) {
//     e.preventDefault();
//     megaMenu01.classList.remove('hidden')
//     megaMenu01.classList.add('grid')
//     megaMenu02.classList.add('hidden')
//     megaMenu03.classList.add('hidden')
//     megaMenu04.classList.add('hidden')
// })

// megaMenu01.addEventListener('mouseleave', function () {
//     setTimeout(megaMenu01.classList.add('hidden'), 3000)
// })

// menuItem02.addEventListener('mouseover', function (e) {
//     e.preventDefault();
//     megaMenu02.classList.remove('hidden')
//     megaMenu02.classList.add('grid')
//     megaMenu01.classList.add('hidden')
//     megaMenu03.classList.add('hidden')
//     megaMenu04.classList.add('hidden')
// })

// megaMenu02.addEventListener('mouseleave', function () {
//     setTimeout(megaMenu02.classList.add('hidden'), 3000)
// })

// menuItem03.addEventListener('mouseover', function (e) {
//     e.preventDefault();
//     megaMenu03.classList.remove('hidden')
//     megaMenu03.classList.add('grid')
//     megaMenu01.classList.add('hidden')
//     megaMenu02.classList.add('hidden')
//     megaMenu04.classList.add('hidden')
// })

// megaMenu03.addEventListener('mouseleave', function () {
//     setTimeout(megaMenu03.classList.add('hidden'), 3000)
// })

// menuItem04.addEventListener('mouseover', function (e) {
//     e.preventDefault();
//     megaMenu04.classList.remove('hidden')
//     megaMenu04.classList.add('grid')
//     megaMenu01.classList.add('hidden')
//     megaMenu02.classList.add('hidden')
//     megaMenu03.classList.add('hidden')
// })

// megaMenu04.addEventListener('mouseleave', function () {
//     setTimeout(megaMenu04.classList.add('hidden'), 3000)
// })


// mainHeader.addEventListener('mouseleave', function () {
//     megaMenu01.classList.add('hidden')
//     megaMenu02.classList.add('hidden')
//     megaMenu03.classList.add('hidden')
//     megaMenu04.classList.add('hidden')
// })


jQuery(document).ready(function($) {
    // Cache selectors
    var leftMenu = $(".side-menu"),
        topMenu = $("#main-header"),
        topMenuHeight = topMenu.outerHeight()+15,
    // All list items
        menuItems = leftMenu.find("a"),
    // Anchors corresponding to menu items
        scrollItems = menuItems.map(function(){
            var item = $($(this).attr("href"));
            if (item.length) { return item; }
    });

    // Bind to scroll
    $(window).scroll(function(){
        // Get container scroll position
        var fromTop = $(this).scrollTop()+topMenuHeight;
    
        // Get id of current scroll item
        var cur = scrollItems.map(function(){
            if ($(this).offset().top < fromTop)
            return this;
        });
        // Get the id of the current element
        cur = cur[cur.length-1];
        var id = cur && cur.length ? cur[0].id : "";
        // Set/remove active class
        menuItems
            .parent().removeClass("menu-link-active")
            .end().filter("[href='#"+id+"']").parent().addClass("menu-link-active");
    });
    
});









