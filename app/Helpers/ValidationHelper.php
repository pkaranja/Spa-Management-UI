<?php
if (!function_exists('money')) {
    function money(string $str, string &$error = null): bool {
        if (!preg_match('/^\d+(\.\d{1,2})?$/', $str)) {
            $error = 'The {field} field must be a valid money format.';
            return false;
        }
        return true;
    }
}
