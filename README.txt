## Programação para a Web 1 - 2019.2

## Projeto em PHP/Laravel

**Minimundo: Prontuário Médico**
O projeto consiste em uma pequena aplicação que armazena dados de consultas médicas.

**Tabelas do banco de dados**
- pacientes: dados cadastrais dos pacientes;
- tipos de queixas: classificação das queixas/sintomas apresentadas pelos pacientes (relação de Um Para Muitos com a tabela queixas);
- queixas: queixas/sintomas dos pacientes;
- consultas: relação de Muitos Para Muitos com a tabela queixas e Muitos Para Uma com a tabela pacientes;
- consultas_queixas: tabela pivot no relacionamento entre as tabelas consultas e queixas.


## Passo a passo para executar a aplicação

**Instalação do Docker (exemplo para o Ubuntu 18.04)**
1. Atualização e instalação de pré requesitos:
$ sudo apt update
$ sudo apt install apt-transport-https ca-certificates curl software-properties-common

2. Adicionar chave GPG do repositório oficial do Docker:
$ curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -

3. Atualização e instalação dos novos pacotes do Docker:
$ sudo apt update
$ sudo apt install docker-ce

4. Adicionar o usuário atual ao grupo docker:
$ sudo usermod -aG docker ${USER}
$ su - ${USER}

**Instalação do Docker Compose (exemplo para o Ubuntu 18.04)**
Baixar a versão recente e definir permissões:
$ sudo curl -L https://github.com/docker/compose/releases/download/1.25.0/docker-compose-`uname -s`-`uname -m` -o /usr/local/bin/docker-compose
$ sudo chmod +x /usr/local/bin/docker-compose

**Para executar a plicação**
1. Clonar o repositório do GitHub:
$ git clone https://github.com/josafasdr/laravel-data-med.git

2. Entrar na pasta "laravel-data-med" e executar o comando seguinte:
$ cd laravel-data-med
$ sudo chown $USER:$USER -R src

3. Baixar as imagens do Docker utilizadas no projeto e executá-lo:
$ docker-compose up -d
Caso já exista uma imagem com nome semelhante, remover com o comando:
$ docker rmi data-med_php-fpm

4. Acessar o shell do ambiente criado e mudar permissões:
$ docker exec -it laravel-data-med-php-fpm /bin/bash
$ chmod -R 777 .

5. Baixar as dependências do projeto:
$ composer install

6. Gerar chave da aplicação:
$ php artisan key:generate

7. Executar as migrations do projeto (criação do banco de dados):
$ php artisan migrate

Após estes passos, acessar http://localhost:8080.
Caso a aplicação não carregue, ou exiba outros erros, o comando "chmod -R 777 ." do último passo 4 deve resoulver.

**Alunos do projeto:**
Adriano de Jesus Alves
Josafá Santos dos Reis
Lewroy Lopes
