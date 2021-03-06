<?php

return [
    'actions'   => [
        'add'   => 'Добавить изображение',
    ],
    'create'    => [
        'error'     => 'Ошибка при сохранении изображений по умолчанию. Они уже есть у типа :type?',
        'success'   => 'Изображение по умолчанию для типа :type создано',
        'title'     => 'Новое изображение по умолчанию',
    ],
    'destroy'   => [
        'success'   => 'Изображение по умолчанию для типа :type удалено',
    ],
    'helper'    => 'Определите собственные изображения по умолчанию для объектов вашей кампании. Они будут использоваться в разных списках, но не на страницах самих объектов.',
    'index'     => [
        'title' => 'Изображения объектов по умолчанию',
    ],
    'title'     => 'Изображения по умолчанию объектов кампании :campaign',
];
