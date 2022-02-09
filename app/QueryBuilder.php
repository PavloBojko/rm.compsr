<?php

namespace App;

use Aura\SqlQuery\QueryFactory;
use PDO;

class QueryBuilder
{
    private $pdo;
    private $queryFactory;


    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=localhost;dbname=rahmur", "root", "");
        $this->queryFactory = new  QueryFactory('mysql');
    }
    public function get_ALL($table)
    {
        echo '<h3>Получить всю таблицу</h3>';

        $select = $this->queryFactory->newSelect();

        $select->cols(['*']);
        $select->from($table);


        $sth = $this->pdo->prepare($select->getStatement());

        $sth->execute($select->getBindValues());

        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function Insert($data, $table)
    {
        echo '<h3>Вставляем в таблицу</h3>';

        $insert = $this->queryFactory->newInsert();

        $insert->into($table)->cols($data);

        $sth = $this->pdo->prepare($insert->getStatement());

        $sth->execute($insert->getBindValues());
    }
    public function Update($data, $id, $table)
    {
        echo '<h3>Обновить в табл.</h3>';
        $update = $this->queryFactory->newUpdate();

        $update
            ->table($table)
            ->cols($data)
            ->where('id = :id')
            ->bindValue('id', $id);

        $sth = $this->pdo->prepare($update->getStatement());

        $sth->execute($update->getBindValues());
    }
    public function Delade($id, $table)
    {
        echo '<h3>Удалить в табл.</h3>';

        $delete = $this->queryFactory->newDelete();

        $delete
            ->from($table)                   
            ->where('id = :id')         
            ->bindValue('id', $id);   

        $sth = $this->pdo->prepare($delete->getStatement());

        $sth->execute($delete->getBindValues());
    }
    //
}
