<?php 

$users = [
    [
        'name' => "Dmitriy",
        'surname' => "Labzov",
        'age' => 16,
        'is_developer' => true,
    ],
    [
        'name' => "Dmitriy",
        'surname' => "Gorbunov",
        'age' => 10,
        'is_developer' => true,
    ],
    [
        'name' => "Ilya",
        'surname' => "Vorobey",
        'age' => 10,
        'is_developer' => true,
    ],
    [
        'name' => "Denis",
        'surname' => "Popov",
        'age' => 10,
        'is_developer' => true,
    ],
    
];

 print('<pre>');
 print_r($users);
 print('</pre>');

// 1. Написать функцию, которая будет возвращать одного user’а (из первого задания) в виде ассоциативного массива.
function getUser()

{
    return     [
        'name' => "Dmitriy",
        'surname' => "Labzov",
        'age' => 16,
        'is_developer' => true,
    ];
}

print('<pre>');
print_r(getUser());
print('</pre>');

// 2. Написать функцию, которая будет возвращать массив user’ов, используя функцию из первого пункта + цикл for() или while()
function getUsers()
{
    $usersList = [];
    while (count($usersList) <= 4) {
        array_push($usersList, getUser());
    }
    return $usersList;
}

print('<pre>');
print_r(getUsers());
print('</pre>');
