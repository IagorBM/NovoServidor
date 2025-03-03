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
    preco numeric(6,2),
    descricao varchar(255),
    tipo character(1),
    avaliacao numeric(2,1) DEFAULT 0,
    qtd_vendas integer DEFAULT 0,
    PRIMARY KEY(id_produto)
);

/*repete esse código algumas vezes para ter conteúdo para ver   */
INSERT INTO produtos (url_imgprod, nome, preco, descricao, tipo, avaliacao, qtd_vendas) VALUES
('../imagens/oleodoterra.jpg', 'Óleo doTerra', 130.00, 'Promove sensações de relaxamento e ajuda a reduzir a aparência de imperfeições na pele.', 'P', 4.0, 57),
('../imagens/cordel.jpg', 'Livro de Cordel', 4.90, 'Livros com histórias curtas escritas por mim mesmo', 'P', 3.0, 23),
('../imagens/natura.jpg', 'Produtos Natura', 27.90, 'Vendo cremes, sabonetes e perfume', 'P', 5.0, 78),
('../imagens/abacaxi.jpg', 'Abacaxi', 9.95, 'Eu vendo a unidade', 'C', 4.0, 34),
('../imagens/caqui.jpg', 'Caqui', 13.76, 'Vendo o kilo', 'C', 3.0, 19),
('../imagens/laranja.jpg', 'Laranja', 7.97, 'Vendo o kilo', 'C', 5.0, 62),
('../imagens/diarista.jpg', 'Diarista', 300.00, 'Limpeza de todos os ambientes, incluindo áreas de difícil acesso e organização de armários', 'S', 5.0, 15),
('../imagens/pedreiro.jpg', 'Pedreiro', 250.00, 'Faço serviço de pedreiro com capricho e dedicação! Assento piso, levanto parede, faço reboco e acabamento fino. Trabalho por diária, com compromisso e qualidade. É só chamar que a gente constrói junto', 'S', 4.0, 32),
('../imagens/professor.jpg', 'Aula particular', 50.00, 'Cobro a hora', 'S', 4.0, 27);

