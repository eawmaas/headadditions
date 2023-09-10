# headadditions
First mod I wrote for Chyrp Lite (putting it on Github because I want to find out how this all works...)
The Mod is being distributed under the same license [BSD license] as Chyrp Lite is.

## Customize
Simply remove or use // in headadditions.php to exclude one or more functionalities of this module.

## About adding scripts
You can add any script that belongs to the head-section of your blog directly using the <script>-tag or using the PHP-function "include" to include (an) existing file(s) with scripts somewhere in your domain.

## About adding styles

You can style your blog directly using something like:
.hot {color: red}
.cold {color: blue}
and write <p class="hot">txt</p> in your blogposts.

You can also change the stylesheet-url in headadditions.php to point to a stylesheet that you already use somewhere in your domain.

#### About SEO

The title and description meta-tags are not included, use your blog-settings for that.

You can (and should) change the values in headadditions_seo.php to make them more applicable to your blog.

You can also change the opengraph-image by uploading a new one and if necessary, adjusting the name.

## SEO-Actualisation

Do a (regular) websearch for recommended dimensions of for example the opengraph-image, the length of the title of your Blog or new/other seo-metatags.

## Documentation

The Chyrp Lite [wiki](https://chyrplite.net/wiki/) has comprehensive documentation
for users and developers.

## Authors

Chyrp Lite was created by the following people:

* Lite Developer: Daniel Pimley
* Chyrp Developer: Arian Xhezairi
* Project Founder: Alex Suraci
* Module authors and other contributors.

## Licenses

Chyrp Lite is Copyright 2008-2023 Alex Suraci, Arian Xhezairi, Daniel Pimley, and other contributors,
distributed under the [BSD license](https://raw.githubusercontent.com/xenocrat/chyrp-lite/master/LICENSE.md).
Please see the [licenses](licenses) directory for the full license text of all software packages distributed with Chyrp Lite.
