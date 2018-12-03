# Web Designer Contact Form Database
![Web Designer Contact Form](img/web-designer-contact-form-demo-img.jpg)
Click for a [Live Demo.](http://apps.javierlona.com/contact-form-connected-to-database)

## Description
A contact form I used as my Google AdWords landing page. The visitors signs up and their information is stored in a database and notifies the owner via email.

## Installation
Use the **createdb.sql** file to create your database and table.

```
mysql -u [username] -p < createdb.sql
```
Then inside the **private** directory create a **dbconfig.php** file with your database credentials.

```php
<?php
$host = "localhost";
$username = "";
$password = "";
$dbname = "";

$dsn = 'mysql:host='.$host.';dbname='.$dbname;
$pdo = new PDO($dsn, $username, $password);
?>
```

## Technologies
PHP, MySQL, Bootstrap 4
