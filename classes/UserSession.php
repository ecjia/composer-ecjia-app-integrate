<?php


namespace Ecjia\App\Integrate;


use RC_Ip;
use RC_Session;

class UserSession
{
    /**
     * @var integer
     */
    private $user_id;

    /**
     * @var string
     */
    private $user_name;

    /**
     * @var string
     */
    private $user_email;

    /**
     * @var string
     */
    private $user_mobile;

    /**
     * @var string
     */
    private $last_login_time;

    /**
     * @var integer
     */
    private $session_user_id;

    /**
     * @var string
     */
    private $session_user_type;

    /**
     * @var string
     */
    private $client_ip;

    /**
     * UserLoginSession constructor.
     * @param int $user_id
     * @param string $user_name
     * @param string $user_email
     * @param string $user_mobile
     * @param string $last_login_time
     * @param int $session_user_id
     * @param string $session_user_type
     * @param string $client_ip
     */
    public function __construct($user_id = null, $user_name = null, $user_email = null, $user_mobile = null, $last_login_time = null, $session_user_id = null, $session_user_type = null, $client_ip = null)
    {
        $this->user_id           = $user_id;
        $this->user_name         = $user_name;
        $this->user_email        = $user_email;
        $this->user_mobile       = $user_mobile;
        $this->last_login_time   = $last_login_time;
        $this->session_user_id   = $session_user_id;
        $this->session_user_type = $session_user_type;
        $this->client_ip         = $client_ip;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }

    /**
     * @param int $user_id
     * @return UserSession
     */
    public function setUserId(?int $user_id)
    {
        $this->user_id = $user_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->user_name;
    }

    /**
     * @param string $user_name
     * @return UserSession
     */
    public function setUserName(?string $user_name)
    {
        $this->user_name = $user_name;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserEmail(): string
    {
        return $this->user_email;
    }

    /**
     * @param string $user_email
     * @return UserSession
     */
    public function setUserEmail(?string $user_email)
    {
        $this->user_email = $user_email;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserMobile(): string
    {
        return $this->user_mobile;
    }

    /**
     * @param string $user_mobile
     * @return UserSession
     */
    public function setUserMobile(?string $user_mobile)
    {
        $this->user_mobile = $user_mobile;
        return $this;
    }


    /**
     * @return string
     */
    public function getLastLoginTime(): string
    {
        return $this->last_login_time;
    }

    /**
     * @param string $last_login_time
     * @return UserSession
     */
    public function setLastLoginTime(?string $last_login_time)
    {
        $this->last_login_time = $last_login_time;
        return $this;
    }

    /**
     * @return int
     */
    public function getSessionUserId(): int
    {
        return $this->session_user_id;
    }

    /**
     * @param int $session_user_id
     * @return UserSession
     */
    public function setSessionUserId(?int $session_user_id)
    {
        $this->session_user_id = $session_user_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getSessionUserType(): string
    {
        return $this->session_user_type;
    }

    /**
     * @param string $session_user_type
     * @return UserSession
     */
    public function setSessionUserType(?string $session_user_type)
    {
        $this->session_user_type = $session_user_type;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientIp(): string
    {
        return $this->client_ip;
    }

    /**
     * @param string $client_ip
     * @return UserSession
     */
    public function setClientIp(?string $client_ip)
    {
        $this->client_ip = $client_ip;
        return $this;
    }

    /**
     * 创建登录会话
     */
    public function createLoginSession()
    {
        RC_Session::set('user_id', $this->user_id);
        RC_Session::set('user_name', $this->user_name);
        RC_Session::set('session_user_id', $this->session_user_id ?: $this->user_id);
        RC_Session::set('session_user_type', $this->session_user_type ?: 'user');
        RC_Session::set('last_login_time', $this->last_login_time); // 用于保存最后一次登录的时间
        RC_Session::set('mobile', $this->user_mobile);
        RC_Session::set('email', $this->user_email);
        RC_Session::set('ip', RC_Ip::client_ip());
    }

}