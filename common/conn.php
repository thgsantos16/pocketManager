<?php

$conn = @mysql_connect("localhost","toptal","toptal");
if (!$conn) {
	echo "Erro: Não foi possível conectar com o banco de dados!";
	exit;
}
$db = @mysql_select_db("toptal",$conn);
if (!$db) {
	echo "Erro: Conexão feita, mas a base de dados não foi encontrada...";
	exit;
}


mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');