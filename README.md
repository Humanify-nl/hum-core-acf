# Hum Core ACF
Wordpress ACF skeleton theme classic

- Webpack 5 config
- Bundle JS (babel env & jquery)
- Sass extraction
- Fonts, icons, images
- Input all templates and assets in /src/
- Output theme in /dist/ or other path of choice
- Uses browser-sync with proxy to LocalWP (or other local server)

#### CSS

- Uses dart sass to compile scss
- CSS gets extracted & minified to /assets/css/main.css, which is enqueued by theme

#### Javascript

- Uses @babel/preset-env to transpile modern Javascript
- Imports all js files from /assets/js/src/ to bundle.js, which is enqueued by theme
- Note: js is wrapped in Jquery alias functions so wordpress can handle it

#### Files are ordered like so:

```
/src/ OR /dist/
-- assets /
  -- js/
    -- src/
  -- css/
  -- scss/
  -- icons/
  -- images/
  -- fonts/
  index.html
```  
