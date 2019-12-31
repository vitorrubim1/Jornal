create database jornal;
use jornal;

create table usuario(
	idUsuario int primary key auto_increment,
    nomeUsuario varchar (70),
    email varchar (100),
    senha varchar (40),
    cpf int,
    imagem varchar(255),
    nivel varchar (10)
);

create table noticia(
	idNoticia int primary key auto_increment,
    titulo varchar (255),
    subtitulo varchar (100),
    assunto varchar (8),
    foto varchar (255)
);
create table comentario(
	positivo int,
    negativo int,
    comentario varchar (255),
    idNoticia int,
    FOREIGN KEY (idNoticia)	REFERENCES noticia (idNoticia)
);

-- truncate usuario;
desc usuario;
desc noticia;
desc comentario;
select * from usuario;
select * from comentario;
select * from noticia;

select * from usuario where idUsuario = 1;

-- alter table usuario modify nivel varchar (10);

