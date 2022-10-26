# Teste de desenvolvedor FullStack Laravel

Neste projeto está descrito o processo de como baixar o projeto, instalar as dependências do laravel utilizando composer, instalar as dependências de FrontEnd usando o nodejs

## Baixando e instalando o projeto

### Pré-requisitos
- Você vai precisar ter o GIT instalado em sua máquina;
- Versão 8.1 do PHP;
- Composer instalado;
- NodeJS e NPM instalados

### Instalando o projeto
Como o projeto está público, então vamos fazer o seguinte:
- Abra o terminal de sua maquina;
- Vá até à pasta onde deseja baixar o projeto;
- Digite o seguinte código ``git clone https://github.com/mateusbandeira182/EletroDomesticos.git``;
- Após a cópia do projeto, entre na pasta do projeto pelo terminal;
- Na pasta, usando o terminal, digite o comando ``composer install``. Esse comando instala as dependências do PHP;
- Depois execute o comando ``npm install``, Esse comando instala as dependências do FrontEnd;
- Para compilar os arquivos do Front-End execute o comando ``npm run dev``;
- Agora vá até o arquivo .env.example e faça uma cópia dele no mesmo caminho, porém com o nome de .env;
- Você deve todas as diretivas de banco de dados do arquivo .env, deixando apenas a diretiva DB_CONNECTION=mysql;
- Após remover as outras configurações, troque a configuração de mysql, para sqlite;
- Vá até à pastas database, e crie um arquivo com o nome de database.sqlite;
- Volte ao terminal e execute o comando ``php artisan migrate``;
- Nesse projeto existe uma classe para preencher alguns itens, execute o comando ``php artisan db:seed --class=MarcaSeeder``;
- No terminal rode o comando ``php artisan key:generate``, para refazer as hashs do laravel;
- Para rodar o projeto, digite ``php artisan serve``;
- Para acessar o projeto é: http://localhost:8000/

## Projeto

O projeto consiste em um cadastro de eletrodomésticos, além de realizar atualização e exclusão

Também tempos um cadastro para marcas, mesmo ela já sendo inseridas no banco pelo comando do artisan;
Marcas podem ser alteradas e excluidas também

### Marcas

Único requisito necessária a essa requisição é o nome da marca

**/marcas** GET
Lista todas as marcas

**/marcas/create** GET
Formulário de cadastro das marcas

**/marcas** POST
Requisito necessário é o **nome**

**/marcas/{marca}/edit** GET
Formulário de Edição

**/marcas/{marca}** PUT
Rota de update de marca

### Eletrodomésticos

São necessários os requisitos: nome, descrição, tensão e id da marca

**/eletrodomesticos** GET
Lista todas as Eletrodomésticos

**/eletrodomesticos/create** GET
Formulário de cadastro de eletrodomésticos

**/eletrodomesticos** POST
Requisitos necessários são o **nome**, **descrição**, **tensão**, **marca_id**

**/eletrodomesticos/{eletrodomestico}** GET
Mostra detalhes do eletrodoméstico

**/eletrodomesticos/{eletrodomestico}/edit** GET
Formulário de Edição

**/eletrodomesticos/{eletrodomestico}** PUT
Rota de update de eletrodoméstico

## Considerações finais

Bom o Back-End foi desenvolvido em Php, usando diversas facilidades que o framework me oferece,
Nos dos modelos eu estou usando injeção de dependência direto no controller, fiz isso para separar melhor as coisas e deixar um controller mais legível.

Devo confessar que ainda não domino nenhum framework de Javascript, mais já é algo que estou estudando nesse momento, vendo a necessidade do mercado.

No projeto eu usei Bootstrap como framework de estilos e as suas funções de Javascript.

Para o desenvolvimento do projeto de front-end, acabou que usei o blade, que já vem junto do Laravel, por ser mais assertivo e rápido no desenvolvimento.

Qualquer dúvida pode entrar em contato que eu eutou a disposição

Mateus de Oliveira Bandeira
(62) 98131-0988
