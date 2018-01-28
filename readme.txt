=== Super Progressive Web Apps ===
Contributors: arunbasillal, josevarghese
Donate link: http://millionclues.com/donate/
Tags: pwa, progressive web apps, manifest, web manifest, android app, chrome app, add to homescreen, mobile web
Requires at least: 3.5.0
Tested up to: 4.9.2
Requires PHP: 5.3
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

SuperPWA helps you convert your WordPress website into a Progressive Web App.

== Description ==

Progressive Web Apps (PWA) is a new technology that creates a middle ground between a website and a mobile app. They are installed on the phone like a normal app (web app) and can be accessed from the home screen. 

Users can come back to your website by launching the app from their home screen and interact with your website through an app-like interface. Your return visitors will experience almost-instant loading times and enjoy the great performance benefits of your PWA!

### What's in the box

Here are the current features of Super Progressive Web Apps: 

* Generate a manifest for your website and add it to the <head> of the page
* Set the application icon for your Progressive Web App. 
* Set the background color for the splash screen of your Progressive Web App. 
* Your website will show the "Add to home screen" notice when accessed in a supported browser.
* Aggressive caching of pages using CacheStorage API.
* Pages once cached are served even if the user is offline. 
* Set custom offline page: Select the page you want the user to see when a page that isn't in the cache is accessed and the user is offline.

Please note that the app is very basic at the moment and does not include offline fall-backs. Only the homepage is cached offline as of now.

### Features are we working on

* Cache busting features.
* Better handling of service worker updates.
* Better admin notices and info.
* Better UI.

### Minimum Requirements On Your WordPress Install

Progressive Web Apps require that your WordPress website is served from a secure origin i.e. your website should be HTTPS and not HTTP. If your website isn't HTTPS, please contact your host about it. You can also [ask us](https://wordpress.org/support/plugin/super-progressive-web-apps) if you need help.

### Device and Browser Support For PWA

Progressive web apps need browsers that support manifests and service workers. Currently Google Chrome (version 57+), Chrome for Android (62), Mozilla Firefox (57), Firefox for Android (58) are the major browsers that support PWA. 

The list is fast growing and is likely to be supported in most major browsers by the end of this year.

### About us

We are a duo who got excited about the idea. Our mission is simple: Help you build an awesome PWA that users would want to have on their home screen.

When we first heard about PWA we wanted to learn everything about it. We have spent countless hours learning and wants to share it with the world. 

Please give us your constructive feedback and support. 

### Feature Requests, Issues, Pull Requests

Here is our repository on [GitHub](https://github.com/SuperPWA/Super-Progressive-Web-Apps). Send us your pull requests, feature requests or issues, if any.

### How To Convert Your WordPress Website Into A Progressive Web App

#### WordPress Installation

* Visit WordPress Admin > Plugins > Add New
* Search for 'Super Progressive Web Apps'
* Click "Install Now" and then "Activte" Super Progressive Web Apps

To install manually:

* Upload super-progressive-web-apps folder to the /wp-content/plugins/ directory on your server
* Go to WordPress Admin > Plugins
* Activate Super Progressive Web Apps plugin from the list.

#### Customizing Your Progressive Web App

Your Progressive Web App should be ready to test with the default settings upon activation. You can customize it further and make it truly your own.

* Go to WordPress Admin > Settings > SuperPWA
* Set a Background Color for the splash screen to be shown when your PWA is opened on a mobile device.
* Set the Application Icon. This will be the icon of your PWA when it is added to the homescreen in a mobile device. The icon must be a PNG image and exactly 192 x 192 pixels in size.
* Set the Offline Page. This page will be displayed if the user is offline and the page he requested is not cached already. Ideally you should create a dedicated WordPress page and set it here. Within the page you create, you could add a note that reads, "It looks like you are offline and the page you requested is not available right now. Please check back again once you are online.". 
* Click "Save Settings".

#### Testing Your Progressive Web App

* Open a supported browser in a supported device (for eg: Chrome for Android (62 or higher) in an Android Phone)
* Enter your website and wait till it fully loads
* You should see a pop-up that has your Application Icon and a button that reads "ADD TO HOME SCREEN".
* Click on it and your PWA will be added to your home screen. Wait for the install to complete. 
* Go to your home screen and open your PWA. Browse into a few pages if you like. Close the App.
* Disconnect from the internet and now open your PWA again. You should be able to see all the pages that you previously browsed. 
* Try visiting a page that you did not visit before. You should see the page you set as your "Offline Page" in the settings of SuperPWA. 

#### Troubleshooting Your Progressive Web App

Uh, oh. Your PWA did not work as expected? You do not see the "Add to Home Screen" notice?

* Make sure your website has a SSL certificate installed. i.e. your website should be https instead of http (as in https://your-domain.com).
* Make sure you are using a supported device and a supported browser. Refer to the "Device and Browser Support For PWA" list above.
* Clear the browser cache and try again. In Chrome for Android, go to Settings > Privacy > "Clear browsing data".
* If the application icon does not update after first install, delete the PWA from your phone, clear browser cache and install again. (We are working on making it better.) 
* Create a [new support ticket](https://wordpress.org/support/plugin/super-progressive-web-apps) and share a link to your website. We will take a look and figure it out for you.

== Installation ==

To install this plugin:

1. Install the plugin through the WordPress admin interface, or upload the plugin folder to /wp-content/plugins/ using FTP.
2. Activate the plugin through the 'Plugins' screen in WordPress. 
3. Go to WordPress Admin > Settings > SuperPWA

== Frequently Asked Questions ==

== Screenshots ==

1. Settings page in WordPress Admin > Settings > SuperPWA

== Changelog ==

= 1.1 =
* Date: 28.January.2018
* Aggressive caching of pages using CacheStorage API.
* Pages once cached are served even if the user is offline. 
* Set custom offline page: Select the page you want the user to see when a page that isn't in the cache is accessed and the user is offline.

= 1.0 =
* Date: 22.January.2018
* First release of the plugin.

== Upgrade Notice ==

= 1.0 =
* First release of the plugin.