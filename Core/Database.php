<?php

class Database
{
    const HOST = 'localhost';
    const USERNAME = 'postgres';
    const PASSWORD = '123456';
    const DB_NAME = 'lession2';
    const OPTIONS ='--client_encoding=UTF8';

    private $connect;

    public function connect(){
        $this->connect = pg_connect(self::HOST, self::OPTIONS, self::USERNAME,
            self::PASSWORD, self::DB_NAME);
        // if(pg_connect_error() === 0) {
        //     return $this->connect;
        // }
    }
}