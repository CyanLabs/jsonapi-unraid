## Introduction
This plugin is a wrapper for reading the files used by Unraid / emhttpd for displaying various statistics, the files are read from /var/local/emhttp/*.ini and are converted to JSON for easy access by services/applications like Home Assistant

This plugin has no 'frontend' and is only accessible directly via http://TOWER/plugins/jsonapi/api.php?file=XXX.ini for example to get the disks.ini file you would do  http://TOWER/plugins/jsonapi/api.php?file=disks.ini

currently the following files exist that can be used

* cpuload.ini
* devs.ini
* diskload.ini
* disks.ini
* monitor.ini
* network.ini
* sec.ini
* sec_afp.ini
* sec_nfs.ini
* shares.ini
* users.ini
* var.ini

![Screenshot](https://i.imgur.com/24Lb3xZ.png)

## Usage
Plugins > Install Plugin
```
https://raw.githubusercontent.com/Cyanlabs/jsonapi-unraid/master/jsonapi.plg
```

## Links
https://cyanlabs.net/applications/jsonapi-unraid/

https://forums.unraid.net/topic/86646-plugin-unraid-json-api/

https://community.home-assistant.io/t/unraid-json-api/158652
