##Repo with a Drupal install

Unpack httpdocs and project-XXX.sql.zip  
Import project-XXX.sql.zip and change DB credentials in sites/default/settings.php  

###Custom scripts
In the folder /custom you'll find:  
* createEntities.php - imports entities from json feed, called by cron  
* kml.php - maps routes to open layers (converts json feed to kml) displaying current velocities on map  

###Patches
In the patches folder you'll find some... patches!
* date-FixHourlyPager.patch - fixes an issue where the pager wouldn't work on the hourly view  
* feeds-addInterval.patch - adds 5 minutes as an option to the feed interval   

###Cron definition:
```0	*	*	*	*	wget -O - -q -t 1 http://www.foo.bar/custom/createEntities.php```

