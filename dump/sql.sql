CREATE TABLE user (
	id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    usuario VARCHAR(240),
    email VARCHAR(120),
    data DATE,
    senha VARCHAR(255),
    admin CHAR(1)
);
SELECT * FROM livros;
SELECT * FROM user;
SELECT * FROM autores;
SELECT * FROM user WHERE admin = 1;

SELECT l.nome AS titulo, l.id_livros, l.lancamento, l.descricao, l.preco, a.nome AS autor
              FROM livros AS l
              JOIN autores AS a ON l.id_autores = a.id_autores
              ORDER BY l.preco asc LIMIT 12;

UPDATE user
SET admin = 1
WHERE id_usuario = 1;

ALTER TABLE livros ADD preco FLOAT;