<?php return array(
    'root' => array(
        'name' => 'pantheon-systems/wp-saml-auth',
        'pretty_version' => 'dev-master',
        'version' => 'dev-master',
        'reference' => '071561263b934e598a256e11694ef51e73de942c',
        'type' => 'wordpress-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => false,
    ),
    'versions' => array(
        'onelogin/php-saml' => array(
            'pretty_version' => '4.1.0',
            'version' => '4.1.0.0',
            'reference' => 'b22a57ebd13e838b90df5d3346090bc37056409d',
            'type' => 'library',
            'install_path' => __DIR__ . '/../onelogin/php-saml',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'pantheon-systems/wp-saml-auth' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => '071561263b934e598a256e11694ef51e73de942c',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'robrichards/xmlseclibs' => array(
            'pretty_version' => '3.1.1',
            'version' => '3.1.1.0',
            'reference' => 'f8f19e58f26cdb42c54b214ff8a820760292f8df',
            'type' => 'library',
            'install_path' => __DIR__ . '/../robrichards/xmlseclibs',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);
