window.addEventListener("DOMContentLoaded", (e) => {
   if(document.querySelector('.errors-modal') && document.querySelector('.errors-notif')){
      var error_modal = document.querySelector('.errors-modal')
      var errors_notif = document.querySelector('.errors-notif')
      errors_notif.addEventListener('click', (e)=>{
         e.preventDefault()
         error_modal.style.pointerEvents = 'all'
         error_modal.style.visibility = 'visible'
         errors_notif.style.visibility = 'hidden'
         errors_notif.style.pointerEvents = 'none'
      })
      var close_modal = document.querySelector('.close-errors-modal')
      close_modal.addEventListener('click', (e)=>{
         e.preventDefault()
         error_modal.style.pointerEvents = 'none'
         error_modal.style.visibility = 'hidden'
         errors_notif.style.visibility = 'visible'
         errors_notif.style.pointerEvents = 'all'
      })
   }
})