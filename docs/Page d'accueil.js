function loaderMenu() {
  fetch('Menu.html')
      .then(response => response.text())
      .then(data => {
          document.querySelectorAll('.aside-menu').forEach(menu => {
              menu.innerHTML = data;
          });
      })  
      .catch(error => console.error('Erreur survenue:', error));
}

document.addEventListener('DOMContentLoaded', loaderMenu);





function Animation1(){
    let SlideDroite = document.querySelectorAll(".anim");
    SlideDroite.forEach(function(SlideDroite){
        let position_titre = SlideDroite.getBoundingClientRect();
        if(position_titre.top >= -50 && position_titre.bottom <= window.innerHeight){
            SlideDroite.classList.add('define_anim1');
            console.log("ggyvgvg");
        }
        else{
            SlideDroite.classList.remove('define_anim1');
        }
    })
}

document.addEventListener('scroll', Animation1, Animation2); 




function Animation2(){
  let SlideRight = document.querySelectorAll(".card");

}


const cards = document.querySelectorAll('.card');

// Ajout de l'événement au clic
cards.forEach(card => {
  card.addEventListener('click', () => {
    card.classList.toggle('flipped'); // Bascule la classe "flipped"
  });
});


function scrollToAPropos() {
  document.getElementById("A_PROPOS").scrollIntoView({
      behavior: "smooth"  // Effet de défilement fluide
  });
}

function scrollToHome(event) {
  event.preventDefault(); //empeche le saut instantané
  document.getElementById("HOME").scrollIntoView({
      behavior: "smooth"  // Effet de défilement fluide
  });
}

function scrollToExperience(event) {
  event.preventDefault(); //empeche le saut instantané
  document.getElementById("EXPERIENCE").scrollIntoView({
      behavior: "smooth"  // Effet de défilement fluide
  });
}

function scrollToAProposDeMoi(event) {
  event.preventDefault(); //empeche le saut instantané
  console.log("good");
  document.getElementById("A_PROPOS").scrollIntoView({
      behavior: "smooth"  // Effet de défilement fluide
  });
}

function scrollToTop(event) {
  event.preventDefault(); //empeche le saut instantané
  console.log("good");
  document.getElementById("HOME").scrollIntoView({
      behavior: "smooth"  // Effet de défilement fluide
  });
}

function scrollToPortfolio(event) {
  event.preventDefault(); //empeche le saut instantané
  console.log("good");
  document.getElementById("PORTFOLIO").scrollIntoView({
      behavior: "smooth"  // Effet de défilement fluide
  });
}


function scrollToContact(event) {
  event.preventDefault(); //empeche le saut instantané
  console.log("good");
  document.getElementById("CONTACT").scrollIntoView({
      behavior: "smooth"  // Effet de défilement fluide
  });
}




//function showprojet1()
function showprojet1(){
  let container = document.getElementById('info_projet1');
  let blur = document.getElementById("blur");
  container.style.display = "flex";
  container.style.position = "fixed";
  blur.style.display = "block";
}
function closeprojet1(){
  let container = document.getElementById('info_projet1');
  let blur = document.getElementById("blur");
  container.style.display = "none";
  blur.style.display = "none";
}

//function showprojet2()
function showprojet2(){
  let container = document.getElementById('info_projet2');
  let blur = document.getElementById("blur");
  container.style.display = "flex";
  container.style.position = "fixed";
  blur.style.display = "block";
}
function closeprojet2(){
  let container = document.getElementById('info_projet2');
  let blur = document.getElementById("blur");
  container.style.display = "none";
  blur.style.display = "none";
}

//function showprojet3()
function showprojet3(){
  let container = document.getElementById('info_projet3');
  let blur = document.getElementById("blur");
  container.style.display = "flex";
  container.style.position = "fixed";
  blur.style.display = "block";
}
function closeprojet3(){
  let container = document.getElementById('info_projet3');
  let blur = document.getElementById("blur");
  container.style.display = "none";
  blur.style.display = "none";
}

//function showprojet4()
function showprojet4(){
  let container = document.getElementById('info_projet4');
  let blur = document.getElementById("blur");
  container.style.display = "flex";
  container.style.position = "fixed";
  blur.style.display = "block";
}
function closeprojet4(){
  let container = document.getElementById('info_projet4');
  let blur = document.getElementById("blur");
  container.style.display = "none";
  blur.style.display = "none";
}

//function showprojet5()
function showprojet5(){
  let container = document.getElementById('info_projet5');
  let blur = document.getElementById("blur");
  container.style.display = "flex";
  container.style.position = "fixed";
  blur.style.display = "block";
}

function closeprojet5(){
  let container = document.getElementById('info_projet5');
  let blur = document.getElementById("blur");
  container.style.display = "none";
  blur.style.display = "none";
}

//function showprojet6()
function showprojet6(){
  let container = document.getElementById('info_projet6');
  let blur = document.getElementById("blur");
  container.style.display = "flex";
  container.style.position = "fixed";
  blur.style.display = "block";
}

function closeprojet6(){
  let container = document.getElementById('info_projet6');
  let blur = document.getElementById("blur");
  container.style.display = "none";
  blur.style.display = "none";
}

//function showprojet7()
function showprojet7(){
  let container = document.getElementById('info_projet7');
  let blur = document.getElementById("blur");
  container.style.display = "flex";
  container.style.position = "fixed";
  blur.style.display = "block";
}

function closeprojet7(){
  let container = document.getElementById('info_projet7');
  let blur = document.getElementById("blur");
  container.style.display = "none";
  blur.style.display = "none";
}

//function showprojet8()
function showprojet8(){
  let container = document.getElementById('info_projet8');
  let blur = document.getElementById("blur");
  container.style.display = "flex";
  container.style.position = "fixed";
  blur.style.display = "block";
}

function closeprojet8(){
  let container = document.getElementById('info_projet8');
  let blur = document.getElementById("blur");
  container.style.display = "none";
  blur.style.display = "none";
}

//function showprojet9()
function showprojet9(){
  let container = document.getElementById('info_projet9');
  let blur = document.getElementById("blur");
  container.style.display = "flex";
  container.style.position = "fixed";
  blur.style.display = "block";
}

function closeprojet9(){
  let container = document.getElementById('info_projet9');
  let blur = document.getElementById("blur");
  container.style.display = "none";
  blur.style.display = "none";
}





document.addEventListener('DOMContentLoaded', function () {
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
});