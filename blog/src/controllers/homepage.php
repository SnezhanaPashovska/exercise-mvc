<?php

require_once ('src/model.php');

function homepage()
{
  $posts = getPosts();

  require_once('templates/homepage.php');
}