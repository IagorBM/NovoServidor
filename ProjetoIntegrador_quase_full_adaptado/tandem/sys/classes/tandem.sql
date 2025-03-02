CREATE TABLE usuario(
    id_usuario SERIAL NOT NULL,
    loginusuario varchar(255),
    senha varchar(255),
    email varchar(255),
    telefone integer,
    tipo character(1),
    PRIMARY KEY(id_usuario)
); 
DROP TABLE produtos

CREATE TABLE produtos(
    id_produto SERIAL NOT NULL,
    url_imgprod varchar(255),
    nome varchar(255),
    preco numeric(4,2),
    descricao varchar,
    tipo character(1),
    avaliacao numeric(2,1) DEFAULT 0,
    qtd_vendas integer DEFAULT 0,
    PRIMARY KEY(id_produto)
);

/*repete esse código algumas vezes para ter conteúdo para ver   */
INSERT INTO produtos(url_imgprod,nome,preco,descricao,tipo,avaliacao,qtd_vendas) VALUES	 ('../imagens/'comedyhub.png,'aplicativo bosta',13.78,'muito bosta','C',4.5,52);
INSERT INTO produtos(url_imgprod,nome,preco,descricao,tipo,avaliacao,qtd_vendas) VALUES	 ('../imagens/comedyhub.png','aplicativo bosta',13.78,'muito bosta','P',4.5,52);
INSERT INTO produtos(url_imgprod,nome,preco,descricao,tipo,avaliacao,qtd_vendas) VALUES	 ('../imagens/comedyhub.png','aplicativo bosta',13.78,'muito bosta','S',4.5,52);