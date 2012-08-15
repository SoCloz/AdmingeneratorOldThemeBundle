# Admingenerator OldTheme

This bundle is the old theme keeped here for legacy apps. 

If you start with admingenerator, i recommend you to use the twitter bootstrap theme included in the bundle

## Setup

Using composer

```
"require": {
    "cedriclombardot/admingenerator-oldtheme-bundle": "dev-master"
},
```

In AppKernel.php

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...

        // Admin Generator
        new Admingenerator\GeneratorBundle\AdmingeneratorGeneratorBundle(),
        new Admingenerator\OldThemeBundle\AdmingeneratorOldThemeBundle(),
    );

    // ...
}
```

In config.yml

```
admingenerator_generator:
    templates_dirs: [ %kernel.root_dir%/../vendor/cedriclombardot/admingenerator-oldtheme-bundle/Admingenerator/OldThemeBundle/Resources/templates ]
```

## In pictures

![Preview of list](https://github.com/symfony2admingenerator/AdmingeneratorOldThemeBundle/raw/master/Resources/doc/list-preview.png)

![Preview of edit](https://github.com/symfony2admingenerator/AdmingeneratorOldThemeBundle/raw/master/Resources/doc/edit-preview.png)



