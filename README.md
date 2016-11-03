# Wordpress - Foundation 6 Bones Bootstrap

A custom Wordpress boilerplate using Foundation 6 and Bones theme. I've taken the Wordpress features that I like from Bones and combined it with Foundation 6 for front-end. All of my default plugins have also been installed and activated, but not yet configured.

## functions.php

Additional functionality has been added to functions.php. The file has been broken up into 3 sections using comments to seperate them. Here's a list of each section and the functions within them:

### Shared/Site-wide Functions

Functions used across the entire site (front-end and backend) will be written here.

1. Disable XMLRPC

### Admin Functions

Functions used with the admin dashboard will be written here.

1. Rename the Excerpt Metabox and Add Description
    * will remove the default postexcerpt metabox
    * then add another postexcerpt metabox with a custom title, and description.
    * handy for providing instructions to end user
2. Page Name Class for Admin <body> Tag
    * this will add the post_name as a css class to the admin parent pages
    * this will add "parent-post_name" as a css class to the admin child pages
3. Remove Meta Boxes
    * Remove metaboxes from admin pages. Add another array item to $boxes and include the id of the metabox and context (normal, advanced, or side).
4. Reposition Meta Boxes
    * Override meta box positions by removing the meta box, then adding it again and then by setting the priority.
5. Remove Menu Items
    * Removes links from the admin menu. Note that pages are still accessible, this simply removes the link.
    * I suggest using a plugin such as Advanced Access Manager or Toolset's Access plugin to manage users, roles and capabilities.
    * You can find the file name for the link by inspecting the hyperlink tag. For example, Media links to 'upload.php'
6. Settings Menu Item for Social Media Links
    * Adds a section under Settings titled Social Media Settings.
    * Includes Facebook, Twitter, LinkedIn and Youtube.

### Template Functions

Functions used within templates on the front-end of the website.

1. Custom Excerpts
    * Returns the exerpt of a string. The string, start position and excerpt length are passed as parameters.


## wp-config.php

 * Added a conditional for hosting environment specific settings for database and debugging.

## Additions to Foundation's default package include:

* Stylesheets have been broken up into multiple files. One for small, medium and large. As well as a settings file and mixins file.
* A default Javascript class has been added to app.js.
* A small debug element has been added to the bottom left corner to indicate screen width and current stylesheet in use.
* Support for IE8 has been added, thanks to James Cocker. (http://foundation.zurb.com/forum/posts/241-foundation-5-and-ie8)

  See [http://bitbucket.org/Hi-hatConsulting/foundation-5-bootstrap](Foundation 5 Boilerplate)

## Bones Theme

For more information on the Bones Wordpress theme, visit:
[http://themble.com/bones/](http://themble.com/bones/)

## Requirements

  * Ruby 1.9+
  * [Node.js](http://nodejs.org)
  * [compass](http://compass-style.org/): `gem install compass`
  * [bower](http://bower.io): `npm install bower -g`

## Quickstart

1. Change into the /library/ directory.
2. Type 'compass watch', press enter.

## Thanks

1. Wordpress
2. Zurb Foundation
3. Bones Theme

-------------------------------------------

# Foundation Compass Template (Original Foundation README)

The easiest way to get started with Foundation + Compass.

## Requirements

  * Ruby 1.9+
  * [Node.js](http://nodejs.org)
  * [compass](http://compass-style.org/): `gem install compass`
  * [bower](http://bower.io): `npm install bower -g`

## Quickstart

  * [Download this starter compass project and unzip it](https://github.com/zurb/foundation-compass-template/archive/master.zip)
  * Run `bower install` to install the latest version of Foundation

Then when you're working on your project, just run the following command:

```bash
compass watch
```
