<?php

namespace Develoopin\MongoGrid\Facades;

use \Illuminate\Support\Facades\Facade;

class MongoGrid extends Facade {

    protected static function getFacadeAccessor() {
		return 'Develoopin\MongoGrid\Services\MongoGrid';
	}

}
