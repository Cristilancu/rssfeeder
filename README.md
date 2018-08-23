# rssfeeder
Laravel Package project
This Laravel5 package is RSS Feeder package such as Facebook

# Installation
First, copy package folder in root folder of your laravel5 project
Second, add some codes in your main composer.json.
    "repositories": [
        {
            "type": "path",
            "url": "packages/laraveldaily/home",
            "options": {
                "symlink": true
            }
        }
    ],
    "require": {
	...
        "laraveldaily/home": "dev-master"
    },
	"psr-4": {
	    ...
            "Laraveldaily\\Home\\": "packages/laraveldaily/home/src/"
        }
Then, update composer

Now you can see by typing yourwebsite.com/feeder in url window.

Done!
