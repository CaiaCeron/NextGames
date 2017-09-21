![logo](http://sisdia.abmes.org.br/images/logo/5000_Logo.jpg)
# **Next Games** 
## **Desenvolvedores do projeto** 
  
  - Alexandre Schmidt  
  - Caiã Ceron  
  - Láudrin Rei Garralaga  
  - Luiz Felipe

## **E-mail para contato** 

   - alexandrep.schmidt@gmail.com  
   - caiaceron@gmail.com  
   - laudrin.garralaga@outlook.com   
   - felipedelibra@hotmail.com
 
 ## **Objetivo** 
 
 O projeto que atualmente se encontra em desenvolvimento tem como o ojetivo a criação de um comércio eletrônico com foco em vendas de games para múltiplas plataformas e equipamentos de hardware tanto para consoles quanto desktop. 
 
 ## **Tecnologias utilizadas** 
 
  - [PHP 7.0](http://www.php.net/)
  - [MySQL 5.6](https://www.mysql.com/)
  - [Laravel 5.4](https://laravel.com/)
  - [Composer 1.4.2](https://getcomposer.org/) 
  
**Link para o site hospedado:** [NextGames](https://nextgamescom.000webhostapp.com) 

  
  ## **Clone do projeto**
  
   
 1. Faça um clone do projeto 
 > git clone git@github.com:AlexandreSchmidt/NextGames.git  
 
 2. Abra o CMD (Windowns) e navegue até o diretório do projeto clonado  
 
 3. Baixe as dependências do projeto digitando ``composer install --no-scripts`` 
 
 4. Utilize o comando `copy .env.example .env` para gerar o arquivo que irá conter informações sobre conexão com banco de dados, serviços SMTP, etc  
 
 5. Será necessário gerar uma [chave de criptografia](https://laravel.com/docs/5.5/encryption) para a aplicaçao usando o comando `php artisan key:generate`
 
 6. Crie um banco de dados com o nome que preferir (ex: nextgames), e feito isso abra o arquivo .env que foi gerado anteriormente e insira nele as informações sobre o nome da banco criado, o nome de usuário e a senha 
 
 7. Para gerar as tabelas do banco será utilizada uma das facilidades do framework, as [_migrations_](https://laravel.com/docs/5.5/migrations), novamente dentro do diretório do projeto no CMD use o comando `php artisan migrate` para que os scripts das tabelas dentro do projeto sejam executados e criem as tabelas no banco  
 
 8. Agora para executar o projeto execute o comando `php artisan serve` para iniciar o servidor de testes e acesse a url `localhost:8000` no navegador para visualizar o projeto
