<?php
    namespace App\Validators;

    use App\Core\Validator;

    class TinyIntValidator implements Validator{

        public function __construct(){
        }

        public function isValid (string $value): bool{
            $pattern = '|^';

            $pattern .= '[01]';
            
            $pattern.= '$|';
            
            return boolval(preg_match($pattern, $value));   
        }
    }