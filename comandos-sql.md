# Criando as tabelas 

```sql
CREATE TABLE categorias(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL
);
```
```sql
CREATE TABLE produtos(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    descricao TINYTEXT, 
    preco DECIMAL(5,2) NOT NULL,
    categoria_id INT NOT NULL  -- chave estrangeira
);
```
```sql
CREATE TABLE pedidos(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    precototal VARCHAR(45) NOT NULL,
    produto_id INT NOT NULL , -- chave estrangeira
    usuario_id INT NOT NULL -- chave estrangeira
);
```
```sql
CREATE TABLE usuario(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(150) NOT NULL,
    email MEDIUMTEXT NOT NULL , 
    senha VARCHAR(45) NOT NULL,
    data_de_cadastro DATETIME NOT NULL
);
```

# Adicionando CHAVE ESTRANGEIRA

```sql
ALTER TABLE produtos 
ADD CONSTRAINT fk_categoria 
FOREIGN KEY (categoria_id) 
REFERENCES categorias(id);
```

```sql
ALTER TABLE pedidos 
ADD CONSTRAINT fk_produto 
FOREIGN KEY (produto_id) 
REFERENCES produtos(id);
```

```sql
ALTER TABLE pedidos 
ADD CONSTRAINT fk_usuario 
FOREIGN KEY (usuario_id) 
REFERENCES usuario(id);
```