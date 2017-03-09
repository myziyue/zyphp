<?php
/**
 * Created by PhpStorm.
 *
 * @author Bi Zhiming <evan2884@gmail.com>
 * @created 2017/3/9  下午5:57
 * @since 1.0
 */

namespace app\dao;


use ziyue\exception\UnknownClassException;

class DaoFactory
{
    private static $nameSpace = "\\app\\dao";
    private static $daoInstrance = [];

    /**
     * @param $daoModel
     * @param $daoClass
     */
    public static function createDao($daoModel, $daoClass){
        $daoFullClass = self::$nameSpace . "\\" . strtolower($daoModel) . "\\" . ucfirst($daoClass) . "Dao";
        if(!isset(self::$daoInstrance[$daoFullClass])){
            if(!class_exists($daoFullClass)){
                throw new UnknownClassException("Unable to find '$daoFullClass' in file: ".__FILE__.". Namespace missing?");
            }
            self::$daoInstrance[$daoFullClass] = new $daoFullClass;
        }
        return self::$daoInstrance[$daoFullClass];
    }
}