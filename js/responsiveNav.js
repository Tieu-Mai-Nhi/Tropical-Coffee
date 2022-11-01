// trang nào hoạt động trang đấy sáng
let current_url = document.location;
console.log('url: ', current_url);


var headerNavItems = document.querySelectorAll('.nav-link');
console.log(headerNavItems);
headerNavItems.forEach(function (e) {
    if (e.href == current_url) {
        console.log('href: ', e.href);
        e.classList += " active";
    }
    console.log('1');
});