<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
		<title></title>
	</head>
	<body>
		<div id="registration">
 <h2>Создать страницу</h2>
 
 <form id="registrform" action="" method="post">
     <fieldset>
         <p>
            <label for="name">Имя</label>
            <input id="name" name="name" type="text" class="text" value="" />
         </p>
       
         <p>
            <label for="tel">Телефон</label>
            <input id="tel" name="tel" type="tel" class="text" value="" />
         </p>
         
         <p> 
         	<label for="nic">Прозвище</label>
		 	<input id="nic" name="nic" type="nic" class="text" value=""/>
       
         <p>
            <label for="email">Электронный почтовый адрес</label>
            <input id="email" name="email" type="email" class="text" value="" />
         </p>
       
         <p>
            <label for="password">Пароль</label>
            <input id="password" name="password" class="text" type="password" />
         </p>
       
         <p><input id="acceptTerms" name="acceptTerms" type="checkbox" />
            <label for="acceptTerms">
                Я соглашаюсь с <a href="">Условиями</a> и <a href="">Правилами конфиденциальности</a>
            </label>
         </p>
       
         <p>
            <button id="knopka" type="submit">Регистрация</button>
         </p>
     </fieldset>
 
 </form>
</div>
	</body>
</html>
