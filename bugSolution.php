This improved code explicitly checks the return value of include(). If the file is not found or there's an error, an error message is displayed and execution is stopped to avoid unexpected behavior.
```php
if (include 'some_file.php') {
  //File included successfully
echo "File included successfully!";
} else {
  echo "Error including file!";
exit(1);
}
```