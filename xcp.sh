tsc -w ./src/js/*.ts --outDir ./src/js &
stylus -w ./src/css/*.styl --include-css --compress -o ./src/css &
pug -w ./src/*.pug -E php -o ./public