# PHP Include() Without Error Handling

This repository demonstrates a common but easily overlooked error in PHP: using `include()` or `require()` without proper error handling.  Improper file inclusion can lead to unexpected behavior and difficult-to-debug issues.

The `bug.php` file shows the problematic code.  The `bugSolution.php` file provides a corrected version.

## Problem

The `include()` function in PHP includes and executes the specified file.  If the file does not exist or there are errors during inclusion, a warning is issued, but execution may continue (with `include()`) or stop immediately (with `require()`).

This can lead to hard-to-debug situations, as the error message might be easily missed, or the code continues executing with unexpected results.

## Solution

The best practice is to always check the return value of `include()` or `require()`.  These functions return `true` on success and `false` on failure.  This allows for explicit error handling:

```php
if (include 'some_file.php') {
    // File included successfully, continue execution
} else {
    // Handle the error, e.g., log it, display an error message, etc.
    // Consider terminating execution based on your application's requirements.
}
```