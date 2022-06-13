const tit = document.querySelector('.modal-title');
const cont = document.querySelector('.modal-body');
const email = document.getElementById("email");
const name = document.getElementById("name");
const text = document.getElementById("text");




document.querySelector("#btn").onclick = block;

function block() {
   if((email.value == '')&&(name.value == '')||(email.value == '')||(name.value == '')){
      tit.innerHTML = "Не все поля заполнены";
      cont.innerHTML = "Пожалуйста, заполните обязательные поля"; 
   }
   else {
      tit.innerHTML = "Спасибо за ваш отзыв!";
      cont.innerHTML = "Ваши данные успешно отправлены.";
   }
   console.log(email.value);
   console.log(name.value);
   console.log(text.value);
   
   
$.ajax({
url: '../ajax.php',
type: 'POST',
cache: false,
data: {'email': email.value, 'name': name.value, 'text': text.value},
dataType: 'html',
beforeSend: function(){
$("#button").prop("disabled", true);
},
success: function(){
modalTitle.innerHTML = "Спасибо";
modalContent.innerHTML = "Ваши данные успешно отравлены";
modal.classList.remove('none');
userEmail.value = '';
userName.value = '';
userMessage.value = '';
$("#button").prop("disabled", false);

}
});
 }





