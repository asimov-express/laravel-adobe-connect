<?php
namespace AsimovExpress\AdobeConnect;
use Illuminate\Support\Facades\Facade;
/**
 * Facade class
 */
class Connect extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'adobe-connect'
    }
}
