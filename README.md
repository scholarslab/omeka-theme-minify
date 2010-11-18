# Omeka Theme Minifier [https://github.com/scholarslab/omeka-theme-minify](https://github.com/scholarslab/omeka-theme-minify)

This is based upon the [HTML5 Boilerplate](http://html5boilerplate.com) scripts, customized specifically for the [Omeka Themes API](http://omeka.org/).

## Usage:

For the impatiend:

`git clone git://github.com/scholarslab/omeka-theme-minify.git
 cd omeka-theme-minify/build
 chmod +x createproject.sh
 ./createproject.sh
`

After your project is created, place javascript libraries you want concatenated and compressed in javascripts/mylibs. Already minified libraries in libs. When you're ready to build the theme and deploy, simply go execute the ant script:

`cd build
ant build`

This will create a new directory `publish` with all your theme assets compressed and ready to deploy.

## License:

Major components:

* Omeka Theme Minify: Apache 2
* Modernizr: MIT/BSD license
* jQuery: MIT/GPL license
* DD_belatedPNG: MIT license
* YUI Profiling: BSD license
* HTML5Doctor CSS reset: Creative Commons 3.0 BY
* CSS Reset Reloaded: Public Domain

Everything else:

* [The Unlicense](http://unlicense.org) (aka: public domain)