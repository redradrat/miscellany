<?php

return [
    'index' => [
        'title' => 'Notes',
        'description' => 'Manage the notes of :name.',
        'add' => 'New Note',
        'header' => 'Notes of :name',
    ],
    'create' => [
        'title' => 'Create a new note',
        'description' => '',
        'success' => 'Note \':name\' created.',
    ],
    'show' => [
        'title' => 'Note :name',
        'description' => 'A detailed view of a note',
        'tabs' => [
            'description' => 'Description'
        ]
    ],
    'edit' => [
        'title' => 'Edit Note :name',
        'description' => '',
        'success' => 'Note \':name\' updated.',
    ],
    'destroy' => [
        'success' => 'Note \':name\' removed.',
    ],
    'relations' => [
        'create' => [
            'title' => 'Create a relation for :name',
            'description' => '',
        ],
        'edit' => [
            'title' => 'Update relation for :name',
            'description' => '',
        ],
    ],

    'fields' => [
        'name' => 'Name',
        'type' => 'Type',
        'image' => 'Image',
        'description' => 'Description',
        'is_private' => 'Private',
    ],
    'placeholders' => [
        'name' => 'Name of the note',
        'type' => 'Religion, Race, Political system',
    ],
    'hints' => [
        'is_private' => 'Hide from "Viewers"',
    ],
];
