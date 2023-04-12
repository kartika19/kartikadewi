window.addEventListener('resize', windowResize);
document.getElementById("searchBack").classList.add("d-none");
function windowResize() {
  if (window.matchMedia("(max-width: 700px)").matches) {
    document.getElementById("searchWrap").classList.remove("d-block");
    document.getElementById("searchWrap").classList.add("d-none");
    document.getElementById("headerIcon").classList.remove("d-none");
    document.getElementById("searchBack").classList.add("d-block");
    document.getElementById("searchBack").classList.remove("d-none");
  }else if (window.matchMedia("(min-width: 700px)").matches){
    document.getElementById("searchWrap").classList.add("d-block");
    document.getElementById("searchWrap").classList.remove("d-none");
    document.getElementById("headerIcon").classList.add("d-none");
    document.getElementById("searchBack").classList.add("d-none");
    document.getElementById("searchBack").classList.remove("d-block");
  }
}

windowResize();


/* ======================================================= SHOW AND HIDE DROPDOWN HEADER ======================================================= */
var elems = document.getElementsByClassName("dropdown");
for (var i = 0; i < elems.length; i++){
  elems[i].addEventListener('click', function(){
    /* check siblings class if contains d-block*/ 
    try{
      let prevSibling = this.previousElementSibling;
      var prev = prevSibling.getElementsByClassName('dropdown-menu')[0];
      prev.classList.remove("d-block");
      prev.classList.add("d-none");
    }catch (e) {}

    try{
      let nextSibling = this.nextElementSibling;
      var next = nextSibling.getElementsByClassName('dropdown-menu')[0];
      next.classList.remove("d-block");
      next.classList.add("d-none");
    }catch(e){}
    /* check siblings class  end*/ 
    /*show and hide element*/ 
    var d = this.getElementsByClassName('dropdown-menu')[0];
    if (d.classList.contains("d-none")) {
      this.getElementsByClassName('dropdown-menu')[0].classList.remove("d-none");
      this.getElementsByClassName('dropdown-menu')[0].classList.add("d-block");     
    }  
    else {
      this.getElementsByClassName('dropdown-menu')[0].classList.add("d-none");
      this.getElementsByClassName('dropdown-menu')[0].classList.remove("d-block");
    }
    /*show and hide element end */ 
  })
}
/* ======================================================= SHOW AND HIDE DROPDOWN HEADER END ======================================================= */

/* ======================================================= SHOW AND HIDE DROPDOWN MOBILE MENU ======================================================= */
var dropdown = document.getElementsByClassName("menu-togle");
for (var i = 0; i < dropdown.length; i++){
  dropdown[i].addEventListener('click', function(){

    if(this.classList.contains("active")){
      this.classList.remove("active");
    }else{
      this.classList.add("active");
    }
    
    /* check siblings class if contains d-block*/ 
    try{
      let nextSibling = this.parentElement.nextElementSibling;
      var next = nextSibling.getElementsByTagName('ul')[0];
      nextSibling.getElementsByTagName('a')[0].classList.remove("active");
      next.classList.remove("d-block");
      next.classList.add("d-none");
    }catch(e){}
    try{
      let prevSibling = this.parentElement.previousElementSibling;
      var prev = prevSibling.getElementsByTagName('ul')[0];
      prevSibling.getElementsByTagName('a')[0].classList.remove("active");
      prev.classList.remove("d-block");
      prev.classList.add("d-none");
    }catch(e){}
    /* check siblings class  end*/ 
    var d = this.parentElement.getElementsByTagName('ul')[0];

    /*show and hide element end */ 
    if (d.classList.contains("d-none")) {
      d.classList.remove("d-none");
      d.classList.add("d-block");     
    }  
    else {
      d.classList.add("d-none");
      d.classList.remove("d-block");
    }
    /*show and hide element end */ 
  })
}
/* ======================================================= SHOW AND HIDE DROPDOWN MOBILE MENU END ======================================================= */

/* ======================================================= OPEN MOBILE MENU ======================================================= */
var openMenu = document.getElementById("ShowMenu");
openMenu.addEventListener('click', function(){
  document.getElementById("bodyOverlay").classList.remove("d-none");
  document.getElementById("MobileMenu").classList.remove("d-none");
  document.getElementById("bodyOverlay").classList.add("d-block");
  document.getElementById("MobileMenu").classList.add("d-block");
});
/* ======================================================= OPEN MOBILE MENU END ======================================================= */

/* ======================================================= CLOSE MOBILE MENU ======================================================= */
var closeMenu = document.getElementById("close-mobile-menu");
closeMenu.addEventListener('click', function(){
  document.getElementById("bodyOverlay").classList.remove("d-block");
  document.getElementById("MobileMenu").classList.remove("d-block");
  document.getElementById("bodyOverlay").classList.add("d-none");
  document.getElementById("MobileMenu").classList.add("d-none");
});
/* ======================================================= CLOSE MOBILE MENU END ======================================================= */

/* ======================================================= SHOW SEARCH FORM ======================================================= */
var searchShow = document.getElementById("searchFormShow");
searchShow.addEventListener('click', function(){
  var serD = document.getElementById("searchWrap");
  serD.classList.remove("d-none");
  serD.classList.add("d-block");
  document.getElementById("headerIcon").classList.remove("d-block");
  document.getElementById("headerIcon").classList.add("d-none");
  document.getElementById("logoWrap").classList.add("d-none");
  document.getElementById("logoWrap").classList.remove("d-block");
});
/* ======================================================= SHOW SEARCH FORM END======================================================= */
/* ======================================================= HIDE SEARCH FORM ======================================================= */
var showIcon = document.getElementById("searchBack");
showIcon.addEventListener('click', function(){
  document.getElementById("searchWrap").classList.remove("d-block");
  document.getElementById("searchWrap").classList.add("d-none");
  document.getElementById("headerIcon").classList.remove("d-none");
  document.getElementById("logoWrap").classList.remove("d-none");
  document.getElementById("logoWrap").classList.add("d-block");
});
/* ======================================================= HIDE SEARCH FORM END======================================================= */


/* ======================================================= SHOW LOCATION ======================================================= */
var locShow = document.getElementById("locationShow");
locShow.addEventListener('click', function(){
  var locDD = document.getElementById("locationChild");
  if(locDD.classList.contains("d-none")){
  locDD.classList.remove("d-none");
    locDD.classList.add("d-block");
  }else{
    locDD.classList.add("d-none");
    locDD.classList.remove("d-block");
  }
});

/* ======================================================= SHOW LOCATION END======================================================= */

/* ======================================================= SHOW AND HIDE FILTERS ======================================================= */

window.addEventListener('resize', windowResize2);

function windowResize2() {
  var i = document.getElementById("navWrap");
  if (window.matchMedia("(max-width: 700px)").matches) {
    i.style.display = "none";
  }else if (window.matchMedia("(min-width: 700px)").matches){
    i.style.display = "block";
  }
}

windowResize2();
document.getElementById("navbar").addEventListener("click", displayNav);

function displayNav() {
  var elem = document.getElementById("navWrap");
  elem.style.display = "block";
  elem.classList.add("show-nav");
}

document.getElementById("close").addEventListener("click", close);
function close(){
  var y = document.getElementById("navWrap");
  y.style.display = "none";
}
/* ======================================================= SHOW AND HIDE FILTERS END======================================================= */