<?php
/**
 * Created by PhpStorm.
 * User: Andy
 * Date: 19.08.2018
 * Time: 22:12
 */

class ShareModel extends Model
{
    public function Index()
    {
        $this->query('SELECT * FROM shares');
        $rows = $this->resultSet();
        return $rows;
    }
}