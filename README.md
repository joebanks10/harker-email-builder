# Harker's Email Builder

An email builder for The Harker School. Built with the Advanced Custom Fields PRO plugin.

## Dependencies

* ACF PRO
* ACF to REST API
* Advanced Custom Fields: ACF Code Field

## Getting Started

After you install the plugin and all dependencies, go to Custom Fields and sync the fields with the ACF JSON files. More details can be found here: https://www.advancedcustomfields.com/resources/synchronized-json/ 

When the fields have synced, you should be able to edit the Emails post type. Screenshot is linked below. 

## Viewing the Emails

This plugin experiments with the idea of a headless CMS, so the templates are completely decoupled from WordPress. To view the emails, you'll need to install the [Email Builder Templates](https://github.com/joebanks10/harker-email-templates) and go to Settings > Email Builder to define where the Email Builder Templates live (e.g. http://localhost/email-builder-templates). This will set up a redirect for the Email post type template in WordPress.

Sample Emails:

* Monthly Newsletter: http://www.harker.org/cf_enotify/view.cfm?n=1258 
* Weekly Newsletter: http://www.harker.org/cf_enotify/view.cfm?n=1255 

## Screenshots

* http://www.screencast.com/t/18AzzRckLnFX