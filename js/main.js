
const navitems = document.querySelector('.nav_items');
const opennavbtn = document.querySelector('#open_nav-btn');
const closenavbtn = document.querySelector('#close_nav-btn');

const dashboardbtn = document.querySelector('.nav_profile');
const accountMenuDom = document.querySelector('.account-menu');

const openNav = () => {
  /*  console.log("ff");*/
    navitems.style.display = 'flex';
    opennavbtn.style.display = 'none'
    closenavbtn.style.display = 'inline-block'
}

const closeNav = () => {
    navitems.style.display = 'none';
    opennavbtn.style.display = 'inline-block';
    closenavbtn.style.display = 'none';
}

const openAccountMenu = () => {
    var visibility = accountMenuDom.style.visibility;
    if(visibility != 'visible'){
        accountMenuDom.style.visibility = 'visible';
    }else{
        accountMenuDom.style.visibility = 'hidden';
    }
    
}

opennavbtn.addEventListener('click',openNav);
closenavbtn.addEventListener('click',closeNav);
dashboardbtn.addEventListener('click',openAccountMenu);






const sidebar= document.querySelector('aside');
const showsidebar  = document.querySelector('#show-sidebar-btn');
const hidesidebar = document.querySelector('#hide-sidebar-btn');

//showing the side bar in mobile device//
const showsidebarbtn = () =>
{
    sidebar.style.left='0';
    showsidebar.style.display='none';
    hidesidebar.style.display='inline-block';
}

//hide the side bar in mobile device//
const hidesidebarbtn = () =>
{
    sidebar.style.left='-100%';
    showsidebar.style.display='inline-block';
    hidesidebar.style.display='none';
}
showsidebar.addEventListener('click', showsidebarbtn);
hidesidebar.addEventListener('click', hidesidebarbtn);





