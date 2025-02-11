# Refactoring

## Task description
The focus of the task is to refactor a fictitious code. The attached code (document_list.php) lists the data in document_list.csv according to the filter
conditions.

Filter parameters
- Document type
- Customer ID
- Minimum amount value

Example
php document_list.php invoice 1 12500

```tip
You can find original task and files in original folder. 
```

## Under hood
Based on the task, the resulting document_list.php file was refactored.
The app directory contains all the files created and used for the task.

Since the task did not specifically cover creating tests, these are not 100% complete.
Basic tests were written for demonstration purposes.

## Installation
In the root directory, issue `composer install` (If necessary, `composer dumpautoload` command).

## Test
To run tests, use the `php ./vendor/bin/phpunit` command.
