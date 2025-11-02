<?php

return [
    'class' => 'yii\db\Connection',
    //'dsn' => 'sqlite:@app/runtime/db/blog.db',
    'dsn' => 'sqlite:/var/www/sqlite/blog.db',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
