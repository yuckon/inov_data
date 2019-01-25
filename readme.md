# Test Inov Data

## Initialisation of the projet

- Creation of the symfony project

```
composer create-project symfony/skeleton inovdata

cd inovdata

composer require symfony/web-server-bundle --dev

```
1. Creation of the database and the first entity

```
composer require symfoy/orm-pack

composer require symfony/maker-bundle --dev

```

- We configure the .env file in this way to define the path to our database

```
DATABASE_URL="mysql://root:@127.0.0.1:3306/gamelibrary"

php bin/console doctrine:database:create

```

- Now we will create the first entity

```
php bin/console make:entity

Class name of the entity to create or update:
> Game

 to stop adding fields):
> name

Field type (enter ? to see all types) [string]:
> string

Field length [255]:
> 255

Can this field be null in the database (nullable) (yes/no) [no]:
> no

 to stop adding fields):
> date

Field type (enter ? to see all types) [string]:
> date

Can this field be null in the database (nullable) (yes/no) [no]:
> no

 to stop adding fields):
>
(press enter again to finish)

```

- [That's it! We've created our entity](https://github.com/yuckon/inov_data/blob/master/src/Entity/Game.php)

- Now we will migrate our entity to create a table for it

```
php bin/console make:migration

php bin/console doctrine:migration:migrate

```

2. Creation of the controller and his functions

- We need to have a controller for our class, so we will move on and create it

```
php bin/console make:controller GameController

```

- [Now we have the controller with his configurations](https://github.com/yuckon/inov_data/blob/master/src/Controller/GameController.php)

- In order to verify we create correctly our controller we can write into the Windows Console

```
php bin/console doctrine:query:sql "SELECT* FROM game"

```
