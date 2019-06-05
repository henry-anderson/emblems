# emblems

This is a simple shields.io wrapper that provides additional services. I created it to add a few new features to shields.io that I wanted and figured I would share. It is hosted on Heroku.

## Parameters
- cache: Modifies the 'Cache-Control' header with the amount of time in seconds the image should be cached for. The default is 120 seconds
- color: The color of the badge. The default is blue.
- name: The text that appears on the left half of the badge. The default for this parameter varies 

Each service has unique parameters but these two are global

## Services
### Bukkit and Spigot Downloads
This badge displays the total amount of downloads on both Spigot and BukkitDev. It has two extra parameters, 'bukkit' which represents the plugin's BukkitDev ID and 'spigot' which represents the plugin's Spigot ID. Here is an example for [PingAPI](https://www.spigotmc.org/resources/pingapi.3829/).

<pre>
http://badge.henrya.org/spigotbukkit/downloads?spigot=3829&bukkit=89296&color=red
</pre>

This will create a dynamic badge that looks like this:

<img src="http://badge.henrya.org/spigotbukkit/downloads.php?spigot=3829&bukkit=89296&color=red">

### Bukkit Downloads
This badge displays the amount of downloads a specific plugin has on BukkitDev. It only has one extra parameter, 'id' which represents the plugin's BukkitDev ID. Here is an example for [PingAPI](https://dev.bukkit.org/projects/pingapi).

<pre>
http://badge.henrya.org/services/bukkit/downloads?id=89296&color=green
</pre>

This will create a dynamic badge that looks like this:

<img src="http://badge.henrya.org/services/bukkit/downloads?id=89296&color=green">

### Spigot Downloads
This service is already included in shields.io, but I thought I would add it anyway for completeness. It displays the amount of downloads a specific plugin has on Spigot. It only has one extra parameter, 'id' which represents the plugin's Spigot ID. Here is an example for [PingAPI](https://www.spigotmc.org/resources/pingapi.3829/).

<pre>
http://badge.henrya.org/spigot/downloads?id=3829
</pre>

This will create a dynamic badge that looks like this:

<img src="http://badge.henrya.org/spigot/downloads?id=3829">
