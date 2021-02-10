window.addEventListener("DOMContentLoaded", (e) => {
let img_container = document.getElementById('img-preview-container')
let img_pick = document.getElementById('file')

img_pick.addEventListener('input', () => {
   let files = img_pick.files
   console.log(files)
   switch (files[0].type) {
      case 'image/jpg':
      case 'image/png':
      case 'image/jpeg':
      case 'image/webp':
         break;
      default:
         alert("Veuillez respecter le format demandé !")
         img_pick.value = ""
   }
   if (files[0] && files[0].size > 2097152) {
      alert("Le fichier est trop gros !\r\nVeuillez sélectionner un fichier pesant moins de 2Mo.")
      img_pick.value = ""
   } else {
      let avatar = document.createElement('img')
      avatar.id = 'img-preview'
      avatar.alt = files[0].name
      var reader = new FileReader();

      reader.onload = function (e) {
         avatar.src = e.target.result;
      }

      reader.readAsDataURL(files[0]);
      img_container.appendChild(avatar)
   }
})
})