<?php 

//dados da url
$email 				=	trim($_POST["email"]);
$telefone 			=	trim($_POST["telefone"]);
$tipoViolencia 		= 	trim($_POST['tipoViolencia']);
$comentarioDenucia 	= 	trim($_POST['comentario']);
$nomeDenuciante 	= 	trim($_POST['nomeVitima']);
$sexoDenuciante 	= 	trim($_POST['sexo']);
$tipoDenuciante 	= 	trim($_POST['tipoDenuciante']);
$descricaoEndereco 	=	trim($_POST["descricao"]);
$longitude 			=	trim($_POST["longitude"]);
$latitude 			=	trim($_POST["latitude"]);
$descricaoDenucia 	= 	trim($_POST['descricao']);

//insercao endereco
$insertEndereco=$conect->prepare("INSERT INTO endereco(descricao,latitude,longitude)VALUES(:descricao,:latitude,:longitude)");


$insertEndereco->bindValue(":descricao",	$descricaoEndereco);
$insertEndereco->bindValue(":latitude"	,	$latitude);
$insertEndereco->bindValue(":longitude",	$longitude);
$insertEndereco->execute();



//Insercar contacto
$insertContacto=$conect->prepare("INSERT INTO contactodenucia(email,nrTelefone)VALUES(:email,:telefone)");
$insertContacto->bindValue(":email",$email);
$insertContacto->bindValue(":telefone",$telefone);
$insertContacto->execute();


//insercao tipo violencia
$insertTipoDenuncia=$conect->prepare("INSERT INTO tipoviolencia(tipo)VALUES(:tipo)");
$insertTipoDenuncia->bindValue(":tipo",$tipoViolencia);
$insertTipoDenuncia->execute();

$insertComentario=$conect->prepare("INSERT INTO comentario(comentario)VALUES(:comentario)");
$insertComentario->bindValue(":comentario",$comentarioDenucia);
$insertComentario->execute();


//buscado ultimos registos do tipoviolencia e endereco
try{

	$sqlIdTipoVionelcia="SHOW TABLE STATUS LIKE 'tipoviolencia'";//Status da tabela tipoviolencia	
	$sqlIdEndereco="SHOW TABLE STATUS LIKE 'endereco'";
	$selectIdTipoVionelcia=$conect->prepare($sqlIdTipoVionelcia);
	$selectIdEndereco=$conect->prepare($sqlIdEndereco);
	$selectIdTipoVionelcia->execute();//execuntando o sql
	$selectIdEndereco->execute();//executando sql contacto
	$resultadoIdTipoViolencia=$selectIdTipoVionelcia->fetch();//buscando o resultado
	$resultadoEndereco=$selectIdEndereco->fetch();//buscando o resultado
	$idTipoViolencia=$resultadoIdTipoViolencia['Auto_increment']-1;//buscando o auto increment.
	$idEndereco=$resultadoEndereco['Auto_increment']-1;//buscando o auto increment. ultimoId=Auto_increment-1
}catch(PDOException $ex){
	echo $ex->getMessage();
}


//insecao denuncia
$insertDenuncia=$conect->prepare("INSERT INTO denucia(idEndereco,idViolencia,descricao)VALUES(:idEndereco,:idViolencia,:descricao)");
$insertDenuncia->bindValue(":idEndereco",$idEndereco);
$insertDenuncia->bindValue(":idViolencia",$idTipoViolencia);
$insertDenuncia->bindValue(":descricao",$descricaoDenucia);
$insertDenuncia->execute();


try{

	$sqlIdDenucia="SHOW TABLE STATUS LIKE 'denucia'";	
	$sqlIdContacto="SHOW TABLE STATUS LIKE 'contactodenucia'";
	$sqlIdComentario="SHOW TABLE STATUS LIKE 'comentario'";
	
	$selectIdDenucia 		=	$conect->prepare($sqlIdDenucia);
	$selectIdContacto 		=	$conect->prepare($sqlIdContacto);
	$selectIdComentario 	=	$conect->prepare($sqlIdComentario);
	$selectIdDenucia 		->	execute();
	$selectIdContacto 		->	execute();
	$selectIdComentario 	->	execute();
	$resultadoIdDenucia 	=	$selectIdDenucia->fetch();
	$resultadoContacto 		=	$selectIdContacto->fetch();
	$resultadoComentario 	=	$selectIdComentario->fetch();
	$idDenucia 				= 	$resultadoIdDenucia ['Auto_increment']-1;
	$idContacto 			= 	$resultadoContacto 	['Auto_increment']-1;
	$idComentario 			= 	$resultadoComentario['Auto_increment']-1;
}catch(PDOException $ex){
	echo $ex->getMessage();
}


//isercao denunciante
$insertDenunciante=$conect->prepare("INSERT INTO denuciante( 
	idDenucia,
	idContacto,
	idComentario,
	nome,
	sexo,
	tipoDenuciante ) VALUES(:idDenucia,:idContacto,:idComentario,:nome,:sexo,:tipoDenuciante)");
$insertDenunciante->bindValue(":idDenucia",$idDenucia);
$insertDenunciante->bindValue(":idContacto",$idContacto);
$insertDenunciante->bindValue(":idComentario",$idComentario);
$insertDenunciante->bindValue(":nome",$nomeDenuciante);
$insertDenunciante->bindValue(":sexo",$sexoDenuciante);
$insertDenunciante->bindValue(":tipoDenuciante",$tipoDenuciante);
$insertDenunciante->execute();


 ?>
