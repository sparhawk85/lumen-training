<?php

namespace App;

use Illuminate\Database\MySqlConnection;
use Monolog\Logger;

/**
 * Class Article
 *
 * @package App
 */
class Article
{
    /**
     * @param $name
     *
     * @return bool
     */
    public function save($name)
    {
        $db = new MySqlConnection(new \PDO('localhost'));
        $logger = new Logger('file');

        $user = new User();
        $user->setName($name);

        $result = $db->update($user);

        if (!$result) {
            $logger->addInfo('Nie udało się zapisać użytkownika');

            return false;
        }
        $logger->addInfo('Udało się zapisać użytkownika');

        return true;
    }
}