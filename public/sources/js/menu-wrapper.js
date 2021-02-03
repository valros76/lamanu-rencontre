window.addEventListener("DOMContentLoaded", (e) => {
   let menu = document.getElementById("main-menu")
   let wrap_btn = document.getElementById("main-wrapper-icon")
   let wrap_close_btn = document.getElementById("main-wrapper-close-icon")

   wrap_btn.addEventListener("click", (e)=>{
      if(!menu.classList.contains("main-menu-active")){
         menu.classList.remove("main-menu-hide")
         menu.classList.add("main-menu-active")
      }
      wrap_btn.style.pointerEvents = "none";
      wrap_close_btn.style.pointerEvents = "all";
   })
   wrap_close_btn.addEventListener("click", (e)=>{
      menu.classList.remove("main-menu-active")
      menu.classList.add("main-menu-hide")
      wrap_close_btn.style.pointerEvents = "none";
      wrap_btn.style.pointerEvents = "all";
   })
})