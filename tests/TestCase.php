<?php

class TestCase extends Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return ['Develoopin\MongoGrid\Providers\MongoGridServiceProvider'];
    }

    protected function getPackageAliases($app)
    {
        return [
            'MongoGrid' => 'Develoopin\MongoGrid\Facades\MongoGrid'
        ];
    }
}
