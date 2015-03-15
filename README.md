# Customi18n - Add custom i18n strings as a cleanly packed plugin

Customi18n is a MediaWiki extension created to ease the use of user defined i18n strings in your MediaWiki without manually adding php conditionals in the MediaWiki core files or other strange hacks.

## How to install?

Just clone that repo into your MediaWiki's extension folder like this:

    git clone https://github.com/martinseener/mediawiki-customi18n.git Customi18n

Now open the `LocalSettings.php` in the main folder and add the following line

    require_once("$IP/extensions/Customi18n/Customi18n.php");

You're done!

## How can i use it?

Just open the `Customi18n.i18n.php` and add your languages there and the appropriate strings you want to use throughout your
entire MediaWiki installation. I've added some language and string examples, so it should be really easy for you to start
adding your own.

You can use them for exmaple like this

    <?php echo wfMsgHtml('sample-string'); ?>

Or if you need some advanced combinations

    <?php echo sprintf(wfMessage('another-sample' ), 'Martin');
    <?php echo sprintf(wfMessage('another-sample'), 'Seener');

This way you can reuse a string with one changing word.

### Contributions

If you want to contribute please fork this repo and create a pull-request for your patch. Otherwise just create a new issue with sufficient informations so i can fix it myself.

## Copyright and License

This extension was made by Martin Seener (c) 2015
It's licensed under the MIT License. License file is attached in this repository.
