Chassis Local Dev
=================

A WordPress plugin that will change the admin bar colour if you're using Chassis for local development. This plugin
checks if `WP_LOCAL_DEV` is set to `true` and changes the WordPress Admin Bar to purple.

You can define a custom colour if you don't like purple by defining a color for `CHASSIS_ADMIN_BAR_COLOUR`. e.g.
```php
define( 'CHASSIS_ADMIN_BAR_COLOUR', '#f15e22' );
define( 'CHASSIS_ADMIN_BAR_COLOUR', 'red' );
```

# Installation

1. Upload the [zip](https://github.com/Chassis/local-dev/archive/master.zip) and activate the plugin.
2. If you're using Chassis your WordPress Admin Bar will change colour.
