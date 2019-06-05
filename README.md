# emblems

This is a simple shields.io wrapper that provides additional services. I created it to add a few new features to shields.io and figured I would share it. It is hosted on Heroku.

## Parameters
- cache: Modifies the 'Cache-Control' header with the amount of time in seconds the image should be cached for. The default is 120 seconds
- color: The color of the badge. The default is blue.

Each service has unique parameters but these two are global

## Services
### Bukkit and Spigot downloads
This badge displays the total amount of downloads on both Spigot and BukkitDev. It has two extra parameters, 'bukkit' which represents the plugin's BukkitDev ID and 'spigot' which represents the plugin's Spigot ID.
