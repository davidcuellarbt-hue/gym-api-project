<?php
require 'vendor/autoload.php';
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;
$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'gateway01.us-east-1.prod.aws.tidbcloud.com',
    'database'  => 'gym_db',
    'username'  => '4PdfpZzDzZDR2Ds.root',
    'password'  => 'MHgBPuCbpoq8u853',
    'port'      => 4000,
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
]);
$capsule->bootEloquent();

header('Content-Type: application/json');
// Consulta de prueba:
$socios = Capsule::table('Socio')->get();
echo json_encode($socios);