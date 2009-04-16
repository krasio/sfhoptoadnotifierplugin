# Introduction

This is a simple [symfony](http://www.symfony-project.com) plugin that sends exception notifications to [Hoptoad](http://hoptoadapp.com). 
It's based on [rich/php-hoptoad-notifier](http://github.com/rich/php-hoptoad-notifier/tree/master). You can check [it's README](http://github.com/rich/php-hoptoad-notifier/tree/master) for more info. 

# Requirements

rich/php-hoptoad-notifier uses the Horde_Yaml class. You can install this class using the commands below.

    pear channel-discover pear.horde.org
    pear install horde/yaml

It also uses Pear's HTTP_Request:

    pear install HTTP_Request
   
