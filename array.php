<?php
// $arData = [
//     [
//         "type" => "withoutTitle",
//         "title" => "",
//         "value" => "Array task",
//         "marking" => "task",
//         "option" => []
//     ],
//     [
//         "type" => "checkbox",
//         "title" => "Приоритет",
//         "value" => "Это важная задача",
//         "marking" => "checkbox",
//         "option" => [
//             "checked" => "checked"
//         ]
//     ],
//     [
//         "type" => "withoutTitle",
//         "title" => "",
//         "value" => "Array task text",
//         "marking" => "taskText",
//         "option" => []
//     ],
//     [
//         "type" => "element",
//         "title" => "Ответственный",
//         "value" => ["polina8277@mail.ru"],
//         "marking" => "element",
//         "option" => [
//             "button" => [
//                 "name" => "+ Добавить еще"
//             ]
//         ]
//     ],
//     [
//         "type" => "deadline",
//         "title" => "Крайний срок",
//         "value" => "08.02.2024 19:00:00",
//         "marking" => "deadline",
//         "option" => [
//             "extraButton" => [
//                 [
//                     "name" => "Планирование сроков"
//                 ],
//                 [
//                     "name" => "Еще"
//                 ]
//             ]
//         ]
//     ],
//     [
//         "type" => "checkbox",
//         "title" => "Результат задачи",
//         "value" => "Не завершать задачу без результата",
//         "marking" => "checkbox",
//         "option" => [
//             "checked" => "checked"
//         ]
//     ],
//     [
//         "type" => "element",
//         "title" => "Проект",
//         "value" => ["main"],
//         "marking" => "element",
//         "option" => [
//             "button" => [
//                 "name" => "Сменить"
//             ],
//             "extraButton" => [
//                 "name" => "Создать проект"
//             ]
//         ]
//     ],
//     [
//         "type" => "checkbox",
//         "title" => "Учет времени",
//         "value" => "Время для выполнения задачи",
//         "marking" => "checkbox",
//         "option" => [
//             "checked" => "checked"
//         ]
//     ],
//     [
//         "type" => "reminder",
//         "title" => "Напомнить о задаче",
//         "value" => ["28.02.2024 09:00:00 ответственному", "28.02.2024 09:00:00 ответственному"],
//         "marking" => "reminder",
//         "option" => []
//     ],
//     [
//         "type" => "checkbox",
//         "title" => "Повторять задачу",
//         "value" => "Сделать задачу регулярной",
//         "marking" => "checkbox",
//         "option" => [
//             "checked" => "checked"
//         ]
//     ],
//     [
//         "type" => "element",
//         "title" => "CRM",
//         "value" => ["user2"],
//         "marking" => "element",
//         "option" => [
//             "button" => [
//                 "name" => "+ выбрать"
//             ]
//         ]
//     ],
//     [
//         "type" => "element",
//         "title" => "Сделать подзадачей",
//         "value" => ["task1 [6]"],
//         "marking" => "element",
//         "option" => [
//             "button" => [
//                 "name" => "Сменить"
//             ]
//         ]
//     ],
//     [
//         "type" => "element",
//         "title" => "Теги",
//         "value" => ["1", "2", "3", "4"],
//         "marking" => "element",
//         "option" => [
//             "button" => [
//                 "name" => "+ Добавить еще"
//             ]
//         ]
//     ],
//     [
//         "type" => "element",
//         "title" => "Связанные задачи",
//         "value" => ["Скачать приложение Битрикс24 [2]", "task2 [4]"],
//         "marking" => "element",
//         "option" => [
//             "button" => [
//                 "name" => "+ Добавить еще"
//             ]
//         ]
//     ],
// ];
$arData = [
    [
        "type" => "withoutTitle",
        "title" => "",
        "value" => "",
        "marking" => "task",
        "option" => []
    ],
    [
        "type" => "checkbox",
        "title" => "Приоритет",
        "value" => "Это важная задача",
        "marking" => "checkbox",
        "option" => [
            "checked" => "checked"
        ]
    ],
    [
        "type" => "withoutTitle",
        "title" => "",
        "value" => "",
        "marking" => "taskText",
        "option" => []
    ],
    [
        "type" => "element",
        "title" => "Ответственный",
        "value" => [],
        "marking" => "element",
        "option" => [
            "button" => [
                "name" => "+ Добавить"
            ]
        ]
    ],
    [
        "type" => "deadline",
        "title" => "Крайний срок",
        "value" => "",
        "marking" => "deadline",
        "option" => [
            "extraButton" => [
                [
                    "name" => "Планирование сроков"
                ],
                [
                    "name" => "Еще"
                ]
            ]
        ]
    ],
    [
        "type" => "checkbox",
        "title" => "Результат задачи",
        "value" => "Не завершать задачу без результата",
        "marking" => "checkbox",
        "option" => [
            "checked" => "checked"
        ]
    ],
    [
        "type" => "element",
        "title" => "Проект",
        "value" => [],
        "marking" => "element",
        "option" => [
            "button" => [
                "name" => "+ Добавить"
            ],
            "extraButton" => [
                "name" => "Создать проект"
            ]
        ]
    ],
    [
        "type" => "checkbox",
        "title" => "Учет времени",
        "value" => "Время для выполнения задачи",
        "marking" => "checkbox",
        "option" => [
            "checked" => "checked"
        ]
    ],
    [
        "type" => "reminder",
        "title" => "Напомнить о задаче",
        "value" => [],
        "marking" => "reminder",
        "option" => []
    ],
    [
        "type" => "checkbox",
        "title" => "Повторять задачу",
        "value" => "Сделать задачу регулярной",
        "marking" => "checkbox",
        "option" => [
            "checked" => "checked"
        ]
    ],
    [
        "type" => "element",
        "title" => "CRM",
        "value" => [],
        "marking" => "element",
        "option" => [
            "button" => [
                "name" => "+ выбрать"
            ]
        ]
    ],
    [
        "type" => "element",
        "title" => "Сделать подзадачей",
        "value" => [],
        "marking" => "element",
        "option" => [
            "button" => [
                "name" => "+ Добавить"
            ]
        ]
    ],
    [
        "type" => "element",
        "title" => "Теги",
        "value" => [],
        "marking" => "element",
        "option" => [
            "button" => [
                "name" => "+ Добавить"
            ]
        ]
    ],
    [
        "type" => "element",
        "title" => "Связанные задачи",
        "value" => [],
        "marking" => "element",
        "option" => [
            "button" => [
                "name" => "+ Добавить"
            ]
        ]
    ],
];