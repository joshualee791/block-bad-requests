# Block Bad Requests

**Contributors:** Joshua L. Garza  
**Tags:** Performance Optimization, HTTP Calls  
**Requires at least:** 5.0  
**Tested up to:** 6.6  
**Requires PHP:** 7.4+  
**Stable tag:** 1.0.1  
**License:** GPLv2 or later  
**License URI:** [GPLv2 License](https://www.gnu.org/licenses/gpl-2.0.html)  
**Author:** Joshua L. Garza  
**Author URI:** [https://www.joshualeegarza.com](https://www.joshualeegarza.com)

## Description

**Block Bad Requests** helps you filter out specific URL strings from your WordPress site's output buffer. If you're dealing with unwanted or malicious scripts loading on your site, this plugin acts as a temporary fix. Note that it doesn't remove the underlying malicious code but prevents those HTTP calls from affecting your site’s output. For a more permanent solution, please consult a security professional.

### Features
- **Manage URLs:** Easily add and manage a list of URLs to be filtered out.
- **User-Friendly Interface:** Configure settings through a simple and intuitive admin panel.
- **Automatic Filtering:** Filters specified URLs before they are sent to the browser.

### Usage
1. **Install and Activate:** Go to the WordPress admin dashboard and activate the plugin.
2. **Configure Settings:** Navigate to **Settings > Block Bad Requests**.
3. **Enter URLs:** Add one URL per line in the provided textarea to specify URLs to filter.
4. **Save Changes:** Click 'Save Changes' to apply the filters.

## Changelog

### 1.0.0 - 2024-07-23
- **Initial Release:** Basic functionality implemented.

### 1.0.1 - 2024-08-25
- **UI Enhancements:** Added a user interface to the admin panel.
- **Improved Functionality:** Now supports filtering multiple HTTP URL calls from the output buffer.
