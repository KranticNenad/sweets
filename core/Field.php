<?php
    namespace App\Core;

    final class Field{
        private $validator;
        private $editable;

        final public function __construct(Validator $validator, bool $editable = true)
        {
            $this->validator = $validator;
            $this->editable = $editable;
        }

        public function isValid(string $value) : bool{
            return $this->validator->isValid($value);
        }

        public function isEditable (): bool{
            return $this->editable;
        }

    }