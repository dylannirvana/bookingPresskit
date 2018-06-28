This is an open source Bootstrap - WordPress application built on Understrap and the Square Appointments API. It uses Gulp and BrowserSync as a build system, with SASS as a CSS preprocessor. The backend is PHP/SQL and uses the WordPress CMS admin.

It is scaffolded with the WP CLI and utilizes mainly the Square Appointments API, along with Bands in Town. It is WooCommerce ready, and employs GSAP - ScrollMagic.

The way to use this application is by booking appointments through Square, which shows up here, and populates Bands in Town. Just a minimalist interpretation of a Data Driven Single Page Application based on User Driven Development.

## Installation ##
WP CLI
https://wp-cli.org/
$ wp core download
$ wp config create --dbname=testing --dbuser=wp --dbpass=securepswd
$ wp db create
$ wp core install --url=example.com --title=Example --admin_user=supervisor --admin_password=strongpassword --admin_email=info@example.com

Understrap
https://understrap.com/
Install theme
npm install || or do it through wp-admin
change proxy in gulpconfig to localhost:8888/nameOfRepo

Until the Yeoman generator is rewritten, populate file changes manually from previous installations.

http://dfcrock.com 
