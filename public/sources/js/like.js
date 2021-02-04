window.addEventListener("DOMContentLoaded", (e) => {
   var like_btns = document.querySelectorAll('.like-button')
   var like_counters = document.querySelectorAll('.like-counter')
   like_btns.forEach((btn)=>{
      btn.removeAttribute('disabled')
      let btn_state = false
      btn.addEventListener('click', (e)=>{
         e.preventDefault()
         let datas = btn.dataset
         let target_id = document.querySelector(`span[data-user-counter="${parseInt(datas.target)}"]`)
         if(localStorage.getItem('like-'+datas.target)){
            btn_state = true
         }
         if(target_id && parseInt(target_id.textContent) >= 0){
            btn.classList.toggle('like-button-checked')
            if(btn_state == false){
               target_id.textContent = 1
               localStorage.setItem('like-'+datas.target, true);
               btn_state = true;
            }else if(btn_state == true){
               target_id.textContent = 0
               if(localStorage.getItem('like-'+datas.target)){
                  localStorage.removeItem('like-'+datas.target);
               }
               btn_state = false;
            }
         }
      })
   })
   like_counters.forEach((counter)=>{
      let counter_datas = counter.dataset
      if(localStorage.getItem('like-'+counter_datas.userCounter)){
         like_btns[counter_datas.userCounter].classList.add('like-button-checked')
         counter.textContent = 1
      }else{
         like_btns[counter_datas.userCounter].classList.remove('like-button-checked')
         counter.textContent = 0
      }
   })
})