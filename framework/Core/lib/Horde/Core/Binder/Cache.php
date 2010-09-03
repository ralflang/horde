<?php
/**
 * @category Horde
 * @package  Core
 */
class Horde_Core_Binder_Cache implements Horde_Injector_Binder
{
    public function create(Horde_Injector $injector)
    {
        $cache = new Horde_Core_Factory_Cache($injector);
        return $cache->getCache();
    }

    public function equals(Horde_Injector_Binder $binder)
    {
        return false;
    }

}
