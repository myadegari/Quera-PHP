# Get extension

```php
<?php
function getExtension(string $str): string
{
    $str = explode('.', $str);
    if (sizeof($str) > 1) {
        return $str[sizeof($str) - 1];
    }
    return "";
}

?>
```
the best way to get extension of a file name is to use `pathinfo` function.

Learn about string  functions:
- `strlen`
- `strpos`,`stripos`
- `str_contains`
- `str_starts_with`
- `str_ends_with`
- `str_replace`
- `substr`
- `explode`
- `implode`
- `ltrim`,`trim`,`rtrim`
- `print_f`
- `strtolower`, `strtoupper`,`ucfirst`,`ucwords`