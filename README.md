# ColorizePHPParser
Minecraft color parser for PHP

![alt text](https://raw.githubusercontent.com/febryars33/ColorizePHPParser/main/Screenshot.png)

- Support (&) and (§)
- Support Unicode Characters
- Support Mix & / § on string function

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

Copyright Author
 - Original Source Code ?? I forgot. I found this on the internet
 - https://gist.github.com/Minecrell/755e53aced83ab48513f (JavaScript & CSS)
