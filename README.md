<h2 align="center">LaraVueHotels</h2>

<p align="center">
    <a href="#">
        <img alt="License" src="https://img.shields.io/github/license/Weavous/LaraVueHotels">
    </a>
    <a href="#">
        <img alt="License" src="https://img.shields.io/github/languages/count/Weavous/LaraVueHotels">
    </a>
    <a href="#">
        <img alt="License" src="https://img.shields.io/github/last-commit/Weavous/LaraVueHotels">
    </a>
    <a href="#">
        <img alt="License" src="https://img.shields.io/github/followers/MagicalStrangeQuark?style=social">
    </a>
</p>

<p align="center">Development of an application to find houses for rent</p>

<h4 align="center">Teste Prático - WebQuarto</h4>

• Crie uma aplicação, usando `Laravel 7+`, `Vue.JS 2+` e `Bootstrap 3` ou `4` que contenha as seguintes funcionalidades:
    
    ◦ Cadastro de anúncio de imóveis com as seguintes informações: Titulo, foto, descrição, valor do aluguel e endereço.

    ◦ Crie também as demais operações básicas para os anúncios: atualização e remoção.

    ◦ Crie uma tela de visualização que me permita ver os detalhes do anúncio cadastrado.
        
        ▪ Tente incluir nessa tela um mapa com um marcador no local no endereço do imóvel. Isso pode ser feito através da api do GoogleMaps (Use esta chave da api: AIzaSyAguy7ew8yFFChGqWNsmbWzn_OkfgCF-mE)

<h6 align="center">Tarefas opcionais (Tente executar, se tiver tempo)</h6>

• Após o cadastro do anúncio, use a mesma api do Google Maps para buscar e salvar a latitude e longitude do imóvel, de acordo com o endereço preenchido.

• Na tela de detalhes do anúncio, inclua uma lista com outros 4 anúncios próximos a este, dentro de um raio de 50 Km.

<h6 align="center">Considerações</h6>

• Tente completar o máximo que puder, da tarefa. Mesmo que não consiga concluir todos os pontos, não desista, nos mande o que você conseguir fazer.

• Caso você não consiga concluir um ou mais pontos específicos da tarefa, tente descrever pra gente como você tentou fazê-lo, e qual foi sua dificuldade.

• Busque aplicar o máximo de Design Patterns que conhecer. Por exemplo: Repository, Abstract Factory, etc. A organização do código é muito importante.

• Faça a validação dos formulários tanto nos componentes em frontend, como no Laravel.

<h6 align="center">Como entregar</h6>

• Disponibilize todo o código em um repositório público do Github, Gitlab ou Bitbucket.

• Inclua nos projeto as migrations usadas para criar a estrutura do banco de dados.

• Chave da api do GoogleMaps a ser usada: `AIzaSyAguy7ew8yFFChGqWNsmbWzn_OkfgCF-mE`

<h6 align="center">Comandos</h6>

```bash
    composer create-project laravel/laravel backend
```

```bash
    cd backend
    
    php artisan serve
```

```bash
    php artisan make:model Address -a

    php artisan make:model Property -a
```

```sql
    CREATE DATABASE laravel;

    SHOW DATABASES;

    USE laravel;

    SHOW TABLES;
```

```bash
    php artisan migrate:fresh --seed
```

```bash
    vue init webpack-simple frontend

    cd frontend

    npm install

    npm run dev
```