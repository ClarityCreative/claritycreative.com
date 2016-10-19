#[claritycreative.com](http://claritycreative.com/)

Website for Clarity Creative

## Site Setup

### CMS

The site uses [Craft CMS](https://craftcms.com/) for content management. Visit Craft’s control panel to edit the content: [claritycreative.com/admin](http://claritycreative.com/admin/). Page templates are located in `/craft/templates/`.

### Hosting

The production site and staging site ([staging.claritycreative.com](http://staging.claritycreative.com/)) are hosted on Clarity’s [Digital Ocean](https://cloud.digitalocean.com/) droplet.

### Contact Form

The Contact form uses the [Sprout Forms plugin](http://sprout.barrelstrengthdesign.com/craft-plugins/forms) for its back-end. Form entries are saved in the control panel ([claritycreative.com/admin/sproutforms/entries](http://claritycreative.com/admin/sproutforms/entries)) and sent via email to the recipient specificed in the form’s notifications settings.

### Styles

The CSS file (found at `/public/c/style.css`) is a [Sass](http://sass-lang.com/) output file and should not be edited directly. The source files are in `/assets/css/`. Sass was originally compiled using [CodeKit](https://incident57.com/codekit/).

## Deploying

The repository is setup to automatically deploy to the Digital Ocean droplet (via a GitHub webhook event). The deploy script is located at `/public/deploy/`.

* Changes pushed to the `staging` branch to deploy to the **staging site**.
* Changes pushed to the `master` branch to deploy to the **production site**.
