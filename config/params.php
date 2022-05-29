<?php

return [
    'adminEmail' => 'admin@example.com',
    'senderEmail' => 'noreply@example.com',
    'senderName' => 'Example.com mailer',
    'jwt' => [
        'issuer' => 'http://example.com',  //name of your project (for information only)
        'audience' => 'http://example.org',  //description of the audience, eg. the website using the authentication (for info only)
        'id' => '4f1g23a12aa',  //a unique identifier for the JWT, typically a random string
        'expire' => 300,  //the short-lived JWT token is here set to expire after 5 min.
    ],
];
