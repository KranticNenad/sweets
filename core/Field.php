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

        public static function editableUnsignedInteger(int $length) : Field{
            return new Field ("|^[1-9][0-9]{0," . ($length-1) . "}$|", true);
        }

        public static function readOnlyUnsignedInteger(int $length) : Field{
            return new Field ("|^[1-9][0-9]{0," . ($length-1) . "}$|", false);
        }

        public static function editableUnicodeLatinString (int $length) : Field{
            return new Field ("|^(\p{Latin} ?){1," . ($length-1) . "}$|u", true);
        }

        public static function readOnlyUnicodeLatinString (int $length) : Field{
            return new Field ("|^(\p{Latin} ?){1," . ($length-1) . "}$|u", false);
        }

        public static function editableImageName () : Field{
            return new Field ("@^[\w,-][\w, -]*\.(png|jpg|jpeg)$@", true);
        }

        public static function readOnlyImageName () : Field{
            return new Field ("@^[\w,-][\w, -]*\.(png|jpg|jpeg)$@", false);
        }

        public static function editableDecimal (int $numbersBeforeDelimiter, int $numbersAfterDelimiter): Field{
            return new Field ('|^[1-9][0-9]{0,' . ($numbersBeforeDelimiter-1) . '}\.?[0-9]{0,' . $numbersAfterDelimiter . '}$|', true);
        }

        public static function readOnlyDecimal (int $numbersBeforeDelimiter, int $numbersAfterDelimiter): Field{
            return new Field ('|^[1-9][0-9]{0,' . ($numbersBeforeDelimiter-1) . '}\.?[0-9]{0,' . $numbersAfterDelimiter . '}$|', false);
        }

        public static function editableDateTime (): Field{
            return new Field ("|^[0-9]{4}\-[0-9]{2}\-[0-9]{2} [0-9]{2}:[0-9]{2}:[0-9]{2}$|", true);
        }
 
        public static function readOnlyDateTime (): Field{
            return new Field ("|^[0-9]{4}\-[0-9]{2}\-[0-9]{2} [0-9]{2}:[0-9]{2}:[0-9]{2}$|", false);
        }

        public static function editableDate (): Field{
            return new Field ("|^[0-9]{4}\-[0-9]{2}\-[0-9]{2}$|", true);
        }

        public static function readOnlyDate (): Field{
            return new Field ("|^[0-9]{4}\-[0-9]{2}\-[0-9]{2}$|", false);
        }

        public static function editableTime (): Field{
            return new Field ("|^[0-9]{2}:[0-9]{2}:[0-9]{2}$|", true);
        }

        public static function readOnlyTime (): Field{
            return new Field ("|^[0-9]{2}:[0-9]{2}:[0-9]{2}$|", false);
        }

        public static function editableTinyInt (): Field{
            return new Field ("|^[01]$|", true);
        }

        public static function readOnlyTinyInt (): Field{
            return new Field ("|^[01]$|", false);
        }

    }