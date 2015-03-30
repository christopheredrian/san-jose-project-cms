<?php
function get_post($var)
{
# This function strips out any character that a hacker may have
# inserted in order to break into or alter your database
//    return mysql_real_escape_string($_POST[$var]);
//    return mysql_entities_fix_string($_POST[$var]);
    return sanitize_string($_POST[$var]);
}

# Functions to prevent both SQL and XSS injection attacks
function mysql_entities_fix_string($string)
{
    return htmlentities(mysql_fix_string($string)); // For XSS attacks
}

# For SQL attacks
function mysql_fix_string($string)
{
    if (get_magic_quotes_gpc()) {
        $string = stripslashes($string);
    }
    return mysql_real_escape_string($string);
}

/**
 * Sanitize string
 *
 * One usage is for $_POST variables
 * @param $var
 * @return string
 */
function sanitize_string($var)
{
    $var = stripslashes($var);
    $var = htmlentities($var);
    $var = strip_tags($var);
    return $var;
}

/**
 * Sanitize string for database security
 * This uses the mysqli oop function
 * @param $connection
 * @param $var
 */
function sanitize_mysql($connection, $var)
{
    $var = $connection->real_escape_string($var);
    // Check
    // http://stackoverflow.com/questions/1970880/store-html-entities-in-database-or-convert-when-retrieved
    //$var = sanitize_string($var);	
    return $var;
}