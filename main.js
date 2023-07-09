const navItems = document.querySelector('.nav-items');
const openNavBtn = document.querySelector('#open-btn');
const closeNavBtn = document.querySelector('#close-btn');


// NAV BAR AND CROSS
const opennav = () => {
  navItems.style.display = 'flex';
  openNavBtn.style.display = 'none';
  closeNavBtn.style.display = 'inline-block';
}
const closenav = () => {
  navItems.style.display = 'none';
  openNavBtn.style.display = 'inline-block';
  closeNavBtn.style.display = 'none';
}

openNavBtn .addEventListener('click',opennav);
closeNavBtn .addEventListener('click',closenav);



const sidebar = document.querySelector('aside');
const showSidebarBtn = document.querySelector('#show-sidebar-btn');
const hideSidebarBtn = document.querySelector('#hide-sidebar-btn');


// Shows side bar in small devices
const showSidebar =() => {
  sidebar.style.left='0';
  showSidebarBtn.style.display = 'none';
  hideSidebarBtn.style.display = 'inline-block';
}

// Shows side bar in small devices
const hideSidebar =() => {
  sidebar.style.left='-100%';
  showSidebarBtn.style.display = 'inline-block';
  hideSidebarBtn.style.display = 'none';


}

showSidebarBtn.addEventListener('click', showSidebar);
hideSidebarBtn.addEventListener('click', hideSidebar);
