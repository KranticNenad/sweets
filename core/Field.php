<?php
    namespace App\Core;

    final class Field{
        private $pattern;
        private $editable;

        final public function __construct(string $pattern, bool $editable)
        {
            $this->pattern = $pattern;
            $this->editable = $editable;
        }

        public function isValid(string $value) : bool{
            return boolval(preg_match($this->pattern, $value));
        }

        public function isEditable (): bool{
            return $this->editable;
        }
    }