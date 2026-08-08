<?php

abstract class BaseModel
{
    protected PDO $database;

    public function __construct(?PDO $database = null)
    {
        $this->database = $database ?? databaseConnection();
    }

    protected function fetchAll(string $sql, array $parameters = []): array
    {
        $statement = $this->execute($sql, $parameters);

        return $statement->fetchAll();
    }

    protected function fetchOne(string $sql, array $parameters = []): ?array
    {
        $statement = $this->execute($sql, $parameters);
        $row = $statement->fetch();

        return $row === false ? null : $row;
    }

    protected function execute(string $sql, array $parameters = []): PDOStatement
    {
        $statement = $this->database->prepare($sql);
        $statement->execute($parameters);

        return $statement;
    }
}
