<?php

// IN this class please put all your SQL fuctions as functions

class QueryBuilder {

    protected $pdo;

    public function __construct($pdo) {

        $this->pdo = $pdo;
    }
    //
    //This function Selects everything from  specific table
    // to call it just App::get('database')->selectAll('[GIVE THE NAME OF YOUR TABLE]')
    public function selectAll(String $table) {

        $statement = $this->pdo->prepare("select * from {$table}");

        if (!$statement->execute()) {

            throw new \Exception("Something is up with your Select {$statement}!");
        }

        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }
    //This function inserts anything to a specific table
  // to call it just App::get('database')->insert('[GIVE THE NAME OF YOUR TABLE]','[GIVE THE ITEMS TO INSERT')
    public function insert($table, $parameters) {

        $sql = sprintf(
            'insert into %s (%s) values (%s)',

            $table,

            implode(', ', array_keys($parameters)),

            ':' . implode(', :', array_keys($parameters))
        );

        try {

            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (\Exception $e) {

            throw new \Exception('Something is up with your Insert!' . $e->getMessage());
            die();
        }
    }
    public function selectWhere(String $table, String $column, $columnValue) {

        $statement = $this->pdo->prepare("select * from {$table} where {$column} = {$columnValue};");

        if (!$statement->execute()) {

            throw new \Exception("Something is up with your Select {$statement}!");
        }

        return $statement->fetch(\PDO::FETCH_ASSOC);
    }

}
