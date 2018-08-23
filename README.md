# Rss Feeder
Laravel Package project
This Laravel5 package is RSS Feeder package such as Facebook newsfeed.

# Installation
<em>First, copy package folder in root folder of your laravel5 project</em> <p>
<em>Second, add some codes in your main composer.json.</em> </br>
  <pre>  "repositories": [
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
        }</pre><p>
<em>Then, update composer</em>

Now you can see by typing yourwebsite.com/feeder in url window.

Done!
