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
if($connid = mysql_connect($conf['host'],$conf['user'], $conf['pass'])){
	mysql_select_db($conf['db'], $connid);
	mysql_query("SET CHARSET 'utf8'", $connid);
	$_POST = array_map(function($val) use ($connid){ return mysql_real_escape_string($val,$connid);},$_POST);
	if(isset($_GET['install'])and $_GET['install']==$conf['key']){
		$sqls = explode(';',file_get_contents('xdpuls._sql'));
		foreach($sqls as $sql){
			if(''==trim($sql))continue;
			if(!mysql_query($sql,$connid))die(json_encode(array('error'=>2,'msg'=>'sql error!','sql'=>$sql)));
		}
	}else{
		if(isset($_POST['message'])){
			mysql_query('insert into pfx_puls set `name`="'.@$_POST['name'].'",`email`="'.@$_POST['email'].'",`theme`="'.@$_POST['theme'].'",`message`="'.@$_POST['message'].'",`public`="'.time().'"',$connid);
			mail($conf['mail'],'Error on site','Имя: '.@$_POST['name']."\n".'mail: '.@$_POST['email']."\nТема: ".@$_POST['theme']."\nСообщение: ".@$_POST['message'],"From: ".$conf['site']."\r\nContent-type: text/plain; charset=utf-8");
		}else die(json_encode(array('error'=>1,'msg'=>'Don\'t know error!')));
	}
	echo json_encode(array('error'=>0,'msg'=>'ok'));
}else echo json_encode(array('error'=>3,'msg'=>'Don\'t connect'));
