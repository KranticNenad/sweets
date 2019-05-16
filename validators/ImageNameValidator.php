<?php
    namespace App\Validators;

    use App\Core\Validator;

    class ImageNameValidator implements Validator{
        private $extensions;

        public function __construct(){
            $this->extensions = [];
        }

        public function &setExtensions(array $extensionsToAdd): ImageNameValidator{
            foreach ($extensionsToAdd as $extensionToAdd){
                $this->extensions[] = $extensionToAdd;
            }
            return $this;
        }

        public function isValid (string $value): bool{
            /* @^[\w,-][\w, -]*\.(png|jpg|jpeg)$@ */
            $pattern = '@^';

            $pattern .= '[\w,-][\w, -]*';

            if (count ($this->extensions) > 0){
                $pattern .= '\.(';
                foreach ($this->extensions as $extension){
                    $pattern .= $extension . '|';
                }
                $pattern = substr($pattern, 0, -1);
                $pattern .= ')';
            }
            
            $pattern.= '$@';
            
            return boolval(preg_match($pattern, $value));   
        }
    }