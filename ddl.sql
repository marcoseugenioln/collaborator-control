-- Cria tabela de Unidades
CREATE TABLE IF NOT EXISTS Unidades (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	nome_fantasia TEXT(300),
	razao_social TEXT(300),
	cnpj TEXT(14),
	CONSTRAINT unidade UNIQUE (cnpj)
);

-- Cria tabela de Colaboradores
CREATE TABLE IF NOT EXISTS Colaboradores (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	unidade_id TEXT(300),
	nome TEXT(300),
	cpf TEXT(11),
    email TEXT(300),
	CONSTRAINT colaborador UNIQUE (cpf),
    FOREIGN KEY (unidade_id) REFERENCES Unidades(id)
);

-- Cria tabela de Cargos
CREATE TABLE IF NOT EXISTS Cargos (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	cargo TEXT(300),
    FOREIGN KEY (unidade_id) REFERENCES Unidades(id)
);

-- Cria tabela de cargo de colaborador
CREATE TABLE IF NOT EXISTS Cargo_Colaborador (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	cargo_id INTEGER,
    colaborador_id INTEGER,
    nota_desempenho INTEGER,
    FOREIGN KEY (cargo_id) REFERENCES Cargos(id),
    FOREIGN KEY (colaborador_id) REFERENCES Colaboradores(id)
);

