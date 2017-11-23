create table endereco(
	idEndereco int(6) primary key AUTO_INCREMENT,
	descricao varchar(50),
	longitude int(20),
	latitude int(20)
);

create table tipoViolencia(
	idViolencia int(6) primary key AUTO_INCREMENT,
	tipo varchar(50) not null
);

create table contactoDenucia(
	idContacto int(6) primary key AUTO_INCREMENT,
	nrTelefone varchar(13) not null
);

create table denucia(
	idDenucia int(6) primary key AUTO_INCREMENT,
	idViolencia int(6) not null,
	idEndereco int(6) not null,
	descricao varchar(100) not null,
	comentario varchar(100) not null
);

create table comentario(
	idComentario int(6) primary key AUTO_INCREMENT,
	descricao varchar(100) not null,
	comentario varchar(100) not null
);

create table denuciante(
	idVitima int(6) primary key AUTO_INCREMENT,
	idDenucia int(6) not null,
	idContacto int(6) not null,
	idComentario int(6) not null,
	tipoDenuciante varchar(50) not null,
	nome varchar(100),
	sexo varchar(100)
);

ALTER TABLE `denucia`
  ADD CONSTRAINT `tipoDenucia_fk` FOREIGN KEY (`idViolencia`) REFERENCES `tipoViolencia` (`idViolencia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `enderecoDenucia_fk` FOREIGN KEY (`idEndereco`) REFERENCES `endereco` (`idEndereco`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `denuciante`
  ADD CONSTRAINT `denuciaDenuciante_fk` FOREIGN KEY (`idDenucia`) REFERENCES `denucia` (`idDenucia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contactoDenuciante_fk` FOREIGN KEY (`idContacto`) REFERENCES `contactoDenucia` (`idContacto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comentarioDenuciante_fk` FOREIGN KEY (`idComentario`) REFERENCES `comentario` (`idComentario`) ON DELETE CASCADE ON UPDATE CASCADE;




