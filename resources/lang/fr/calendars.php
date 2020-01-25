<?php

return [
    'actions'       => [
        'add_epoch'         => 'Ajouter une époque',
        'add_intercalary'   => 'Ajouter des jours intercalaires',
        'add_month'         => 'Ajouter un mois',
        'add_moon'          => 'Ajouter une lune',
        'add_season'        => 'Ajouter une saison',
        'add_week'          => 'Ajouter un nom de semaine',
        'add_weekday'       => 'Ajouter un jour de semaine',
        'add_year'          => 'Ajouter un nom d\'année',
        'set_today'         => 'Définir en tant que jour actuel',
        'today'             => 'Aujourd\'hui',
    ],
    'checkboxes'    => [
        'is_recurring'  => 'A lieu chaque année',
    ],
    'create'        => [
        'description'   => 'Créer un nouveau calendrier',
        'success'       => 'Nouveau calendrier \':name\' créé.',
        'title'         => 'Nouveau Calendrier',
    ],
    'destroy'       => [
        'success'   => 'Calendrier \':name\' supprimé.',
    ],
    'edit'          => [
        'description'   => 'Modification de calendrier',
        'success'       => 'Calendrier \':name\' modifié.',
        'title'         => 'Modifier le calendrier :name',
        'today'         => 'Date du calendrier mise à jour.',
    ],
    'event'         => [
        'actions'   => [
            'existing'  => 'Entité Existante',
            'new'       => 'Nouvel Événement',
            'switch'    => 'Choix différent',
        ],
        'create'    => [
            'description'   => 'Créer un événement de calendrier',
            'success'       => 'Evénement de calendrier ajouté.',
            'title'         => 'Ajouter un événement de calendrier à :name',
        ],
        'destroy'   => 'Evénement retiré du calendrier \':name\'.',
        'edit'      => [
            'description'   => 'Modifier un événement de calendrier',
            'success'       => 'Evénement de calendrier modifié.',
            'title'         => 'Modifier un événement de calendrier pour :name',
        ],
        'helpers'   => [
            'add'   => 'Ajouter un événement à ce calendrier en utilisant la liste à choix.',
            'new'   => 'Ou créer un nouveu événement en indiquant un nom.',
        ],
        'modal'     => [
            'title' => 'Ajouter un événement au calendrier',
        ],
        'success'   => 'Evénement \':event\' ajouté au calendrier.',
    ],
    'events'        => [
        'description'   => 'Evénements dans ce calendrier',
        'title'         => 'Evénements du calendrier :name',
    ],
    'fields'        => [
        'colour'                => 'Couleur',
        'comment'               => 'Commentaire',
        'current_day'           => 'Jour Actuel',
        'current_month'         => 'Mois actuel',
        'current_year'          => 'Année actuelle',
        'date'                  => 'Date actuelle',
        'has_leap_year'         => 'Année bissextile',
        'intercalary'           => 'Jours Intercalaires',
        'is_incrementing'       => 'Incrément de date',
        'is_recurring'          => 'Récurrent',
        'leap_year_amount'      => 'Jours à ajouter',
        'leap_year_month'       => 'Mois',
        'leap_year_offset'      => 'Chaque',
        'leap_year_start'       => 'Année bissextile',
        'length'                => 'Durée de l\'événement',
        'length_days'           => ':count jour|:count jours',
        'months'                => 'Mois',
        'moons'                 => 'Lunes',
        'name'                  => 'Nom',
        'parameters'            => 'Paramètres',
        'recurring_periodicity' => 'Périodicity de récurrence',
        'recurring_until'       => 'Récurrent jusqu\'à l\'année',
        'reset'                 => 'Réinitialisation de semaine',
        'seasons'               => 'Saisons',
        'start_offset'          => 'Décalage de début',
        'suffix'                => 'Suffix',
        'type'                  => 'Type',
        'week_names'            => 'Nom de semaine',
        'weekdays'              => 'Jours de la semaine',
    ],
    'helpers'       => [
        'month_type'    => 'Les mois intercalaires n\'utilisent pas les jours de la semaine, mais ont quand-même une influence sur les lunes et saisons.',
        'start_offset'  => 'Un calendrier commence par défaut le premier jour de la première semaine de l\'année 0. Modifier ce champ permet d\'influencer quand le premier jour tombe.',
    ],
    'hints'         => [
        'intercalary'       => 'Les jours tombants hors des mois et semaines standards. Ils n\'influenceronts pas le jour de semaine.',
        'is_incrementing'   => 'Un calendrier avec cette option vera son jour actuel automatiquement avancer chaque jour à 00:00 UTC.',
        'is_recurring'      => 'Un événement peut être récurrent. Il réapparaitera chaque année à la même date.',
        'months'            => 'Le calendrier doit avoir au moins 2 mois.',
        'moons'             => 'Chaque lune sera affichée dans le calendrier lors de la pleine lune.',
        'reset'             => 'Toujours commencer le début du mois sur le premier jour de la semaine.',
        'seasons'           => 'Les saisons seront affichées dans le calendrier lorsqu\'elles commencent.',
        'weekdays'          => 'Un calendrier doit posséder au moins 2 jours dans la semaine.',
        'weeks'             => 'Les semaines importantes du calendrier peuvent avoir un nom.',
        'years'             => 'Certaines années sont tellement importantes qu\'elles ont leur propre nom.',
    ],
    'index'         => [
        'add'           => 'Nouveau Calendrier',
        'description'   => 'Gestion des calendriers pour :name.',
        'header'        => 'Calendriers de :name',
        'title'         => 'Calendrier',
    ],
    'layouts'       => [
        'month' => 'Mois',
        'year'  => 'Année',
    ],
    'modals'        => [
        'switcher'  => [
            'title' => 'Changement d\'année',
        ],
    ],
    'month_types'   => [
        'intercalary'   => 'Intercalaire',
        'standard'      => 'Standard',
    ],
    'options'       => [
        'events'    => [
            'recurring_periodicity' => [
                'month' => 'Chaque mois',
                'year'  => 'Chaque année',
            ],
        ],
        'resets'    => [
            ''      => 'Aucun',
            'month' => 'Mois',
            'year'  => 'Année',
        ],
    ],
    'panels'        => [
        'intercalary'   => 'Jours Intercalaires',
        'leap_year'     => 'Année bissextile',
        'months'        => 'Mois',
        'weeks'         => 'Semaines',
        'years'         => 'Nom d\'années',
    ],
    'parameters'    => [
        'intercalary'   => [
            'length'    => 'Durée en jour',
            'month'     => 'A la fin de quel mois',
            'name'      => 'Nom de l\'intercalaire',
        ],
        'month'         => [
            'alias' => 'Alias de mois',
            'length'=> 'Nombre de jours',
            'name'  => 'Nom du mois',
            'type'  => 'Type',
        ],
        'moon'          => [
            'fullmoon'  => 'Pleine lune chaque (jours)',
            'name'      => 'Nom de la lune',
            'offset'    => 'Décalage de la première pleine lune',
        ],
        'seasons'       => [
            'day'   => 'Jour de départ',
            'month' => 'Mois de départ',
            'name'  => 'Nom de la saison',
        ],
        'weeks'         => [
            'name'      => 'Nom de la semaine',
            'number'    => 'Nombre',
        ],
        'year'          => [
            'name'      => 'Nom',
            'number'    => 'Année',
        ],
    ],
    'placeholders'  => [
        'colour'            => 'Couleur',
        'comment'           => 'Anniversaire, festival, solstice',
        'date'              => 'La date actuelle',
        'leap_year_amount'  => 'Nombre de jours à ajouter lors d\'une année bissextile',
        'leap_year_month'   => 'Mois durant lequel les jours sont à ajouter',
        'leap_year_offset'  => 'Nombre d\'années entre chaque année bissextile',
        'leap_year_start'   => 'Première année bissextile',
        'length'            => 'Durée de l\'événement en jours',
        'months'            => 'Nombre de mois dans une année',
        'name'              => 'Nom du calendrier',
        'recurring_until'   => 'Année de dernière réoccurence (laisser vide pour infini)',
        'seasons'           => 'Nombre de saisons',
        'suffix'            => 'Suffix de l\'époque actuelle (AC, BC)',
        'type'              => 'Type de calendrier',
        'weekdays'          => 'Nombre de jours dans une semaine',
    ],
    'show'          => [
        'description'       => 'Vue détaillée d\'un calendrier',
        'missing_details'   => 'Le calendrier ne peut pas être affiché. Un calendrier a besoin d\'au moins 2 mois et de 2 jours de la semaine pour être affiché correctement.',
        'moon_full_moon'    => 'Pleine lune de :moon',
        'moon_new_moon'     => 'Nouvelle lune de :moon',
        'moon_waning_moon'  => 'Lune décroissante de :moon',
        'moon_waxing_moon'  => 'Lune croissante de :moon',
        'tabs'              => [
            'events'        => 'Evénements',
            'information'   => 'Information',
            'weather'       => 'Météo',
        ],
        'title'             => 'Calendrier :name',
    ],
];
