<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Online_model extends CI_Model
{
    /**
     * Get all players online of a realm
     *
     * @param int $realm
     * @return array
     */
    public function players($realm)
    {
        $cache = $this->cache->file->get('online_players_' . $realm);

        if ($cache !== false) {
            return $cache;
        }

        $rows = $this->characters->connect($realm)
                    ->select('name, race, class, level, zone')
                    ->where('online', '1')
                    ->order_by('name', 'DESC')
                    ->get('characters')
                    ->result();

        $this->cache->file->save('online_players_' . $realm, $rows, 300);

        return $rows;
    }
}
