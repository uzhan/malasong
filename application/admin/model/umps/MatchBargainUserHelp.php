<?php
namespace app\admin\model\umps;

use basic\ModelBasic;
use traits\ModelTrait;

/**
 * 砍价帮砍Model
 * Class StoreBargainUserHelp
 * @package app\admin\model\ump
 */
class MatchBargainUserHelp extends ModelBasic
{
    use ModelTrait;

    /**
     * 获取砍价昌平帮忙砍价人数
     * @param int $bargainId
     * @return int|string
     */
    public static function getCountPeopleHelp($bargainId = 0){
        if(!$bargainId) return 0;
        return self::where('bargain_id',$bargainId)->count();
    }

}

