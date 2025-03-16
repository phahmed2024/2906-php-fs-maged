<style>
    .parent {
        display: flex;
        perspective: 1000px;
        padding: 20px 50px;
        flex-wrap: wrap;
        border: solid;
        width: 320px;

    }
</style>
<?php
require_once 'load.php';


$users = User\User::show_user($user_id);


require 'components/users/card.php';

