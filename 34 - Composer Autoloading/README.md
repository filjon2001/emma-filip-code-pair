<img src="https://media.giphy.com/media/VZCFpF6sUyoG6l5SrY/giphy.gif" width="100%">

# 34 - Composer Autoloading

Composer is a tool for dependency management in PHP. It allows you to declare the libraries your project depends on and it will manage (install/update) them for you. Composer is not a package manager in the same sense as Yum, Apt or Homebrew are. Yes, it deals with "packages" or libraries, but it manages them on a per-project basis, installing them in a directory (e.g. vendor) inside your project.

- :scissors: Examples

    - [`examples`](examples)

- :books: Documentation
    
    - [PHP Pandas: Statics](https://daylerees.com/php-pandas-statics/)
    
    - [PHP Pandas: Namespaces](https://daylerees.com/php-pandas-namespaces/)

- :link: Links

    - [Composer](https://getcomposer.org/)

    - [Building maintainable PHP apps using Composer](https://laravel-news.com/building-apps-composer)

- :headphones: Videos

    - [Composer Autoloading](https://laracasts.com/series/php-for-beginners/episodes/21)
    
    - [Switch to Namespaces](https://laracasts.com/series/php-for-beginners/episodes/24)
    
    - [OOP: Static](https://www.youtube.com/watch?v=qhf9rR64Pd0)

- :fast_forward: Next Lesson

    - [Error Catching](https://www.youtube.com/watch?v=4nMonWzCb6Y)
    
    - [PHP Pandas: Exceptions](https://daylerees.com/php-pandas-exceptions/)

## Composer

Before you get started with the exercises you'll need to install Composer. Once everything is installed correctly, you should be able to run the `composer` command in the terminal.

```sh
# Install Composer on macOS
brew update
brew install composer

# Install Composer on WSL
sudo apt update
sudo apt install php-cli unzip
cd ~
curl -sS https://getcomposer.org/installer -o composer-setup.php
HASH=`curl -sS https://composer.github.io/installer.sig`
php -r "if (hash_file('SHA384', 'composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer
```

### Visual Studio Code

If you want to have good developer experience in Visual Studio Code when you're editing `composer.json` files, we recommend you to install the [`ikappas.composer`](https://marketplace.visualstudio.com/items?itemName=ikappas.composer) extension.

## Exercises

1. Before we get started make sure you have installed Composer. You can find more information on installing Composer in the installation guide in the root of your class repository on GitHub. We're going to use the examples directory as a starting point for the exercises. First we need to add content to our articles. The `Article` class should accept the string property `$content`. Update both articles with the following two texts below. Print the content in a `<p>` within the `<article>`.

    - With all the stress that goes into booking flights and lodging, packing (and not forgetting) everything you'll need, finding pet sitters, and everything else that goes with a trip overseas, there's the added stress of staying connected while abroad.
    - A long time ago, a galaxy far, far away sprang into existence. Billions of years later, light from that galaxy hit a mirror in a solar-powered satellite orbiting the third planet of a medium-sized star, and the scientific community of the ruling species of that planet got really excited. And they all lived happily ever after.

2. You know what. The start page should be more of an index of articles. We don't want to show the entire content. Implement a new method on the `Article` class which is called `getExcerpt`. It should be public and accept the integer `$numberOfWords` and return the specified number of words from the `$content` property as a string. Print the string from the method instead of the `$content` property in the article and end with an ellipsis. Below is an example from the first article.

    ```
    With all the stress that goes into booking flights and lodging, packing (and not forgetting)…
    ```

3. The client has asked us to implement publish dates for our articles. Update the `Article` class to accept the property `$date` which should be an instance of the built-in `DateTime` class. Update the `index.php` file with the two dates below and print them below the title in the article within an [`<time>`](https://htmlreference.io/element/time/) element in the following [format](https://www.php.net/manual/en/datetime.format.php): `March 24th 2020`. Remember to add the `datetime` attribute to the `<time>` element.

    - `2020-03-24`
    - `2020-10-30`

4. Great, we've now added title, excerpt and publish date for each article. Now we need to display the article's author. Add a new `Author` class under the `App` namespace. Each author should accept the author's name as first property. Add the `Author` class as an property on the `Article` class. Within the new `index.php` file, create a new author instance and give it the name Mando. Mando has written both articles. Below the title, display the author and time within the same paragraph. 


    ```
    Written by Mando on March 24th 2020
    ```

5. We're almost done. The last step is to add a link for each article. It would be [cool](https://media.giphy.com/media/nFFguNjdeotwc/source.gif) if we could create a good looking and valid URL for each article based on the title. You probably remember [camelCase](https://en.m.wikipedia.org/wiki/Camel_case) from an earlier class but do you remember [kebab-case](https://en.m.wikipedia.org/wiki/Naming_convention_(programming)#Delimiter-separated_words)? Add a new static method to the `Str` class and name it `kebabCase`. The method accepts a string and should return it in kebab-case. Within `Article` constructor, add a new `$slug` property to the class using `$this` which uses the new `kebabCase` method and converts the title to a slug. Add a new link below the excerpt in the article which contains `Continue reading →` and links to the new `$slug`.

6. **Extra:** Hey, you've made it this far 💪 For the rest of the extra exercises we're going to implement three methods. The `Str` class has `camelCase` and `kebabCase` already. Let's implement the methods for snake_case, CONSTANT_CASE and PascalCase. [That's a challenge!](https://media.giphy.com/media/XoV0OMim9iQGjnLtBv/source.gif)

    ```php
    echo Str::snakeCase('This is the Way'); // this_is_the_way

    echo Str::constantCase('This is the Way'); // THIS_IS_THE_WAY
    
    echo Str::pascalCase('This is the Way'); // ThisIsTheWay
    ```

