# Yii2-audit-logs

Created by <b>Deniel Maomay</b>

## 1. Installation

```
"repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/denielmaomay/yii2-audit-log.git"
        }
 ]

```

```bash

composer require "denielmaomay/yii2-audit-log"
```

## 2. Configuration

Add following lines to your main configuration file:

```php
'modules' => [
    'auditlogs' => [
        'class' => 'denielmaomay\auditlogs\Module',
    ],
],
```

## 3. Migrate Database Schema

```bash
$ php yii migrate/up --migrationPath=@vendor/denielmaomay/yii2-audit-log/migrations
```


## 4. Extends to your controllers and models

## Controller
```
use denielmaomay\auditlogs\classes\ControllerAudit;

class ProjectsController extends ControllerAudit 
{
...
}
```
## Models
```
use denielmaomay\auditlogs\classes\ModelAudit;

class Project extends  ModelAudit //\yii\db\ActiveRecord
{
...
}
```


## 5. Thank you!!! Hope you like it :D