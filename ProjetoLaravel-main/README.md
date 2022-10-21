<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<h3>Requisitos</h3>
-Composer <br>
-Node JS <br>
-PHP <br>  

<h4>Todos instalados corretamente, podemos clonar o projeto. <h4>
<h3>Comandos para instalação</h3>
◦git clone	

Executar o comando<br>
◦composer install 

Agora, vamos	copiar	o	arquivo<br>
.env.example para	um	novo	arquivo	.env<br>
◦comando -> cp .env.example .env<br>

Próximo passo gerar a chave de aplicação<br>
◦php artisan key:generate<br>

Vamos desenvolver um sistema web, voltado para controle de PetShop.<br>

Configurando o Banco de Dados<br>
Mudaremos	o	.env adicionando	as	configurações	do	banco	de	dados	de	nossa	aplicação.<br>

Vamos	apenas	criar	o	banco	de	dados	(projeto)	no	nosso	SGBD.<br> 
◦ Execute	o	comando	de	execução	de	migrations->php artisan migrate

Por fim, dar o comando pra subir o projeto no servidor <br>
◦php artisan serve

