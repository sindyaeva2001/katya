const tit = document.querySelector('.modal-title');
const cont = document.querySelector('.modal-body');
const email = document.getElementById("email");
const nick = document.getElementById("name");
const text = document.getElementById("text");




document.querySelector("#btn").onclick = block;

function block() {
   if((email.value == '')&&(nick.value == '')||(email.value == '')||(nick.value == '')){
      tit.innerHTML = "Не все поля заполнены";
      cont.innerHTML = "Пожалуйста, заполните обязательные поля"; 
   }
   else {
      tit.innerHTML = "Спасибо за ваш отзыв!";
      cont.innerHTML = "Ваши данные успешно отправлены.";
   }
   console.log(email.value);
   console.log(nick.value);
   console.log(text.value);

	$.ajax({
		url: 'ajax.php',
		type: 'POST',
		cache: false,
		data: {'email': email.value, 'name': nick.value, 'text': text.value},
		dataType: 'html',
		beforeSend: function(){
		$("#btn").prop("disabled", true);
		},
		success: function(){
		tit.innerHTML = "Спасибо за ваш отзыв!";
      		cont.innerHTML = "Ваши данные успешно отправлены.";
		email.value = '';
		nick.value = '';
		text.value = '';
		$("#btn").prop("disabled", false);

		}
		});

   return false;

 }





