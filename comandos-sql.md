-- Criando as tabelas

-- Criando a tabela de CATEGORIAS
```sql
CREATE TABLE categorias (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL
);
```

```sql
-- Criando a tabela de PRODUTOS
CREATE TABLE produtos (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    descricao TINYTEXT,
    preco DECIMAL(5,2) NOT NULL,
    categoria_id INT NOT NULL  -- chave estrangeira
);
```

```sql
-- Criando a tabela de PEDIDOS
CREATE TABLE pedidos (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    usuario_id INT NOT NULL
);
```

```sql
-- Criando a tabela de USUÁRIO
CREATE TABLE usuario (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(150) NOT NULL,
    email MEDIUMTEXT NOT NULL,
    senha VARCHAR(45) NOT NULL,
    data_de_cadastro DATE NOT NULL
);
```

```sql
-- Criando a tabela intermediária entre PEDIDOS e PRODUTOS
CREATE TABLE pedido_produto (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    pedido_id INT NOT NULL,
    produto_id INT NOT NULL,
    quantidade INT DEFAULT 1
);
```

```sql
-- Adicionando chave estrangeira da tabela pedido_produto para produtos
ALTER TABLE pedido_produto
ADD CONSTRAINT fk_produto_pedido
FOREIGN KEY (produto_id)
REFERENCES produtos(id);
```

```sql
-- Adicionando chave estrangeira da tabela pedido_produto para pedidos
ALTER TABLE pedido_produto
ADD CONSTRAINT fk_pedido_produto
FOREIGN KEY (pedido_id)
REFERENCES pedidos(id);
```

```sql
-- Adicionando chave estrangeira da tabela produtos para categorias
ALTER TABLE produtos
ADD CONSTRAINT fk_categoria
FOREIGN KEY (categoria_id)
REFERENCES categorias(id);
```

```sql
-- Adicionando chave estrangeira da tabela pedidos para usuários
ALTER TABLE pedidos
ADD CONSTRAINT fk_usuario
FOREIGN KEY (usuario_id)
REFERENCES usuario(id);
```

```sql
-- Criando uma VIEW para visualizar os pedidos com o valor total calculado automaticamente
CREATE OR REPLACE VIEW view_pedidos_detalhados AS
SELECT 
    pedidos.id AS numero_do_pedido,
    usuario.nome AS nome_do_cliente,
    SUM(produtos.preco * pedido_produto.quantidade) AS valor_total,
    GROUP_CONCAT(produtos.nome SEPARATOR ', ') AS lista_de_produtos
FROM pedidos
JOIN usuario ON pedidos.usuario_id = usuario.id
JOIN pedido_produto ON pedidos.id = pedido_produto.pedido_id
JOIN produtos ON pedido_produto.produto_id = produtos.id
GROUP BY pedidos.id;
```

```sql
-- Adicionando categorias de produtos
INSERT INTO categorias (nome) VALUES
    ('Salgados'),
    ('Doces'),
    ('Bebidas');
```

```sql
-- Adicionando produtos
INSERT INTO produtos (nome, descricao, preco, categoria_id) VALUES
    ('Coca-Cola', 'Refrigerante de lata - 350ml', 10.50, 3),
    ('Bebida de Hibisco e leite', 'Bebida gelada de Hibisco com leite e café.', 22.50, 3),
    ('Capuccino', 'Café expresso, leite vaporizado e uma camada de espuma de leite - 150ml', 15.99, 3),
    ('Quiche Lorraine', 'Quiche de queijo de cabra com cebola e pera caramelizada', 12.59, 1),
    ('Coxinha com Catupiry®', 'Coxinha sem glúten de frango com Catupiry® cremoso', 16.99, 1),
    ('Pizza de queijo de bufala com tomate cereja', 'Pizza de biomassa com queijo de bufala fresco, tomate cereja e um molho de tomata da casa.', 12.99, 1),
    ('Torta de Limão Siciliano', 'Torta de limão com base de amêndoas e avelãs e com um creme de limão siciliano', 16.30, 2),
    ('Cookies de chocolate', 'Cookies de chocolate com gotas de chocolate', 9.99, 2),
    ('Profiteroles', 'Pofiteroles de cereja', 6.90, 2);
```

```sql
-- Adicionando usuários
INSERT INTO usuario (nome, email, senha, data_de_cadastro) VALUES
    ('Julia Moura', 'julia.moura@gmail.com', '123@456@789', '2025-05-05'),
    ('Alana Rocha', 'alana.rocha@gmail.com', '133355555', '2025-02-13'),
    ('Denis bestoides', 'denis.bestoides@gmail.com', '123456789', '2025-05-05');
```

```sql
-- TESTE 1
-- Adicionando um novo peddo ao usuário com id 1
INSERT INTO pedidos (usuario_id) VALUES (1);
```

```sql
-- Inserindo os produtos para o respctivo pedido (id = 1)
INSERT INTO pedido_produto (pedido_id, produto_id, quantidade) VALUES
    (1, 4, 2),  -- 2 Quiches Lorraine
    (1, 1, 1);  -- 1 Coca-Cola
```

```sql
-- Ver os pedidos
SELECT * FROM view_pedidos_detalhados;
```

```sql
-- TESTE 2
-- Novo pedido para usuário id 2
INSERT INTO pedidos (usuario_id) VALUES (2);
```

```sql
-- Inserindo produtos no pedido (id = 2)
INSERT INTO pedido_produto (pedido_id, produto_id, quantidade) VALUES
    (2, 3, 1),
    (2, 8, 1);
```

```sql
-- Ver os pedidos
SELECT * FROM view_pedidos_detalhados;
```