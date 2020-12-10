use dbBrasilFone;

create table usuario (
	idusuario int not null auto_increment primary key,
	desemail varchar(64) not null,
    despassword varchar(256) not null,
    dtcadastro timestamp not null default current_timestamp()
);

