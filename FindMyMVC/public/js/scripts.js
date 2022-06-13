// ! FOR NAVE BAR TEMPLATE
window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function() {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 74,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function(responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});



function showmodelTrouve() {
 
    document.getElementById('informationsTrouve').style.display = "block";
    // document.querySelector('.circle-declaration ').style.display = "none";

}

function showmodel() {
 
    document.getElementById('informations').style.display = "block";
    // document.querySelector('.circle-declaration ').style.display = "none";

}

function btnCloseModel() {
    document.getElementById('informations').style.display = "none";
    document.getElementById('informationsTrouve').style.display = "none";

}

function showObject() {
    document.getElementById('objet').style.display="block";
}

function closeModel(){
    document.getElementById('objet').style.display = "none";

}
// ! objet perdu 
function showObjetPerdu(){
    document.getElementById('ObjetsPerdu').style.display = "block";
    document.getElementById('ObjetsTrouve').style.display = "none";

}


// ! objet Trouve 
function showObjetTrouve(){
    document.getElementById('ObjetsPerdu').style.display = "none";
    document.getElementById('ObjetsTrouve').style.display = "block";

}




// !side bar admin
type = 'text/Javascript' >

    document.addEventListener("DOMContentLoaded", function(event) {

        const showNavbar = (toggleId, navId, bodyId, headerId) => {
            const toggle = document.getElementById(toggleId),
                nav = document.getElementById(navId),
                bodypd = document.getElementById(bodyId),
                headerpd = document.getElementById(headerId)

            // Validate that all variables exist
            if (toggle && nav && bodypd && headerpd) {
                toggle.addEventListener('click', () => {
                    // show navbar
                    nav.classList.toggle('show')
                        // change icon
                    toggle.classList.toggle('bx-x')
                        // add padding to body
                    bodypd.classList.toggle('body-pd')
                        // add padding to header
                    headerpd.classList.toggle('body-pd')
                })
            }
        }

        showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

        /*===== LINK ACTIVE =====*/
        const linkColor = document.querySelectorAll('.nav_link')

        function colorLink() {
            if (linkColor) {
                linkColor.forEach(l => l.classList.remove('active'))
                this.classList.add('active')
            }
        }
        linkColor.forEach(l => l.addEventListener('click', colorLink))

        // Your code to run since DOM is loaded and ready
    });


 //! ------ MODEL FOR OBJET PERDU ----
    objectList = document.querySelectorAll(".objets");

    objectList.forEach(obj => {
    obj.addEventListener("mouseover", function() {
    let a = this.getAttribute("data").split(",");
  
    let objet = a[0];
    let dateDePerd = a[1];
    let ville = a[2];
    let adresse = a[3];
    let details=a[4]; 
    let tele = a[5];  
    let image = a[6];
    console.log("objet : " +objet + " \n dateDePerd : " +dateDePerd+ " \n  ville :" +ville +" \n  adresse : "+adresse+" \n  details : "+details+" \n  tele : "+tele+" \n  image : "+image);
    document.querySelector(".objet").innerText = objet;
    document.getElementById("dateDePerd").innerText = dateDePerd;
    document.getElementById("ville").innerText = ville;
    document.getElementById("adresse").innerText = adresse;
    document.getElementById("details").innerText = details;
    document.getElementById("tele").innerText = tele;
    document.getElementById('myImageID').src="files/"+image;
    });
});

//! ------ MODEL FOR OBJET TROUVE ----
objectList = document.querySelectorAll(".objetsTrouve");

objectList.forEach(obj => {
obj.addEventListener("mouseover", function() {
let a = this.getAttribute("data").split(",");

let objet = a[0];
let dateDePerd = a[1];
let ville = a[2];
let adresse = a[3];
let details=a[4]; 
let tele = a[5];  
let despo = a[6];  
let image = a[7];
console.log("objet : " +objet + " \n dateDeTrouve : " +dateDePerd+ " \n  ville :" +ville +" \n  adresse : "+adresse+" \n  details : "+details+" \n  tele : "+tele+" \n  image : "+image);
// document.querySelector(".objet").innerText = objet;
document.getElementById("dateDeTrouve").innerText = dateDeTrouve;
document.getElementById("ville").innerText = ville;
document.getElementById("adresse").innerText = adresse;
document.getElementById("details").innerText = details;
document.getElementById("tele").innerText = tele;
document.getElementById("despo").innerText = despo;
document.getElementById('myImageID').src="files/"+image;
});
});