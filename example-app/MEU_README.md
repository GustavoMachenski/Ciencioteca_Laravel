para rodar uma migrate nova dar -> migrate
para reverter todas e rodar todas dar ->php artisan migrate:refresh
funções que podem ser uteis:

Você também pode gerar redirecionamentos para ações do controlador . Para fazer isso, passe o nome do controlador e da ação para o actionmétodo:

return redirect()->action(
    [UserController::class, 'profile'], ['id' => 1]
);

return redirect()->action([UserController::class, 'index']);