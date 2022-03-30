<?php /** * Copyright (C) Phppot * * Distributed under 'The MIT License (MIT)' 
* In essense, you can do commercial use, modify, distribute and private use. 
* Though not mandatory, you are requested to attribute Phppot URL in your code or website. */ namespace Phppot; /** 
* Generic datasource class for handling DB operations. * Uses MySqli and PreparedStatements. * * @version 2.6 - recordCount function added */ class DataSource { const HOST = 'localhost'; const USERNAME = 'root'; const PASSWORD = 'test'; const DATABASENAME = 'db_rating';