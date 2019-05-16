<?php
    namespace App\Validators;

    use App\Core\Validator;

    class SetValidator implements Validator{
        private $items;

        public function __construct(){
            $this->items = [];
        }

        public function &setItems(array $itemsToAdd): SetValidator{
            foreach ($itemsToAdd as $itemToAdd){
                $this->items[] = $itemToAdd;
            }
            return $this;
        }

        public function isValid (string $value): bool{
            /* '@^(gram|komad)$@' */
            $pattern = '@^';

            if (count ($this->items) > 0){
                $pattern .= '(';
                foreach ($this->items as $item){
                    $pattern .= $item . '|';
                }
                $pattern = substr($pattern, 0, -1);
                $pattern .= ')';
            }
            
            $pattern.= '$@';
            
            return boolval(preg_match($pattern, $value));   
        }
    }