<?php
/**
 * Created by PhpStorm.
 *
 * @author Bi Zhiming <evan2884@gmail.com>
 * @created 2017/3/9  下午5:57
 * @since 1.0
 */

namespace app\models;


use ziyue\exception\UnknownClassException;

class ModelFactory
{
    private static $nameSpace = "\\app\\models";
    private static $modelInstrance = [];

    /**
     * @param $daoModel
     * @param $daoClass
     */
    public static function get($model, $modelClass){
        $modelFullClass = self::$nameSpace . "\\" . strtolower($model) . "\\" . ucfirst($modelClass) . "Model";
        if(!isset(self::$modelInstrance[$modelFullClass])){
            if(!class_exists($modelFullClass)){
                throw new UnknownClassException("Unable to find '$modelFullClass' in file: ".__FILE__.". Namespace missing?");
            }
            self::$modelInstrance[$modelFullClass] = new $modelFullClass;
        }
        return self::$modelInstrance[$modelFullClass];
    }
}