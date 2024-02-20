composer.json
34  "predis/predis": "^2.2",
    
config/database.php    
'client' => env('REDIS_CLIENT', 'predis'),
