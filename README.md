# project
DATABASE_URL=mysql://root:@db_docker_symfony:3306/UPLOAD?serverVersion=5.7
php bin/console doctrine:fixtures:load
