<?php
/**
 * Created by PhpStorm.
 * User: tranvanhoan
 * Date: 2/5/2016
 * Time: 9:06 AM
 */

namespace TestProject;


use FlyApi\Exception;
use Flywheel\Db\Type\DateTime;
use Flywheel\Object;
use Flywheel\Redis\Client;

class GlobalEventDispatcher extends Object{
    protected static $_instance;

    /**
     * @return GlobalEventDispatcher
     */
    public static function getInstance() {
        if (null == self::$_instance) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }

    /**
     * add handling event
     * @param $event
     */
    public static function addEvent($event) {
        $handling = self::getInstance();
        self::getEventDispatcher()->addListener($event, array($handling, $event));
    }

    /**
     * add handling many events
     * @param $events
     */
    public static function addEvents($events) {
        for($i = 0; $i < sizeof($events); ++$i) {
            self::addEvent($events[$i]);
        }
    }

    /**
     * @param \Flywheel\Event\Event $event
//     * @return bool|\Events
     */
    protected static function _storeEvent($event) {
        $logger = Logger::factory('global_event');

        try {


//            $om = new \Events();
//            $om->setName($event->getName());
//            $om->setData(json_encode($event->params));
//            $om->setGroup('account');
//            $om->setCreatedTime(new DateTime());
//            if($om->save()) {
//                return $om;
//            } else {
//                $context = (!$om->isValid())? $om->getValidationFailuresMessage("\n") : "";
//                $logger->error('Failed to save new events "' .$om->getName() .'" ' .$context);
//            }

            return false;
        } catch (\Exception $e) {
            $logger->addError('Failed to save new events. Message:' .$e->getMessage() .$e->getTraceAsString());
        }
        return false;
    }

    public function __call($method, $params) {
        $event = $params[0];

        if ($event instanceof \Flywheel\Event\Event) {
            self::_storeEvent($event);
        }
    }
}