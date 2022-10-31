// trang nào hoạt động trang đấy sáng
let current_url = document.location;
console.log(current_url);


var headerNavItems = document.querySelectorAll('.header__navbar-item-link');
headerNavItems.forEach(function (e) {
    if (e.href == current_url) {
        e.classList += " active";
    }
});