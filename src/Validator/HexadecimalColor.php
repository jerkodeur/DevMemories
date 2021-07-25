<?php

// src/Validator/HexadecimalColor.php
namespace App\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class HexadecimalColor extends Constraint
{
    public $message = 'Le champ "{{ string }}" ne respecte pas le format de couleur attendu';
}
