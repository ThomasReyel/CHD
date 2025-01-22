<?php

Route::get('/', '/Pages/home.php') -> only('');
Route::get('/login','/Pages/users/login.php')-> only('');
Route::get('/cadastroOng','/Pages/users/cadastroOng.php')-> only('');
Route::get('/cadastroUser','/Pages/users/cadastroUser.php')-> only('');
Route::get('/termos','/Pages/users/termos.html')-> only('');

Route::get('/admin','/Pages/admin/listar.php')-> only('');
Route::post('/editarDoador','/Pages/admin/editarDoador.php')-> only('');
Route::post('/editarOng','/Pages/admin/editarOng.php')-> only('');

Route::get('/doador','/Pages/doador.php')-> only('');
Route::get('/ong','/Pages/ong.php')-> only('');

Route::post('/cadastrarUser','/Controllers/auth/cadastrarUser.php')-> only('');
Route::post('/cadastrarOng','/Controllers/auth/cadastrarOng.php')-> only('');
Route::post('/logar','/Controllers/auth/logar.php')-> only('');
Route::post('/logout','/Controllers/auth/logout.php')-> only('');

Route::post('/excluirOng','/Controllers/Changers/ong/excluir.php')-> only('');
Route::post('/edicaoOng','/Controllers/Changers/ong/edicao.php')-> only('');
Route::post('/excluirDoador','/Controllers/Changers/doador/excluir.php')-> only('');
Route::post('/edicaoDoador','/Controllers/Changers/doador/edicao.php')-> only('');

Route::get('/fechar','/Controllers/auth/fechar.php')-> only('');
Route::post('/problemaseu','/Pages/esquecersenha.html')-> only('');