<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a>
<div align="center">
	<code><img width="55" src="https://user-images.githubusercontent.com/25181517/192107858-fe19f043-c502-4009-8c47-476fc89718ad.png" alt="REST" title="REST"/></code>
	<code><img width="55" src="https://user-images.githubusercontent.com/25181517/192108891-d86b6220-e232-423a-bf5f-90903e6887c3.png" alt="Visual Studio Code" title="Visual Studio Code"/></code>
	<code><img width="55" src="https://user-images.githubusercontent.com/25181517/192109061-e138ca71-337c-4019-8d42-4792fdaa7128.png" alt="Postman" title="Postman"/></code>
	<code><img width="55" src="https://user-images.githubusercontent.com/25181517/183570228-6a040b9f-3ddf-47a2-a201-743121dac664.png" alt="php" title="php"/></code>
	<code><img width="55" src="https://user-images.githubusercontent.com/25181517/183896128-ec99105a-ec1a-4d85-b08b-1aa1620b2046.png" alt="MySQL" title="MySQL"/></code>
</div>
<br>
<br>

# Trabalho para Conclusão da Disciplina Criação de Api Rest Básica com PHP
## Professor João Vitor da Costa Andrade

<br>


Aplicação API Rest usando PHP e um banco de dados MySQL. Sistema para gerenciamento de tarefas utilizando Laravel. O sistema é capaz de:

- ## Listar todas as tarefas

	````http://localhost:8000/api/tasks````

- ## Obter detalhes de uma tarefa específica

	````http://localhost:8000/api/tasks/<numeroID_da_tarefa>````
- ## Criar uma nova tarefa
	Utilizando um software como Postman fazer o POST para:

	````http://localhost:8000/api/tasks````

	Incluindo no corpo as informações como "titulo", "descricao" e "status".
- ## Atualizar os dados de uma tarefa existente
	Utilizando um software como Postman fazer o PUT para:
	````http://localhost:8000/api/tasks/<numeroID_da_tarefa>````
	
	Incluindo os dados a serem adicionados naquela tarefa.



- ## Excluir uma tarefa
	Utilizando um software como Postman fazer o DELETE para:
	````http://localhost:8000/api/tasks/<numeroID_da_tarefa>````
- ## Configurar a listagem das tarefas em ordem crescente ou descrente por qualquer ítem da lista.
	Usando o navegador ou utilizando um software como Postman fazer o GET para:
	````http://localhost:8000/api/tasks/?ordenar_por=titulo&ordenar_direcao=desc````

	Onde "ordenar_por" pode ser substituido por 'descricao' ou 'status'.
	E ordenar_direcao pode ser substituido por 'asc' para ordenar de forma crescente.
- ## Paginação da quantidade de tarefas.
	Usando o navegador ou utilizando um software como Postman fazer o GET para:
	````http://localhost:8000/api/tasks?por_pagina=10````

	Onde pode-se estipular quantas tarefas serão exibidas por página.


<br>

## Link para Video de Orientação

<br>

<a title="API REST Usando PHP, MySQL, XAMPP e VS Code" href="https://youtu.be/UlFEoBVVIIw"><img width="256" alt="YouTube Logo 2017" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/YouTube_Logo_2017.svg/256px-YouTube_Logo_2017.svg.png"></a>

<br>

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
