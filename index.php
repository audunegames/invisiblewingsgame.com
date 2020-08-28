<?php
require("vendor/autoload.php");

use Danae\Feather\Feather;

// Create the context
$feather = new Feather();

// Add pages
$feather->pages->add('home', ['default' => true]);
$feather->pages->add('presskit', ['title' => 'Press Kit']);

// Create context
$feather->context = [
  'assets' => $feather->base_path . '/assets',
  'embeds' => [
    'trailer' => 'https://www.youtube.com/embed/UB10AQidnxM',
  ],
  'links' => [
    'contact' => 'https://danaedekker.com/contact',
    'people' => [
      'danae_dekker' => 'https://danaedekker.com/',
      'maricu_mana' => 'https://www.deviantart.com/maricu-mana',
    ],
    'social' => [
      'steam' => '#',
      'itch_io' => '#',
      'twitter' => '#',
      'facebook' => '#',
    ],
  ],
];

// Run!
$feather->run();
