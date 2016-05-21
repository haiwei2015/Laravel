<?php
namespace App\Facades;
use Illuminate\Support\Facades\Facade;

class Up extends Facade{
	protected static function getFacadeAccessor(){ return 'App\Services\Up'; }
}