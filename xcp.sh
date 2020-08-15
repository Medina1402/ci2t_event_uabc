tsc -w --removeComments -t ES2018 ./src/js/*.ts --outDir ./public/js &
stylus -w ./src/css/*.styl --include-css --compress -o ./src/css &
pug -w ./src/*.pug -E php -o ./public