<?php

$data = [
    'year' => date('Y'),
    'strings' => [
        'ru' => [
            'index' => [
                'firstRow' => 'Стратегия | Концепция | Разработка | Аналитика',
                'secondRow' => 'WebGL | React.js | Laravel',
                'anyQuestions' => 'По любым вопросам',
                'agenciesLabel' => 'проектов по заказу агентств',
                'clientsLabel' => 'проектов по заказу клиентов',
                'years' => 'лет работы',
                'inWebIndustry' => 'в веб\u2011индустрии',
                'npfSberbanka' => 'НПФ\u00a0Сбербанка',
                'andOthers' => 'и других',
                'trusted' => 'Нам доверяют'
            ],
            'page404' => [
                'pageNotFound' => 'Страница не найдена',
                'youCanReturn' => 'Вы можете перейти на',
                'mainPage' => 'главную страницу',
                'contactUs' => 'или связаться с нами'
            ],
            'footer' => [
                'psrn' => 'ОГРНИП',
                'inn' => 'ИНН'
            ],
        ],
        'en' => [
            'index' => [
                'firstRow' => 'Strategy | Conception | Development | Analytics',
                'secondRow' => 'WebGL | React.js | Laravel',
                'anyQuestions' => 'If you have any questions',
                'agenciesLabel' => 'projects from digital agencies',
                'clientsLabel' => 'projects from clients',
                'years' => 'years',
                'inWebIndustry' => 'in web industry',
                'npfSberbanka' => 'Sberbank PPF',
                'andOthers' => 'and others',
                'trusted' => 'Trusted by'
            ],
            'page404' => [
                'pageNotFound' => 'We are sorry, but requested page was not found',
                'youCanReturn' => 'You can either return to',
                'mainPage' => 'main page',
                'contactUs' => 'or contact us'
            ],
            'footer' => [
                'psrn' => 'PSRN',
                'inn' => 'INN'
            ]
        ]
    ]
];

echo json_encode($data);
