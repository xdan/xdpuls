������� �������� ����� ��� ����� xdPuls - ���� ������
=============
��������� � �������� ����� ��� �����, � 1 php ���� �� ������� �� ��������� ����������� ������� �������� �����.
���������
------------
�������� ������� `xdpuls` � ���������� ���� ���������� ������ 

����� ����������� `xdpuls/xdpuls.php`  ��� � ����� ��� �������

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

�����������, ��� key. key ����� ��� ����, ����� �������� sql ��� �� �������, � ������� ������� `pfx_xdpuls`. �� ������ ������� �� ���� ���������������� ������ `xdpuls.js`
����� ���� �� ��� �� ������� ������� ���� �� �������� ��� ������ `http://���_����/xdupls/xdpuls.php?install=���� ������ ��������� ���� key`, ���� ��� ������, ������� ��������.
������ ���������� � �������� ��� ����� 

	<script src='/xdpuls/xdpuls.js' type='text/javascript'></script>
	<link href="/xdpuls/xdpuls.css" type="text/css" rel="stylesheet" />
	
� ������� � �������� �������, �� ����� �� ������� ����� ��������� ���� ����� �������� �����, � ������� ���

	<a href="#" onclick="$.xdpuls({url:'/xdpuls/xdpuls.php'}); return false;">�������� �� ������</a>
	
����� ����� ��������� ��� ����������
	1.	email - �������� ���� ����� ����� (true - �� ���������)
	2.	name - �������� ���� ����� ����� (true - �� ���������)
	3.	theme - �������� ���� ����� ���� ��������� (true - �� ���������)
	4.	message - �������� ���� ����� ��������� (true - �� ���������)
	5.	values:{
			1.	email - �������� ���� ����� ����� ('' - �� ���������)
			2.	name - �������� ���� ����� ����� ('' - �� ���������)
			3.	theme - �������� ���� ����� ���� ('' - �� ���������)
			4.	message - �������� ���� ����� ��������� ('' - �� ���������)
	},
	5.	url - ������ xdpuls.php ('xdpuls.php' - �� ���������)


1. Author: [leroy][author]
2. [Homepage][home]
[home]: http://xdan.ru/sistema-obratnoj-svjazi-dlja-sajta-xdPuls-but-vkurse.html
[author]: http://xdan.ru/user/profile/Leroy