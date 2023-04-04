# Laravel Nova Index Toggle Field

<img alt="preview" src="img.png">

## Installation

``` php
composer require wamesk/laravel-nova-index-toggle
```

## Usage
``` php
IndexToggle::make('fajciar', 'smoker'),
```

You must add to required fields !
``` php
->updateRules('sometimes')
```

#### Field options
``` php
->flash('aktualizovaný')
->flash('false')  // vypnut
```
