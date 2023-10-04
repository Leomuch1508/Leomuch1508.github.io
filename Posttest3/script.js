// Fungsi untuk mengubah mode
let header = document.getElementById("header");
const icon = document.getElementById("icon");
function toggleLightMode(){
    header.classList.toggle("lightMode")
    if(header.classList.contains("lightMode")){
      icon.className = "fas fa-moon"
    } else {
      icon.className = "fas fa-sun"
    }
}

let body = document.getElementById("body");

function toggleLight2(){
    body.classList.toggle("lightMode")
    if(body.classList.contains("lightMode")){
      icon.className = "fas fa-moon"
    } else {
      icon.className = "fas fa-sun"
    }
}
// button.onclick = function(){
//   document.body.classList.toggle("lightMode")
//   if (document.body.contains("lightMode")) {
//     icon.className = "fas fa-moon"
//   } else {
//     icon.className = "fas fa-sun"
//   }
// }

// function toggleLightMode(){
//     button.classList.toggle("lightMode")
//     if(button.classList.contains("lightMode")){
//       icon.className = "fas fa-moon"
//     } else {
//       icon.className = "fas fa-sun"
//     }
// }

// Mengambil elemen toggle dark mode

// Menambahkan event listener untuk tombol


const toggleClick = document.querySelector(".toggleBox");
      const navBar = document.querySelector(".nav-links");

      toggleClick.addEventListener("click", function () {
        toggleClick.classList.toggle("active");
        navBar.classList.toggle("active");
});
