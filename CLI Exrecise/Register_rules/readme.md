# Register rules

```php
<?php

define('MIN_USERNAME_LENGTH', 4);
define('MIN_PASSWORD_LENGTH', 6);

function checkRegistrationRules(array $credentials): array
{
    $passed_credentials = [];
    foreach ($credentials as [$username, $password]) {
        if ($username === "quera" || $username === "admin" || strlen($username) < MIN_USERNAME_LENGTH) {
            continue;
        } elseif (strlen($password) < MIN_PASSWORD_LENGTH || ctype_digit($password)) {
            continue;
        } else {
            $passed_credentials[] = $username;
        }
    }
    return $passed_credentials;
}

?>
```