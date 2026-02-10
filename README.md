# Federação V2 – Relatório do Projeto

## Descrição

O projeto **Federação V2** consiste numa aplicação web desenvolvida em **Laravel (PHP)**, destinada à gestão de **clubes e utilizadores**, permitindo o registo, edição, listagem e remoção de dados através de uma interface web moderna.

Esta versão representa uma evolução do projeto [Federação V1][(https://github.com/Wand-DenaXy/Federacao))], substituindo a implementação em PHP puro por um framework profissional, permitindo melhor organização do código, maior segurança e maior rapidez no desenvolvimento.

A aplicação segue o padrão **MVC (Model–View–Controller)** implementado pelo Laravel, garantindo separação entre lógica de negócio, apresentação e acesso a dados.

| Método | Descrição |
|--------|-----------|
| `criarClube()` | Cria um novo clube. |
| `editarClube/{clube}()` | Edita dados de um clube.|
| `eliminarClube/{clube}` | Remove o Clube selecionado. |



**O projeto foi desenvolvido com foco em:**

- Implementação de CRUD em Laravel

- Organização de código segundo MVC

- Separação entre frontend e backend

- Interface simples e funcional


## **Tecnologias Utilizadas**

**Framework:** Laravel
**Linguagem:** PHP
**Arquitetura:** MVC (Model–View–Controller)
**Base de Dados:** MySQL
**ORM:** Eloquent

**Frontend:**
HTML, CSS, JavaScript

**Bibliotecas:**
Bootstrap jQuery DataTables

## **Interface**

- Bootstrap para layout responsivo

- DataTables para listagens dinâmicas

- JavaScript para interação com o utilizador

## **Arquitetura Geral**
```

┌──────────────────────────┐
│          Views           │  ← Interface do utilizador
│ (Blade, HTML, CSS)       │
└─────────────┬────────────┘
              │
              ▼
┌──────────────────────────┐
│       Controllers        │  ← Lógica de controlo
│ (ControllerClube, etc.)   │
└─────────────┬────────────┘
              │
              ▼
┌──────────────────────────┐
│          Models          │  ← Lógica de negócio e BD
│ (Eloquent / MySQL)       │
└──────────────────────────┘
```

## **Gestão de Utilizadores**

O sistema inclui um módulo de autenticação e controlo de acessos, garantindo segurança e restrição de funcionalidades conforme o perfil do utilizador.

**Funcionalidades**

- Autenticação de utilizadores com sessões PHP

- Suporte a diferentes tipos de utilizador

- Prevenção de acesso não autorizado a áreas restritas

**Tecnologias Utilizadas**

- Tabelas interactivas com DataTables

- Interface responsiva desenvolvida com Bootstrap

**Fluxo de Funcionamento (Exemplo CRUD)**

- O utilizador interage com a View

- A requisição é enviada para uma rota definida em web.php

- A rota encaminha para o Controller

- O Controller valida os dados

- O Model comunica com a base de dados

- O Controller devolve a resposta

## Autor

- [Manuel Silvestre]((https://github.com/Wand-DenaXy))

