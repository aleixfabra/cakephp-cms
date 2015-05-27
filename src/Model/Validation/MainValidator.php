<?php
namespace App\Model\Validation;

use Cake\Validation\Validator;

class MainValidator extends Validator
{
    /**
     * Constructor
     *
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Check if a field coincides with another
     *
     * @param  string $field         Current field data
     * @param  string $compare_field Field to compare
     * @param  array  $context       Context
     * @return bool|string           Return true if fields concides, a string if not
     */
    public static function identicalFields($field, $compare_field, $context) {
        if ($field !== $context['data'][$compare_field]) {
            return __('Passwords do not match');
        }
        return true;
    }
}