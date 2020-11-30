# Yii2-audit-logs

Created by <b>Deniel Maomay</b> (Professional Web Developer)

## 1. Installation

```bash

composer require "ddm/yii2-audit-log:dev-master"
```

## 2. Configuration

Add following lines to your main configuration file:

```php
'modules' => [
    'auditlogs' => [
        'class' => 'ddm\auditlogs\Module',
    ],
],
```

## 3. Migrate Database Schema

```bash
$ php yii migrate/up --migrationPath=@vendor/ddm/yii2-audit-log/migrations
```


## 4. Extends to your controllers and models

## Controller
```
use ddm\auditlogs\classes\ControllerAudit;

class ProjectsController extends ControllerAudit 
{
...
}
```
## Models
```
use ddm\auditlogs\classes\ModelAudit;

class Project extends  ModelAudit //\yii\db\ActiveRecord
{
...
}
```


## 5. Thank you!!! Hope you like it :D