MVC App
==========

This is a test code for MVC Application as Senior PHP Developer

## How works

You need run the below command before init the application:

```console
$ cd {DIRECTORY_PATH}
$ composer install
$ npm install
```

To edit JS or CSS files, please edit the assets files into `{DIRECTORY_PATH}/assets` folder, then execute:
```console
$ npm run build
```

This application use [twig/twig](https://packagist.org/packages/twig/twig), for this reason, some times we need clear cache after any update into layouts:
```console
$ npm run clear
```

Based in [alexgarrett/simple-mvc](https://github.com/alexgarrett/simple-mvc)
