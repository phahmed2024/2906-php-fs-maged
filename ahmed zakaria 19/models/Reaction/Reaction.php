<?php
require_once 'load.php';
class Reaction extends Model\Model
{
    const REACTIONS_TABLE = 'reactions';
    const REACTION_TYPES_TABLE = 'reaction_types';
    static function all_reactions($post_id)
    {
        $reactions_table = DB_PREFIX . static::REACTIONS_TABLE;
        $reaction_types_table = DB_PREFIX . static::REACTION_TYPES_TABLE;
        $qry = "SELECT $reaction_types_table .type, COUNT(*) as count FROM $reactions_table left outer join $reaction_types_table  on $reactions_table.reaction_type_id=$reaction_types_table .id WHERE post_id = $post_id GROUP BY type";
        // self::all_assoc($qry);
        $reactions = [];
       
        while ($row = self::assoc($qry)) {
            $reactions[$row['type']] = $row['count'];
        }
        return $reactions;
    }

}