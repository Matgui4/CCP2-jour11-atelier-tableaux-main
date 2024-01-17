<?php

return [
    // C'est bien vide ici 👀
    "users" => [
        [
            "id" => 0,
            "name" => "Mathis DOCKER",
            "email" => "Mat@docker.superfort",
            "isAdmin" => "YES",

            "contactDetails" => [
                "address" => [
                    "ligne" => "42",
                    "rue" => "la desertion des insertions",
                    "code postal" => "3630",
                ],
                "phoneNumber" => "118 218",
            ],
            
            "posts" => [
                [
                    "id" => 0,
                    "title" => "les patates sont cuites",
                    "excerpt" => "c'est que le feu ça brule mais des fois c'est froid",
                    "comments" => [
                        [
                            "content" => "vfegervvgreb",
                        ],
                    ]
                ]
            ],
        ],
    ],
];
