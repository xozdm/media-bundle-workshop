# media-bundle-workshop

create .env file
docker-compose up -d
make gophp
composer install

bin/console sonata:easy-extends:generate --dest=src SonataMediaBundle --namespace_prefix=App
bin/console doctrine:schema:update
mkdir -p public/upload/media
bin/console assets:install
