# Federação V2 – Relatório do Projeto
##Descrição

O projeto **Federação V2** consiste numa aplicação web desenvolvida em **Laravel (PHP)**, destinada à gestão de clubes e utilizadores, permitindo o registo, edição, listagem e remoção de dados através de uma interface web moderna.

Esta versão representa uma evolução do [Federação](https://github.com/andr-zhan), substituindo a implementação em PHP puro por um framework profissional, permitindo melhor organização do código, maior segurança e maior rapidez no desenvolvimento.

A aplicação segue o padrão MVC (Model–View–Controller) implementado pelo Laravel, garantindo separação entre lógica de negócio, apresentação e acesso a dados.

### O projeto foi desenvolvido com foco em:

- Operações CRUD assíncronas  


**Linguagem:** PHP  
**Arquitetura:** MVC (Model–View–Controller)  
**Base de Dados:** MySQL
**Frontend:** HTML, CSS, JavaScript  
**Bibliotecas:** Bootstrap, jQuery, DataTables

## **Arquitetura Geral**
```

┌──────────────────────────┐
│          Views           │  ← Interface do utilizador
│ (HTML, CSS, Blade)    │
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
│ (PDO / MySQL)            │
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

## Fluxo de Funcionamento (Exemplo CRUD)

- O utilizador interage com a View

- É enviado um pedido web.php para o Controller

- O Controller valida os dados recebidos

- O Controller comunica com o Model

- O Model executa as operações na base de dados

- O Controller devolve a resposta

- A View apresenta o feedback ao utilizador

## Autor

- [Manuel Silvestre]((https://github.com/Wand-DenaXy))

