<?php

return [
    'create'                            => [
        'description'           => 'Opprett ny kampanje',
        'helper'                => [
            'first'     => 'Takk for at du prøver appen vår! Før vi kan fortsette må du gi oss en enkel ting: ditt <b>kampanje navn</b>. Dette er det navnet til verden din som separerer den fra de andre, så den må være unik. Hvis du ikke kommer på et godt navn trenger du ikke bekymre deg, du kan <b>alltid endre det senere<b/>, eller lage flere kampanjer.',
            'title'     => 'Velkommen til :name',
            'welcome'   => <<<'TEXT'
Før du fortsetter må du velge et navn til kampanjen din. Dette er det verdenen din kommer til å hete. Hvis du ikke kommer på et godt navn trenger du ikke bekymre deg. Du kan alltid forandre det senere eller opprette flere kampanjer.

Takk for at du blir med Kanka, og velkommen til vårt trivende samfunn.
TEXT
,
        ],
        'success'               => 'Kampanje opprettet.',
        'success_first_time'    => 'Din kampanje har blittt opprettet! Siden det er din første kampanje har vi lagt til et par ting for å hjelpe deg på veien videre og forhåpentligvis gi deg en smule inspirasjon om hva du kan gjøre med Kanka.',
        'title'                 => 'Ny kampanje',
    ],
    'destroy'                           => [
        'success'   => 'Kampanje fjernet.',
    ],
    'edit'                              => [
        'description'   => 'Endre kampanje',
        'success'       => 'Kampanje oppdatert.',
        'title'         => 'Endre kampanje :campaign',
    ],
    'entity_personality_visibilities'   => [
        'private'   => 'Nye karakterers personlighet er privat som standard.',
    ],
    'entity_visibilities'               => [
        'private'   => 'Nye objekter er private',
    ],
    'errors'                            => [
        'access'        => 'Du har ikke tilgang til denne kampanjen.',
        'unknown_id'    => 'Ukjent kampanje.',
    ],
    'export'                            => [
        'description'   => 'Eksporter kampanjen.',
        'errors'        => [
            'limit' => 'Du har nådd grensen på maks èn eksport per dag. Vennligst prøv igjen i morgen.',
        ],
        'helper'        => 'Eksporter kampanjen din. Et varsel med nedlastnings lenke vil bli gjort tilgjengelig.',
        'success'       => 'Eksporten av din kampanje blir klargjort. Du vil få et varsel fra Kanka med nedlastbar zip-fil så snart den er ferdig.',
        'title'         => 'Kampanje :name Eksport',
    ],
    'fields'                            => [
        'boosted'                       => 'Boostet av',
        'css'                           => 'CSS',
        'description'                   => 'Beskrivelse',
        'entity_count'                  => 'Objekt Antall',
        'entity_personality_visibility' => 'Karakter Personliget Synlighet',
        'entity_visibility'             => 'Objekt synlighet',
        'excerpt'                       => 'Utdrag',
        'followers'                     => 'Følgere',
        'header_image'                  => 'Banner Bilde',
        'hide_history'                  => 'Skjul objekts historie',
        'hide_members'                  => 'Skjul kampanje medlemmer',
        'image'                         => 'Bilde',
        'locale'                        => 'Lokale',
        'name'                          => 'Navn',
        'public_campaign_filters'       => 'Offentlige Kampanje Filtere',
        'rpg_system'                    => 'RPG systemer',
        'system'                        => 'System',
        'theme'                         => 'Tema',
        'tooltip_family'                => 'Skjul familienavn fra verktøy tips.',
        'tooltip_image'                 => 'Vis objekt bilde i verktøytips',
        'visibility'                    => 'Synlighet',
    ],
    'following'                         => 'Følger',
    'helpers'                           => [
        'boost_required'                => 'Denne funksjoner krever at kampanjen blir boosta. Mer info på :settings siden.',
        'boosted'                       => 'Noen funskjoner er låst opp fordi denne kampanjen blir boosta. Finn ut mer på :settings siden.',
        'css'                           => 'Skriv din egen CSS som lastet inn i sidene til din kampanje. Vennligst noter at all misbruk av denne funksjonen kan resultere i fjerningen av din tilpassede CSS. Gjentatte eller grove brudd kan føre til fjerningen av din kampanje.',
        'entity_personality_visibility' => 'Når du skaper en ny karakter blir "Personlighet Synlig" valget automatisk ikke valgt.',
        'entity_visibility'             => 'Når du lager et nytt objekt blir "Privat" valget automatisk ikke valgt.',
        'excerpt'                       => 'Kampanje utdraget blir vist på dashbordet, så skriv et par setninger som introduserer verdenen din. Ikke gjør den for lang så du får best resultat.',
        'hide_history'                  => 'Slå på dette for å skule objekters historie til ikke-administratorer i kampanjen.',
        'hide_members'                  => 'Skru dette på for å skjule kampanjens medlems liste for ikke-administatorer.',
        'locale'                        => 'Språket kampanjen din er skrevet i. Dette blir brukt for å generere innhold til og å gruppere offentlige kampanjer.',
        'name'                          => 'Din kampanje/verden kan ha hvilken som helst navn så lenge det inneholder minst 4 bokstaver eller tall.',
        'public_campaign_filters'       => 'Hjelp andre med å finne kampanjen iblant andre offentlige kampanjer ved å tilføye følgende informasjon.',
        'system'                        => 'Hvis kampanjen din er offentlig synlig blir systemet vist i :link siden.',
        'systems'                       => 'For ikke å belemre brukere med forskjellige valg, er noen funksjoner i Kanka kun tilgjengelige med spesifike rollespill systemer (dvs. D&D 5e monster stat blocken). Ved å legge til støttede systemer her vil muliggjøre noen av de funksjonene.',
        'theme'                         => 'Påtving temaet til kampanjen som overstyrer brukerens preferanse.',
        'view_public'                   => 'For å se kampanjen din som en offentlig bruker hadde sett den, åpne :link i en inkognito fane.',
        'visibility'                    => 'Å gjøre en kampanje offentlig betyr at hvem som helst med en lenke til den kan se den.',
    ],
    'index'                             => [
        'actions'   => [
            'new'   => [
                'title' => 'Ny Kampanje',
            ],
        ],
        'title'     => 'Kampanje',
    ],
    'invites'                           => [
        'actions'               => [
            'add'   => 'Inviter',
            'copy'  => 'Kopier lenken til ditt dashbord',
            'link'  => 'Ny lenke',
        ],
        'create'                => [
            'button'        => 'Inviter',
            'description'   => 'Inviter en venn til kampanjen din',
            'link'          => 'Link opprettet: <a href=":url" target="_blank">:url</a>',
            'success'       => 'Invitasjon sendt.',
            'title'         => 'Inviter noen til din kampanje',
        ],
        'destroy'               => [
            'success'   => 'Invitasjon fjernet.',
        ],
        'email'                 => [
            'link'      => '<a href=":link">Bli med :name\'s kampanje</a>',
            'subject'   => ':name har invitert deg til sin kampanje på kanka.io! Bruk følgende lenke for å akseptere invitasjonen.',
            'title'     => 'Invitasjon fra :name',
        ],
        'error'                 => [
            'already_member'    => 'Du er allerede medlem i den kampanjen.',
            'inactive_token'    => 'Dette tokenet er allerede brukt, eller så fins ikke kampanjen lenger.',
            'invalid_token'     => 'Dette tokenet er ikke gyldig.',
            'login'             => 'Vennligst logg inn eller registrer deg for å bli med i kampanjen.',
        ],
        'fields'                => [
            'created'   => 'Sendt',
            'email'     => 'Epost',
            'role'      => 'Rolle',
            'type'      => 'Type',
            'validity'  => 'Gyldighet',
        ],
        'helpers'               => [
            'email'     => 'Våre eposter er ofte markert som søppelpost og det kan ta opp til et par timer før den dukker opp i innboksen din.',
            'validity'  => 'Hvor mange brukere som kan bruke denne lenken før den er utgått. La stå tom for ubegrenset.',
        ],
        'placeholders'          => [
            'email' => 'Epost addresse til personen du ønsker å invitere',
        ],
        'types'                 => [
            'email' => 'Epost',
            'link'  => 'Lenke',
        ],
        'unlimited_validity'    => 'Ubegrenset',
    ],
    'leave'                             => [
        'confirm'   => 'Er du sikker på at du vil forlate :name kampanjen? Du vill ikke kunne ha tilgang til den lenger, med mindre en Administrator inviterer deg igjen.',
        'error'     => 'Kunne ikke forlate kampanjen.',
        'success'   => 'Du har forlatt kampanjen.',
    ],
    'members'                           => [
        'actions'               => [
            'switch'        => 'Bytt',
            'switch-back'   => 'Tilbake til min bruker.',
        ],
        'create'                => [
            'title' => 'Legg til medlem til din kampanje',
        ],
        'description'           => 'Ordne medlemmene i kampanjen din',
        'edit'                  => [
            'description'   => 'Endre på et medlem i kampanjen din',
            'title'         => 'Endre på medlem :name',
        ],
        'fields'                => [
            'joined'        => 'Ble med',
            'last_login'    => 'Siste innlogging',
            'name'          => 'Bruker',
            'role'          => 'Rolle',
            'roles'         => 'Roller',
        ],
        'help'                  => 'Kampanjer kan ha et ubegrenset antall medlemmer.',
        'helpers'               => [
            'admin' => 'Som et medlem av kampanjens administrator rolle kan du invitere nye bruker, fjerne inaktive medlemmer og endre deres tillatelser.',
            'switch'=> 'Bytt til denne brukeren.',
        ],
        'impersonating'         => [
            'message'   => 'Du ser kampanjen som en annen bruker. Noen funksjoner har blitt skrudd av, men resten fungerer akkurat som bruker ser det. For å bytte tilbake til din bruker, bruk Bytt Tilbake knappen som befinner seg hvor Logg Ut knappen pleier å være.',
            'title'     => 'Etterligne :name',
        ],
        'invite'                => [
            'description'   => 'Du kan invitere venner til å bli med i din kampanje ved å gi dem en Invitasjons Lenke. Når de aksepterer invitasjonen, blir de lagt til som medlem i den forespurte rollen. Du kan også sende invitasjonen via epost så lenge det ikke er en Hotmail addresse, som alltid blokkerer Kankas eposter.',
            'more'          => 'Du kan opprette flere roller på :link.',
            'roles_page'    => 'Roller siden',
            'title'         => 'Inviter',
        ],
        'roles'                 => [
            'member'    => 'Medlem',
            'owner'     => 'Administrator',
            'player'    => 'Spiller',
            'public'    => 'Offentlig',
            'viewer'    => 'Seer',
        ],
        'switch_back_success'   => 'Du er nå tilbake i din opprinnelige bruker.',
        'title'                 => 'Kampanje :name Medlemmer',
        'your_role'             => 'Din rolle: <i>:role</i>',
    ],
    'panels'                            => [
        'boosted'   => 'Boosta',
        'dashboard' => 'Dashbord',
        'permission'=> 'Tillatelse',
        'sharing'   => 'Deling',
        'systems'   => 'Systemer',
        'ui'        => 'Grensesnitt',
    ],
    'placeholders'                      => [
        'description'   => 'En kort oppsumering av kampanjen din.',
        'locale'        => 'Språkkode',
        'name'          => 'Ditt kampanje navn',
        'system'        => 'D&D, Pathfinder, Fate, DSA',
    ],
    'roles'                             => [
        'actions'       => [
            'add'   => 'Opprett en rolle',
        ],
        'create'        => [
            'success'   => 'Rolle opprettet.',
            'title'     => 'Opprett en rolle til :name',
        ],
        'description'   => 'Ordne rollene i kampanjen',
        'destroy'       => [
            'success'   => 'Role fjernet.',
        ],
        'edit'          => [
            'success'   => 'Rolle oppdatert.',
            'title'     => 'Endre Roller :name',
        ],
        'fields'        => [
            'name'          => 'Navn',
            'permissions'   => 'Tillatelser',
            'type'          => 'Type',
            'users'         => 'Brukere',
        ],
        'helper'        => [
            '1' => 'En kampanje kan ha så mange roller man vil ha. "Administrator" Rollen har automatisk tilgang til alt i kampanjen, men alle andre roller kan ha spesifike tillatelser på forskjellige typer objekter (karakterer, steder, osv).',
            '2' => 'Objekter kan ha tilpassede tillatelser ved å se "Tillatelser" kategorien på et objekt. Denne kategorien vises når kampanjen har flere roller eller medlemmer.',
            '3' => 'Man kan enten bruke',
        ],
        'hints'         => [
            'campaign_not_public'   => 'Offentlig rollen har tillatelser men kampanjen er privat. Du kan endre dette på Deling kategorien når man redigerer kampanjen.',
            'public'                => 'Offentlig rollen blir brukt når noen blar gjennom din offentlige kampanje. :more',
            'role_permissions'      => 'Gjør at \':name\' rollen kan gjøre følgende handlinger på alle objekter.',
        ],
        'members'       => 'Medlemmer',
        'permissions'   => [
            'actions'   => [
                'add'           => 'Opprett',
                'delete'        => 'Slett',
                'edit'          => 'Rediger',
                'entity-note'   => 'Objekt Notater',
                'permission'    => 'Tillatelser',
                'read'          => 'Visning',
                'toggle'        => 'Endre for alle',
            ],
            'helpers'   => [
                'entity_note'   => 'Dette gjør at brukere som ikke har Rediger tillatelsen til et Objekt kan legge til Objekt Notater til det.',
            ],
            'hint'      => 'Denne rollenhar automatisk tilgang til alt.',
        ],
        'placeholders'  => [
            'name'  => 'Rollens navn',
        ],
        'show'          => [
            'description'   => 'Medlemmer og Tillatelser i en kampanje rolle',
            'title'         => 'Kampanje Rolle \':role\'',
        ],
        'title'         => 'Kampanje :name Roller',
        'types'         => [
            'owner'     => 'Administrator',
            'public'    => 'Offentlig',
            'standard'  => 'Standard',
        ],
        'users'         => [
            'actions'   => [
                'add'   => 'Legg til medlem',
            ],
            'create'    => [
                'success'   => 'Bruker lagt til rollen.',
                'title'     => 'Legg til et medlem til :name rollen.',
            ],
            'destroy'   => [
                'success'   => 'Bruker fjernet fra rollen.',
            ],
            'fields'    => [
                'name'  => 'Navn',
            ],
        ],
    ],
    'settings'                          => [
        'actions'       => [
            'enable'    => 'Skru på',
        ],
        'boosted'       => 'Denne funksjonen er i tidlig tilgang og kun tilgjengelig for :boosted.',
        'description'   => 'Skru moduler i kampanjen av eller på.',
        'edit'          => [
            'success'   => 'Kampanje innstillinger oppdatert.',
        ],
        'helper'        => 'Alle moduler i en kampanje kan bli skrudd av eller på når man ønsker. Ved å slå av en modul skjuler man alle grensesnitts elementer relatert til det, og tidligere eksisterende objekter blir skjult men finnes enda i bakgrunnen i tilfelle du ombestemmer deg. Disse endringene påvirker alle brukere i kampanjen, inkludert Administratorer.',
        'helpers'       => [
            'abilities'     => 'Opprett Egenskaper, om det er feats, spells, eller krefter som kan tildeles objekter.',
            'calendars'     => 'Et sted som definerer kalenderene i din verden.',
            'characters'    => 'Folkene som bor i din verden.',
            'conversations' => 'Fiktive samtaler mellom karakterer eller mellom kampanje brukere. Denne modulen er ikke lenger støttet.',
            'dice_rolls'    => 'En måte å håndtere terning kast til de som bruker Kanka til rollespill kampanjer. Denne modulen er ikke lenger støttet.',
            'events'        => 'Helligdager, festivaler, høytider, bursdager, kriger.',
            'families'      => 'Klaner eller familier, deres relasjoner og medlemmer.',
            'items'         => 'Våpen, kjøretøy, relikvier, eliksirer.',
            'journals'      => 'Observasjoner skrevet av karakterer, eller økt forberedelse til Dungeon Masteren.',
            'locations'     => 'Planeter, plataner, kontinenter, elver, stater, bosettinger, templer, kroer.',
            'maps'          => 'Last opp kart med lag og markører som peker til objekter i kampanjen.',
            'menu_links'    => 'Tilpassede meny lenker i sidefeltet.',
            'notes'         => 'Historie, religion, magi, raser.',
            'organisations' => 'Sekter, militærenheter, fraksjoner, laug.',
            'quests'        => 'For å holde styr på forskjellige oppdrag med karakterer og steder.',
            'races'         => 'Hvis din kampanje har mer en én rase vil dette hjelpe deg med å holde styr på dem.',
            'tags'          => 'Hvert objekt kan ha flere etiketter. Etiketter kan høre til andre etiketter og innlegg kan filtreres etter etiketter.',
            'timelines'     => 'Representer din verdens historie med tidslinjer.',
        ],
        'title'         => 'Kampanje :name Moduler',
    ],
    'show'                              => [
        'actions'       => [
            'boost' => 'Boost kampanje',
            'edit'  => 'Rediger Kampanje',
            'leave' => 'Forlat Kampanje',
        ],
        'description'   => 'Et detaljert overblikk på en kampanje',
        'tabs'          => [
            'default-images'    => 'Standard Bilder',
            'export'            => 'Eksport',
            'information'       => 'Informasjon',
            'members'           => 'Medlemmer',
            'menu'              => 'Meny',
            'plugins'           => 'Plugins',
            'recovery'          => 'Gjenopprettelse',
            'roles'             => 'Roller',
            'settings'          => 'Moduler',
        ],
        'title'         => 'Kampanje :name',
    ],
    'ui'                                => [
        'helper'    => 'Bruk disse innstillingene for å endre måten enkelte elementer blir vist i kampanjen.',
    ],
    'visibilities'                      => [
        'private'   => 'Privat',
        'public'    => 'Offentlig',
        'review'    => 'Venter Vurdering',
    ],
];
