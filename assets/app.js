const sidebarItem = document.querySelectorAll('.has-menu');

for (let i = 0; i < sidebarItem.length; i++) {
    sidebarItem[i].addEventListener('click', e => {
        e.target.classList.toggle('item-active');

        if (e.target.nextElementSibling.classList.contains('submenu')) {
            let submenu = e.target.nextElementSibling;

            if (submenu.style.display === "block") {
                submenu.style.display = "none";
            } else {
                submenu.style.display = "block";
            }
        }
    });
}