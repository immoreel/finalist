##Repo with a Drupal install

Unpack httpdocs and project-XXX.sql.zip  
Import project-XXX.sql.zip and change DB credentials in sites/default/settings.php  

In the folder /custom you'll find:  
* createEntities.php - imports entities from json feed, called by cron  
* kml.php - maps routes to open layers (converts json feed to kml) displaying current velocities on map  

###Cron definition:
```0	*	*	*	*	wget -O - -q -t 1 http://www.foo.bar/custom/createEntities.php```

