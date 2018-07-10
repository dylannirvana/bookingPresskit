## Booking MVP with Square Appointments API ##
In researching online tools used by Booking Agents, I made the observation that, like many CRM software, they are wieldy, awkward to use, hard to learn, and expensive. Square Appointments / Square e-commerce is lightweight, and really has its UX together. https://squ.re/2L0QtrS

### User Centered Development ###
Instead of starting with a typical visual design or use-case template, I employed Agile, User Experience techniques to produce IA drawings, wireframes and _personae_  https://bit.ly/2mbZ4KF , To guide development of an MVP.

### Extensible Bootstrap / Wordpress ###
The application is an open source Bootstrap / WordPress hybrid built with Understrap https://understrap.com/ . It uses Gulp as a build system, BrowserSync, with SASS as a CSS preprocessor. The backend is PHP/SQL. WordPress as you may know, is moving toward JavaScript, beyond the WP API. The application can be extended in MERN (React-Node).

It is scaffolded with the WP CLI. It employs GSAP - ScrollMagic, so you can animate just about anything with it https://greensock.com/gsap .

The way to use this application is by booking appointments through Square, which shows up here, and populates Bands in Town. Just a minimalist interpretation of User Driven Development.

Book Danny Francis Connolly https://lnkd.in/ec8UwPU #ecommerce #uxdesign

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
