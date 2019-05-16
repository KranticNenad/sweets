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

        final public function getById(int $id)
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

        final private function isFieldValueValid(string $fieldName, $fieldValue): bool{
            $fields = $this->getFields();
            $supportedFieldNames = array_keys($fields);
            if (!in_array($fieldName,$supportedFieldNames)){
                print_r($fieldName);
                print_r($supportedFieldNames);
                return false;
            }
            return $fields[$fieldName]->isValid($fieldValue);
        }

        final public function getByFieldName (string $fieldName, $value){
            if (!$this->isFieldValueValid($fieldName, $value)){
                throw new \Exception("Invalid field name or value for " . $fieldName . " " . $value);
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

        final public function getAll (){
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

        final public function getAllByFieldName (string $fieldName, $value) : array{
            if (!$this->isFieldValueValid($fieldName, $value)){
                throw new \Exception("Invalid field name or value for " . $fieldName . " " . $value);
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

        final private function checkFieldList (array $data){
            $fields = $this->getFields();

            $supportedFieldNames = array_keys($fields);
            $requestedFieldNames = array_keys($data);

            foreach( $requestedFieldNames as $requestedFieldName){
                if (!in_array($requestedFieldName, $supportedFieldNames)){
                    throw new \Exception("Field " . $requestedFieldName . " is not supported!");
                }

                if (!$fields[$requestedFieldName]->isEditable()){
                    throw new \Exception('Field ' . $requestedFieldName . " is not editable!");
                }
                
                if (!$fields[$requestedFieldName]->isValid($data[$requestedFieldName])){
                    throw new \Exception('The value for the field ' . $requestedFieldName . " is not valid!");
                }
            }
        }

        final public function add (array $data){
            $this->checkFieldList($data);

            $tableName = $this->getTableName();
            $fieldNames = implode(", ", array_keys($data)); 
            $questionMarks = str_repeat("?,", count($data));
            $questionMarks = substr($questionMarks, 0, -1);

            $query = "INSERT INTO {$tableName} ({$fieldNames}) VALUES ({$questionMarks});";
            $prep = $this->dbc->getConnection()->prepare($query);
            $res = $prep->execute(array_values($data));

            if (!$res){
                return false;
            }
            
            return $this->dbc->getConnection()->lastInsertId();
        }

        final public function editById (int $id, array $data){
            $this->checkFieldList($data);

            $tableName = $this->getTableName();
            $editList = [];
            $values = [];
            foreach($data as $fieldName => $value){
                $editList[] = "{$fieldName} = ?";
                $values[] = $value;
            }
            $values[] = $id;
            $editString = implode(", ", $editList);

           $query = "UPDATE {$tableName} SET {$editString} WHERE {$tableName}_id = ?;";
           $prep = $this->dbc->getConnection()->prepare($query);
           return $prep->execute(array_values($values));
        }

        final public function deleteById(int $id)
        {
            $tableName = $this->getTableName();
            $query = "DELETE FROM " . $tableName . " WHERE " . $tableName . "_id = ?";
            $prep = $this->dbc->getConnection()->prepare($query);
            return $prep->execute([$id]);
        }

    }