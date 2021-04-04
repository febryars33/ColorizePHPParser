# ColorizePHPParser
Minecraft color parser for PHP

- Support (&) and (§)
- Support Unicode Characters

## How to use

## HTML Section
First add the css file
```html
<link rel="stylesheet" type="text/css" href="MinecraftColors.min.css">
```

Second add a javascript file
Here's some code for the obfuscated text (§k):
```html
<script src="MinecraftObfuscated.min.js"></script>
```

## PHP Section
Using § / &
```php
<?php
  echo mccolors('§6Hello World');
?>
```

Or you can mix it with & or §
```php
<?php
  echo mccolors('§6Hello &8World');
?>
```


https://gist.github.com/Minecrell/755e53aced83ab48513f
