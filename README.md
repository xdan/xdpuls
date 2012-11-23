Система обратной связи для сайта xdPuls - буть вкурсе
=============
Подключая к странице всего два файла, и 1 php файл на сервере Вы получаете полноценную систему обратной связи.
Установка
------------
Создайте каталог `xdpuls` и распакуйте туда содержимое архива 

Далее настраиваем `xdpuls/xdpuls.php`  тут я думаю все понятно

	<?php
		$conf = array(
			'host'=>'localhost',
			'user'=>'root', 
			'pass'=>'',
			'db'=>'codedb',
			'mail'=>'skoder@ya.ru',
			'site'=>'noreply@xdan.ru',
			'key'=>'12345w', 
		);

единственно, это key. key нужен для того, чтобы выпонить sql код на сервере, и создать таблицу `pfx_xdpuls`. Вы можете создать ее сами воспользовавшись файлом `xdpuls.js`
Далее если вы еще не создали таблицу сами то вызываем это скрипт `http://ваш_сайт/xdupls/xdpuls.php?install=сюда вводим выбранный вами key`, если все хорошо, таблица создатся.
Теперь подключаем к странице два файла 

	<script src='/xdpuls/xdpuls.js' type='text/javascript'></script>
	<link href="/xdpuls/xdpuls.css" type="text/css" rel="stylesheet" />
	
и создаем в странице элемент, по клику на который будет выводится наша форма обратной связи, к примеру так

	<a href="#" onclick="$.xdpuls({url:'/xdpuls/xdpuls.php'}); return false;">Сообщить об ошибке</a>
	
метод может пренимать ряд параметров
	1.	email - выводить поле ввода ящика (true - по умолчанию)
	2.	name - выводить поле ввода имени (true - по умолчанию)
	3.	theme - выводить поле ввода темы сообщения (true - по умолчанию)
	4.	message - выводить поле ввода сообщения (true - по умолчанию)
	5.	values:{
			1.	email - значение поля ввода ящика ('' - по умолчанию)
			2.	name - значение поля ввода имени ('' - по умолчанию)
			3.	theme - значение поля ввода темы ('' - по умолчанию)
			4.	message - значение поля ввода сообщения ('' - по умолчанию)
	},
	5.	url - адресс xdpuls.php ('xdpuls.php' - по умолчанию)


1. Author: [leroy][author]
2. [Homepage][home]
[home]: http://xdan.ru/sistema-obratnoj-svjazi-dlja-sajta-xdPuls-but-vkurse.html
[author]: http://xdan.ru/user/profile/Leroy