var navlink = document.querySelectorAll('.nav-link');
console.log(navlink);

for (let i = 0; i < navlink.length; i++) {
    if (current_page.toLowerCase() == navlink[i].innerHTML.toLowerCase()) {
        navlink[i].classList.add("active")
    }
}