# Requisitos do Sistema

Para executar esta aplicação, você precisará dos seguintes softwares instalados:

## 1. PHP

- **Versão:** 8.3.10 ou superior
- **Descrição:** PHP é uma linguagem de script amplamente utilizada para desenvolvimento web. Baixe e instale a versão 8.3.10 ou superior a partir do [site oficial do PHP](https://www.php.net/).

## 2. MySQL

- **Descrição:** MySQL é um banco de dados relacional necessário para armazenar dados da aplicação. Caso utilize o [XAMPP](https://www.apachefriends.org/index.html), o MySQL já estará incluído no pacote.

## 3. Composer

- **Versão:** 6.3
- **Descrição:** Composer é o gerenciador de dependências para PHP. Baixe e instale a versão 6.3 a partir do [site oficial do Composer](https://getcomposer.org/).

## 4. XAMPP

- **Descrição:** XAMPP é uma distribuição que facilita a configuração de um ambiente local com Apache e MySQL. Inclui o Apache Server, PHP e MySQL. Baixe o XAMPP através do [site oficial](https://www.apachefriends.org/index.html).

## 5. phpMyAdmin

- **Versão:** 5.2.1
- **Descrição:** phpMyAdmin é uma ferramenta para gerenciar o MySQL através de uma interface web. Instale a versão 5.2.1 ou superior a partir do [site oficial do phpMyAdmin](https://www.phpmyadmin.net/).

## Instalação de Dependências

Após a instalação dos softwares necessários, você pode instalar as dependências do projeto utilizando o Composer. Execute os seguintes comandos no terminal:

```bash
composer require william-costa/dot-env
composer require william-costa/database-manager
