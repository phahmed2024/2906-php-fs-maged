<?php
class Replay{
    const REPLIES_TABLE = 'replies';
    const USERS_TABLE = 'users';
    static function all($c_id)
    {
        $replies_table = DB_PREFIX . static::REPLIES_TABLE;
        $users_table = DB_PREFIX . static::USERS_TABLE;

        $qry = "SELECT reply, $replies_table.updated_at, $users_table.name FROM $replies_table left outer join  $users_table on $replies_table.user_id= $users_table.id where comment_id ='$c_id'";
       
        global $db;
        $result = $db->query($qry);
        $replies = $result->fetch_all(MYSQLI_ASSOC);
        return $replies;
    }
}