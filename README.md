Light_MailStats
===========
2021-06-18


Work in progress...

Collecting mail stats.




This is a [Light plugin](https://github.com/lingtalfi/Light/blob/master/doc/pages/plugin.md).

This is part of the [universe framework](https://github.com/karayabin/universe-snapshot).


Install
==========

Using the [planet installer](https://github.com/lingtalfi/Light_PlanetInstaller) via [light-cli](https://github.com/lingtalfi/Light_Cli)
```bash
lt install Ling.Light_MailStats
```

Using the [uni](https://github.com/lingtalfi/universe-naive-importer) command.
```bash
uni import Ling/Light_MailStats
```

Or just download it and place it where you want otherwise.






Summary
===========
- [Light_MailStats api](https://github.com/lingtalfi/Light_MailStats/blob/master/doc/api/Ling/Light_MailStats.md) (generated with [DocTools](https://github.com/lingtalfi/DocTools))
- [Services](#services)
- Pages
    - [Conception notes](https://github.com/lingtalfi/Light_MailStats/blob/master/doc/pages/conception-notes.md)






Services
=========


Here is an example of the service configuration:

```yaml
mail_stats:
    instance: Ling\Light_MailStats\Service\LightMailStatsService
    methods:
        setContainer:
            container: @container()
        setOptions:
            options: []







```



History Log
=============

- 0.0.1 -- 2021-06-18

    - initial commit