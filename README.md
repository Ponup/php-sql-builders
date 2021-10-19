# PHP SQL builders

Simple PHP library to dynamically construct SQL statements.

## Usage

```shell
composer require ponup/sql-builders
``` 

## Examples

### Insert

```php
$queryBuilder = new InsertQueryBuilder('table');
$queryBuilder->setColumns('foo, bar, baz');

echo $queryBuilder->toSql(); # Prints 'INSERT INTO table (foo, bar, baz) VALUES (?, ?, ?)'
```

### Select

```php
$queryBuilder = new SelectQueryBuilder('foo');
$queryBuilder->setColumns('bar, baz');
$queryBuilder->setLimit('0, 20');
$queryBuilder->setOrderBy('bar DESC');

echo $queryBuilder->toSql(); # Prints 'SELECT bar, baz FROM foo ORDER BY bar DESC LIMIT 0, 20'
```

### Update

```php
$queryBuilder = new UpdateQueryBuilder('person');
$queryBuilder->setColumnValues([
    'email' => 'NULL',
    'age' => 42,
    'weight' => 100,
    'code' => '?'
]);
$queryBuilder->setWhereConditions('id = ?');

echo $queryBuilder->toSql(); # Prints 'UPDATE person SET email = NULL, age = 42, weight = 100, code = ? WHERE id = ?'
```

### Delete

```php
$subject = new DeleteQueryBuilder('foo');
echo $subject->toSql(); # Prints 'DELETE FROM foo WHERE id = ?'
```
