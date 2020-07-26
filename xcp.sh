tsc -w ./src/js/*.ts --outDir ./src/js &
stylus -w ./src/css/*.styl --include-css --compress -o ./src/css &
pug -w ./src/*.pug -o ./public &
# Convert html to php files
# update every n second
while(true); do
  rm -rf public/*.php;
  for var in public/*.html; do
    file=${var%.html}.php;
    cp $var $file;
  done
  sleep 5
done