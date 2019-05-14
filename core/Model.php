<?php
    namespace App\Core;

    abstract class Model{
        private $dbc;

        final public function __construct(DatabaseConnection &$dbc)
        {
            $this->dbc = $dbc;
        }

        final protected function getConnection(){
            return $this->dbc->getConnection();
        }

        protected function getFields(): array{
            return [];
        }

        final private function getTableName(): string{
            $fullName = static::class;
            $matches = [];
            preg_match('|^.*\\\((?:[A-Z][a-z]+)+)Model$|', $fullName, $matches);
            $className = $matches[1] ?? "";
            $underscoredClassName = preg_replace('|[A-Z]|', '_$0', $className);
            $lowerCaseUnderscoredClassName = strtolower($underscoredClassName);
            return substr($lowerCaseUnderscoredClassName, 1);
        }

        public function getById(int $id)
        {
            $tableName = $this->getTableName();
            $query = "SELECT * FROM " . $tableName . " WHERE " . $tableName . "_id = ?";
            $prep = $this->dbc->getConnection()->prepare($query);
            $res = $prep->execute([$id]);
            $object = NULL;
            if ($res) {
                $object = $prep->fetch(\PDO::FETCH_OBJ);
            }
            return $object;
        }

        private function isFieldNameValid(string $fieldName): bool{
            return boolval(preg_match('|^[a-z][a-z_0-9]+[a-z0-9]$|', $fieldName));
        }

        public function getByFieldName (string $fieldName, $value){
            if (!$this->isFieldNameValid($fieldName)){
                throw new \Exception("Invalid field name: " . $fieldName);
            }
            $tableName = $this->getTableName();
            $query = "SELECT * FROM " . $tableName . " WHERE " . $fieldName . "_id = ?";
            $prep = $this->dbc->getConnection()->prepare($query);
            $res = $prep->execute([$value]);
            $object = NULL;
            if ($res) {
                $object = $prep->fetch(\PDO::FETCH_OBJ);
            }
            return $object;
        }

        public function getAll (){
            $tableName = $this->getTableName();
            $query = "SELECT * FROM " . $tableName;
            $prep = $this->dbc->getConnection()->prepare($query);
            $res = $prep->execute();
            $objects = [];
            if ($res) {
                $objects = $prep->fetchAll(\PDO::FETCH_OBJ);
            }
            return $objects;
        }

        public function getAllByFieldName (string $fieldName, $value) : array{
            if (!$this->isFieldNameValid($fieldName)){
                throw new \Exception("Invalid field name: " . $fieldName);
            }
            $tableName = $this->getTableName();
            $query = "SELECT * FROM " . $tableName . " WHERE " . $fieldName . " = ?";
            $prep = $this->dbc->getConnection()->prepare($query);
            $res = $prep->execute([$value]);
            $objects = [];
            if ($res) {
                $objects = $prep->fetchAll(\PDO::FETCH_OBJ);
            }
            return $objects;
        }

        public function add (){

        }

    }