<?php

return [
    '' => ['controller' => 'HomeController', 'method' => 'index'],
    'user/login' => ['controller' => 'UserController', 'method' => 'login'],
    'user/register' => ['controller' => 'UserController', 'method' => 'register'],
    'user/profile' => ['controller' => 'UserController', 'method' => 'profile'],

    // ✨ ESEMPIO: NUOVE ROTTE da aggiungere qui!
    'blog' => ['controller' => 'BlogController', 'method' => 'index'],
    'blog/post' => ['controller' => 'BlogController', 'method' => 'showPost'],
    'about' => ['controller' => 'PageController', 'method' => 'about'],
    'contact' => ['controller' => 'PageController', 'method' => 'contact'],
];

