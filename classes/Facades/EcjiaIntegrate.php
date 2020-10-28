<?php 
//  
//    ______         ______           __         __         ______
//   /\  ___\       /\  ___\         /\_\       /\_\       /\  __ \
//   \/\  __\       \/\ \____        \/\_\      \/\_\      \/\ \_\ \
//    \/\_____\      \/\_____\     /\_\/\_\      \/\_\      \/\_\ \_\
//     \/_____/       \/_____/     \/__\/_/       \/_/       \/_/ /_/
//
//   上海商创网络科技有限公司
//   
//  ---------------------------------------------------------------------------------
//
//   一、协议的许可和权利
//
//    1. 您可以在完全遵守本协议的基础上，将本软件应用于商业用途；
//    2. 您可以在协议规定的约束和限制范围内修改本产品源代码或界面风格以适应您的要求；
//    3. 您拥有使用本产品中的全部内容资料、商品信息及其他信息的所有权，并独立承担与其内容相关的
//       法律义务；
//    4. 获得商业授权之后，您可以将本软件应用于商业用途，自授权时刻起，在技术支持期限内拥有通过
//       指定的方式获得指定范围内的技术支持服务；
//
//   二、协议的约束和限制
//
//    1. 未获商业授权之前，禁止将本软件用于商业用途（包括但不限于企业法人经营的产品、经营性产品
//       以及以盈利为目的或实现盈利产品）；
//    2. 未获商业授权之前，禁止在本产品的整体或在任何部分基础上发展任何派生版本、修改版本或第三
//       方版本用于重新开发；
//    3. 如果您未能遵守本协议的条款，您的授权将被终止，所被许可的权利将被收回并承担相应法律责任；
//
//   三、有限担保和免责声明
//
//    1. 本软件及所附带的文件是作为不提供任何明确的或隐含的赔偿或担保的形式提供的；
//    2. 用户出于自愿而使用本软件，您必须了解使用本软件的风险，在尚未获得商业授权之前，我们不承
//       诺提供任何形式的技术支持、使用担保，也不承担任何因使用本软件而产生问题的相关责任；
//    3. 上海商创网络科技有限公司不对使用本产品构建的商城中的内容信息承担责任，但在不侵犯用户隐
//       私信息的前提下，保留以任何方式获取用户信息及商品信息的权利；
//
//   有关本产品最终用户授权协议、商业授权与技术服务的详细内容，均由上海商创网络科技有限公司独家
//   提供。上海商创网络科技有限公司拥有在不事先通知的情况下，修改授权协议的权力，修改后的协议对
//   改变之日起的新授权用户生效。电子文本形式的授权协议如同双方书面签署的协议一样，具有完全的和
//   等同的法律效力。您一旦开始修改、安装或使用本产品，即被视为完全理解并接受本协议的各项条款，
//   在享有上述条款授予的权力的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反本
//   授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权力。
//
//  ---------------------------------------------------------------------------------
//
namespace Ecjia\App\Integrate\Facades;

use Ecjia\App\Integrate\Password;
use Royalcms\Component\Support\Facades\Facade;

/**
 * Class EcjiaIntegrate
 * @package Ecjia\App\Integrate\Facades
 *
 * @method static \Ecjia\App\Integrate\IntegratePlugin plugin()
 * @method static bool login($username, $password, $remember = null) User login function
 * @method static void logout() User logs out
 * @method static void integrate_list() Get all available plugins
 * @method static \ecjia_error getError()
 * @method static string getErrorMessage()
 * @method static bool needSync()
 * @method static \Royalcms\Component\Support\Collection getPluginMateData() 获取插件的元数据
 * @method static array getProfileByName($username) 获取指定用户的信息
 * @method static array getProfileById($id) 获取指定用户的信息
 * @method static array getProfileByMobile($mobile) 获取指定用户的信息
 * @method static array compilePassword($password, $md5password = null, $salt = null, $type = Password::PWD_MD5) 编译密码函数 包含参数为 $password, $md5password, $salt, $type
 * @method static array getUserInfo($username)
 * @method static array getPointsName()
 * @method static void syncRemoveUser($username)
 * @method static bool sync($username, $password = null, $md5password = null) 会员同步，使用第三方用户数据表同步时，将用户信息同步一份到ecjia_users数据表中
 * @method static mixed userRemoveClearData($user_id) 删除用户时，清除用户数据
 * @method static bool checkCookie() 检查cookie是正确，返回用户名
 * @method static void setCookie($username, $remember = null) 设置cookie
 * @method static bool getCookie() 根据登录状态设置cookie
 * @method static bool clearCookie() 清除记住密码的cookie
 * @method static void setSession($username = null) 设置指定用户SESSION
 * @method static void clearSession() 清除Session
 * @method static bool addUser($username, $password, $email, $mobile = null, $gender = -1, $bday = null, $reg_date = 0, $md5password = null) 添加一个新用户
 * @method static bool editUser($params) 编辑用户信息($password, $email, $gender, $bday)
 * @method static mixed updateNewEmailForNotValidated($username) 修改email后，设email为新mail，设置为未验证
 * @method static bool | null removeUser($username) 删除用户
 * @method static bool checkUser($username, $password = null) 检查指定用户是否存在及密码是否正确
 * @method static bool checkEmail($email, $exclude_username = null) 检查指定邮箱是否存在
 * @method static bool checkMobile($mobile, $exclude_username = null) 检查指定手机号是否存在
 * @method static integer syncWithMobile($mobile) 会员同步
 * @method static integer syncWithUsername($username) 会员同步
 *
 */
class EcjiaIntegrate extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'ecjia.integrate';
    }
    
}
