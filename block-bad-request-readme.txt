=== Block Bad Request ===
Contributors: Joshua Garza
Tags: Performance Optimization, HTTP Calls
Requires at least: 5.0
Tested up to: 6.6
Requires PHP: 7.4
Stable tag: 1.0.1
License: GPLv2 or later
License URI: https://www.joshualeegarza.com

== Description ==

Purpose:
The Block Bad Requests plugin filters specific URL strings from the output buffer of your WordPress site. If you need to bandaid malicious scripts loading on your site, this is your medicine. Please note that that should only be used as a temporary measure and does not remove the malicious code making the HTTP call. If you believe that your site is infected, contact a security professional.

Features:
- Add and manage a list of URLs to be filtered out from the site's output.
- Customizable settings through a user-friendly admin interface.
- Automatically filters specified URLs before they are sent to the browser.

Usage:
1. Install and activate the plugin from the WordPress admin dashboard.
2. Navigate to Settings > Block Bad Requests.
3. Enter one URL per line in the provided textarea to specify URLs to filter.
4. Save changes to apply the filters.

== Changelog ==

= Block Bad Request 1.0.0 - 2024-07-23 =
* Fixed: Made it work
= Block Bad Request 1.0.1 - 2024-08-25 =
* Changed: Added a UI to the admin panel
* Changed: Allow for multiple HTTP url calls to be blocked from the buffer output
