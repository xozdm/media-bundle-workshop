# media-bundle-workshop

Installation
-------------
1. Create .env file by running `> .env` or using text editor
2. Execute `docker-compose up -d`
3. When docker containers are up and running, go inside php container by executing `make gophp`
4. Inside container:
    - Execute `composer install`
    - Execute `bin/console sonata:easy-extends:generate --dest=src SonataMediaBundle --namespace_prefix=App`
    - Execute `bin/console doctrine:schema:update`
    - Execute `mkdir -p public/upload/media`
    - Execute `bin/console assets:install`
5. Navigate to http://127.0.0.1 and start using the app
