# Filters Class Documentation

## Overview

The `Filters` class provides a set of methods for filtering and validating various data types in PHP. It is designed to enhance the security and reliability of user input by applying appropriate filters and validations.

### PHP Version Compatibility

The class is developed and tested for PHP version 8.1.0.

### Author Information

- Author: Francisco Santos
- Email: [contato@fcosantos.pt](mailto:contato@fcosantos.pt)

## Class Structure

The `Filters` class is organized with protected properties for different data types and methods for filtering and validating those types.

### Properties

- `$email`: Stores the filtered email.
- `$string`: Stores the filtered string.
- `$int`: Stores the filtered integer.
- `$float`: Stores the filtered float.
- `$url`: Stores the filtered URL.
- `$ip`: Stores the filtered IP address.
- `$boolean`: Stores the filtered boolean.
- `$mac`: Stores the filtered MAC address.
- `$americanDate`: Stores the filtered American date.
- `$brazilianDate`: Stores the filtered Brazilian date.
- `$americanDatetime`: Stores the filtered American date and time.
- `$brazilianDatetime`: Stores the filtered Brazilian date and time.

### Methods

1. **`__construct()`**
   - Description: Class constructor.

2. **`FilterEmail(string $email): mixed`**
   - Description: Filters and validates an email address.
   - Parameters:
     - `$email` (string): The email address to be filtered.
   - Returns:
     - mixed: The filtered email address on success, `false` otherwise.

3. **`FilterString(string $string): mixed`**
   - Description: Filters and sanitizes a string, removing potential SQL injection characters.
   - Parameters:
     - `$string` (string): The string to be filtered.
   - Returns:
     - mixed: The filtered string on success, `false` otherwise.

4. **`FilterInt(int $int): mixed`**
   - Description: Filters and validates an integer.
   - Parameters:
     - `$int` (int): The integer to be filtered.
   - Returns:
     - mixed: The filtered integer on success, `false` otherwise.

5. **`FilterFloat(float $float): mixed`**
   - Description: Filters and validates a float.
   - Parameters:
     - `$float` (float): The float to be filtered.
   - Returns:
     - mixed: The filtered float on success, `false` otherwise.

6. **`FilterUrl(string $url): mixed`**
   - Description: Filters and validates a URL.
   - Parameters:
     - `$url` (string): The URL to be filtered.
   - Returns:
     - mixed: The filtered URL on success, `false` otherwise.

7. **`FilterIp(string $ip): mixed`**
   - Description: Filters and validates an IP address.
   - Parameters:
     - `$ip` (string): The IP address to be filtered.
   - Returns:
     - mixed: The filtered IP address on success, `false` otherwise.

8. **`FilterBoolean(bool $boolean): mixed`**
   - Description: Filters and validates a boolean.
   - Parameters:
     - `$boolean` (bool): The boolean to be filtered.
   - Returns:
     - mixed: The filtered boolean on success, `false` otherwise.

9. **`FilterMac($mac): mixed`**
   - Description: Filters and validates a MAC address.
   - Parameters:
     - `$mac`: The MAC address to be filtered.
   - Returns:
     - mixed: The filtered MAC address on success, `false` otherwise.

10. **`FilterAmericanDate($americanDate): mixed`**
    - Description: Filters and validates an American date in the format YYYY-MM-DD.
    - Parameters:
      - `$americanDate`: The American date to be filtered.
    - Returns:
      - mixed: The filtered American date on success, `false` otherwise.

11. **`FilterBrazilianDate($brazilianDate): mixed`**
    - Description: Filters and validates a Brazilian date in the format DD/MM/YYYY.
    - Parameters:
      - `$brazilianDate`: The Brazilian date to be filtered.
    - Returns:
      - mixed: The filtered Brazilian date on success, `false` otherwise.

12. **`FilterAmericanDateTime($americanDatetime): mixed`**
    - Description: Filters and validates an American date and time in the format YYYY-MM-DD HH:MM:SS.
    - Parameters:
      - `$americanDatetime`: The American date and time to be filtered.
    - Returns:
      - mixed: The filtered American date and time on success, `false` otherwise.

13. **`FilterBrazilianDateTime($brazilianDatetime): mixed`**
    - Description: Filters and validates a Brazilian date and time in the format DD/MM/YYYY HH:MM:SS.
    - Parameters:
      - `$brazilianDatetime`: The Brazilian date and time to be filtered.
    - Returns:
      - mixed: The filtered Brazilian date and time on success, `false` otherwise.

## Usage Example

```php
use App\Controllers\Filters;

// Instantiate Filters class
$filters = new Filters();

// Example: Filtering an email address
$email = "user@example.com";
$result = $filters->FilterEmail($email);

if ($result !== false) {
    echo "Filtered Email: " . $result;
} else {
    echo "Invalid Email!";
}

