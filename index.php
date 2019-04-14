<!DOCTYPE html>
<html lang="ru">


<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <title>Дела в порядке</title>
</head>

<body class="body-background">
<h1 class="visually-hidden">Дела в порядке</h1>
<?php
$visible = rand(0,1);
$menu = ['Входящие','Учеба','Работа','Домашние дела','Авто'];
$tasks = [
    'Собеседование в IT компании' => ['task__date' => '01.12.2018',
                                      'category' => 'Работа',
                                      'status' => false],
    'Выполнить тестовое задание' => ['task__date' => '25.12.2018',
                                     'category' => 'Работа',
                                     'status' => false],
    'Сделать задание первого раздела' => ['task__date' => '21.12.2018',
                                          'category' => 'Учеба',
                                          'status' => true],
    'Встреча с другом' => ['task__date' => '22.12.2018',
                           'category' => 'Входящие',
                           'status' => false],
    'Купить корм для кота' => ['task__date' => 'Нет',
                               'category' => 'Домашние дела',
                               'status' => false],
    'Заказать пиццу' => ['task__date' => 'Нет',
                         'category' => 'Домашние дела',
                         'status' => false]
];

/*
print('<pre>');
print_r($menu);
print_r($tasks);
print('</pre>');
<?php foreach ($menu as $value) : ?>
<p> <?= $value ?> </p>
<?php endforeach; ?>

if (!$visible) {
    $tasks = unset($tasks(array_search('Да')));
}
*/
unset($menu[0]);
print_r($menu);
?>



<table>
<?php if (!$visible) {
    foreach ($tasks as $key => $value) {
        if ($value['status']) {
            unset($tasks[$key]);
        }
    }
}
foreach ($tasks as $task => $info) : ?>
    <tr>
        <td><?= $task ?> </td>
        <?php  array_pop($info);
        foreach ($info as $class => $value) :?>

            <td><?= $value ?> </td>
        <?php endforeach; ?>
    </tr>
<?php endforeach; ?>
</table>







</body>
</html>
