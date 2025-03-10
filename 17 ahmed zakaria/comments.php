<?php
require_once 'load.php';


foreach ($comments as $comment) {
    $replies=Replay::all($comments['id']);
    require 'components/comments/card.php';
    
     }