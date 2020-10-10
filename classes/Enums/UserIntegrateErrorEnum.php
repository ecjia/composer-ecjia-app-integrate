<?php
/**
 * Created by PhpStorm.
 * User: royalwang
 * Date: 2019-03-15
 * Time: 11:01
 */

namespace Ecjia\App\Integrate\Enums;


use Royalcms\Component\Enum\Enum;

class UserIntegrateErrorEnum extends Enum
{

    /**
     * 用户名已经存在
     */
    const ERR_USERNAME_EXISTS       = 1;

    /**
     * Email已经存在
     */
    const ERR_EMAIL_EXISTS          = 2;

    /**
     * 无效的user_id
     */
    const ERR_INVALID_USERID        = 3;

    /**
     * 无效的用户名
     */
    const ERR_INVALID_USERNAME      = 4;

    /**
     * 密码错误
     */
    const ERR_INVALID_PASSWORD      = 5;

    /**
     * Email错误
     */
    const ERR_INVALID_EMAIL         = 6;

    /**
     * 用户名不允许注册
     */
    const ERR_USERNAME_NOT_ALLOW    = 7;

    /**
     * EMAIL不允许注册
     */
    const ERR_EMAIL_NOT_ALLOW       = 8;

    /**
     * 手机号已经存在
     */
    const ERR_MOBILE_EXISTS         = 11;

    /**
     * 手机号错误
     */
    const ERR_INVALID_MOBILE        = 12;


    protected function __statusMap()
    {
        return [
            self::ERR_USERNAME_EXISTS         => __('用户名已经存在', 'integrate'),
            self::ERR_EMAIL_EXISTS            => __('邮箱已经存在', 'integrate'),
            self::ERR_INVALID_USERID          => __('无效的用户ID', 'integrate'),
            self::ERR_INVALID_USERNAME        => __('无效的用户名', 'integrate'),
            self::ERR_INVALID_PASSWORD        => __('密码错误', 'integrate'),
            self::ERR_INVALID_EMAIL           => __('邮箱地址错误', 'integrate'),
            self::ERR_USERNAME_NOT_ALLOW      => __('用户名不允许注册', 'integrate'),
            self::ERR_EMAIL_NOT_ALLOW         => __('邮箱不允许注册', 'integrate'),
            self::ERR_MOBILE_EXISTS           => __('手机号已经存在', 'integrate'),
            self::ERR_INVALID_MOBILE          => __('手机号错误', 'integrate'),
        ];
    }

}