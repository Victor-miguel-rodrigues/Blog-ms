# Portal de Notícias MS

Portal de notícias de Mato Grosso do Sul feito do zero com **PHP** no back end e **HTML, CSS e JavaScript** no front end. O projeto está em andamento: o front end já está pronto e o back end (banco de dados, login e CRUD) está em construção.

## Visual

Design simples e chamativo em **preto, branco e azul**, com fonte monoespaçada (Ubuntu Mono), cards com bordas retas e sombra azul de destaque.

<!-- Adicione aqui os prints do projeto, por exemplo:
![Página inicial](docs/home.png)
-->

## O que já está feito

- [x] Página inicial com cabeçalho, menu e rodapé
- [x] Notícia em destaque
- [x] Filtros por cidade (Corumbá, Campo Grande e Dourados)
- [x] Lista de notícias, uma embaixo da outra, em cards com imagem, cidade, data, título, resumo e link "Ler Notícia"
- [x] Layout responsivo: card "deitado" acima de 600px e "quadrado" (imagem em cima) até 600px
- [x] Tela de login em HTML
- [x] Rota de teste da API em PHP, consumida no front com `fetch` e `async/await`
- [x] Estrutura do back end com rotas e controllers

## O que vem a seguir

- [ ] Banco de dados MySQL (tabelas de usuários e notícias)
- [ ] Notícias vindas do banco, montadas no front com JavaScript
- [ ] Filtro por cidade feito no PHP
- [ ] Paginação com 10 notícias por página
- [ ] Login com sessão e senha com hash
- [ ] CRUD de notícias para usuários logados: criar, editar e excluir
- [ ] Página da notícia aberta
- [ ] Upload de imagem de capa

## Tecnologias

- PHP
- Composer
- HTML5, CSS3 e JavaScript (sem frameworks)
- MySQL (planejado)
- XAMPP (ambiente local)

## Estrutura do projeto

```
crud-simples/
├── index.php
├── .htaccess
├── composer.json
├── public/
│   ├── css/style.css
│   ├── js/script.js
│   └── view/
│       ├── index.html
│       └── login.html
├── route/
│   └── rotas.php
└── src/
    └── controller/
        ├── ApiController.php
        └── TestController.php
```

## Como rodar localmente

1. Instale o [XAMPP](https://www.apachefriends.org/) e inicie o Apache.
2. Clone o repositório dentro da pasta `htdocs`:
   ```bash
   cd C:\xampp\htdocs
   git clone <URL-DO-REPOSITORIO> crud-simples
   ```
3. Instale as dependências do Composer:
   ```bash
   cd crud-simples
   composer install
   ```
4. Abra no navegador: `http://localhost/crud-simples/`

## Autor

