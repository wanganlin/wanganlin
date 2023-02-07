<?php
Yii::setAlias('@root', dirname(__DIR__));
Yii::setAlias('@app', '@root/app');
Yii::setAlias('@bootstrap', '@root/bootstrap');
Yii::setAlias('@config', '@root/config');
Yii::setAlias('@database', '@root/database');
Yii::setAlias('@webroot', '@root/public');
Yii::setAlias('@plugins', '@webroot/plugins');
Yii::setAlias('@resources', '@root/resources');
Yii::setAlias('@lang', '@resources/lang');
Yii::setAlias('@view', '@resources/views');
Yii::setAlias('@storage', '@root/storage');
Yii::setAlias('@runtime', '@storage/framework');
Yii::setAlias('@vendor', '@root/vendor');
Yii::setAlias('@app/migrations', '@database/migrations');
