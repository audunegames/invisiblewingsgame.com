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
    'trailer' => 'https://www.youtube.com/embed/JCrAeKzTidU',
  ],
  'links' => [
    'contact' => 'https://danaedekker.com/contact',
    'people' => [
      'danae_dekker' => 'https://danaedekker.com/',
      'maricu_mana' => 'https://twitter.com/Maricu_Mana',
      'katherine_tole' => 'https://katherinetole.com/',
    ],
    'social' => [
      'steam' => 'https://store.steampowered.com/app/1419380/Invisible_Wings/',
      'itch_io' => 'https://audune.itch.io/invisiblewings',
      'twitter' => 'https://twitter.com/AuduneGames',
    ],
  ],
];

// Run!
$feather->run();
