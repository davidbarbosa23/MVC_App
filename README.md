MVC App
==========

This is a test code for MVC Application as Senior PHP Developer

## How works

Test running [here](http://52.36.70.7/)

### Database
`MCV_App.sql` needs be inserted into an `utf8mb4_unicode_ci` collation database, after insert you can edit `app/database.php` with your DB access.

### Install
You need run the below command before clone the application:

```console
$ cd {DIRECTORY_PATH}
$ composer install
$ npm install
```
For access to front-end folder by the browser, you need hit to `public` folder.
If you set a custom localhost url as `mvcapp.tx`, you can run the program instantly, otherwise, you need set the `RewriteBase /` into `public/.htaccess` with the folders after base url, like this: `RewriteBase /MVC_App/public` in case the url to access looks like this `http://localhost/MVC_App/public`.

### App Changes
After add/delete/rename files into `app/core` or `app/models` you need execute:
```console
$ composer dump-autoload
```

### Assets Changes
To edit JS or CSS files, please edit the assets files into `assets` folder, then execute:
```console
$ npm run build
```

### References
This application use [twig/twig](https://packagist.org/packages/twig/twig), ([twig reference](https://github.com/vito/chyrp/wiki/Twig-Reference)) for this reason, some times we need clear cache after any update into layouts:
```console
$ npm run clear
```
#### Diagram
![alt text](http://52.36.70.7/assets/diagrama.jpg)

#### Source
Code structure based in [alexgarrett/simple-mvc](https://github.com/alexgarrett/simple-mvc)
