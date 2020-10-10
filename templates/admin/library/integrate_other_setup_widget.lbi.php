<?php defined('IN_ECJIA') or exit('No permission resources.');?>
<div id="form3">
    <form class="form-horizontal" id="form-privilege" action="{$form_action}" method="post" name="setupForm">
        <fieldset>
            <div class="control-group ">
                <label class="control-label">{t domain="integrate"}数据库服务器主机名：{/t}</label>
                <div class="controls users">
                    <input class="w350" type="text" name="cfg[db_host]" value="{$cfg.db_host}" /><i class="input-must"><span class="require-field" style="color:#FF0000,">*</span></i>
                </div>
            </div>
            <div class="control-group ">
                <label class="control-label">{t domain="integrate"}数据库帐号：{/t}</label>
                <div class="controls users">
                    <input class="w350" type="text" name="cfg[db_user]" value="{$cfg.db_user}" /><i class="input-must"><span class="require-field" style="color:#FF0000,">*</span></i>
                </div>
            </div>
            <div class="control-group ">
                <label class="control-label">{t domain="integrate"}数据库密码：{/t}</label>
                <div class="controls users">
                    <input class="w350" type="password" name="cfg[db_pass]" value="{$cfg.db_pass}" /><i class="input-must"><span class="require-field" style="color:#FF0000,">*</span></i>
                </div>
            </div>
            <div class="control-group ">
                <label class="control-label">{t domain="integrate"}数据库名：{/t}</label>
                <div class="controls users">
                    <input class="w350" type="text" name="cfg[db_name]" value="{$cfg.db_name}" /><i class="input-must"><span class="require-field" style="color:#FF0000,">*</span></i>
                </div>
            </div>
            <div class="control-group ">
                <label class="control-label">{t domain="integrate"}数据库字符集：{/t}</label>
                <div class="controls users">
                    <select class="w350" name="cfg[db_charset]">{html_options options=$set_list selected=$cfg.db_charset}</select>
                    <span class="help-block"> {t domain="integrate"}该选项填写错误时将可能到导致中文用户名无法使用{/t}</span>
                </div>
            </div>
            <div class="control-group ">
                <label class="control-label">{t domain="integrate"}是否为latin1编码：{/t}</label>
                <div class="controls users">
                    <input type="radio" name="cfg[is_latin1]" value="1" {if $cfg.is_latin1}checked="checked"{/if} />{t domain="integrate"}是{/t}
                    <input type="radio" name="cfg[is_latin1]" value="0" {if !$cfg.is_latin1}checked="checked"{/if} />{t domain="integrate"}否{/t}
                </div>
            </div>
            <div class="control-group ">
                <label class="control-label">{t domain="integrate"}数据表前缀：{/t}</label>
                <div class="controls users">
                    <input class="w350" type="text" name="cfg[prefix]" value="{$cfg.prefix}" />
                </div>
            </div>
            <div class="control-group ">
                <label class="control-label">{t domain="integrate"}被整合系统的完整 URL：{/t}</label>
                <div class="controls users">
                    <input class="w350" type="text" name="cfg[integrate_url]" value="{$cfg.integrate_url}" /><i class="input-must"><span class="require-field" style="color:#FF0000,">*</span></i>
                </div>
            </div>
            <!-- {if isset($cfg.cookie_prefix)} -->
            <div class="control-group ">
                <label class="control-label">{t domain="integrate"}COOKIE前缀：{/t}</label>
                <div class="controls users">
                    <input class="w350" type="text" name="cfg[cookie_prefix]" value="{$cfg.cookie_prefix}" /><i class="input-must"><span class="require-field" style="color:#FF0000,">*</span></i>
                </div>
            </div>
            <!-- {/if} -->
            <!-- {if isset($cfg.cookie_salt)} -->
            <div class="control-group ">
                <label class="control-label">{t domain="integrate"}COOKIE加密串：{/t}</label>
                <div class="controls users">
                    <input type="text" name="cfg[cookie_salt]" value="{$cfg.cookie_salt}" /><i class="input-must"><span class="require-field" style="color:#FF0000,">*</span></i>
                </div>
            </div>
            <!-- {/if} -->
            <div class="control-group">
                <div class="controls">
                    <input type="submit" value='{t domain="integrate"}保存配置信息{/t}' class="btn btn-gebo" />
                    <input type="reset" value='{t domain="integrate"}重置{/t}' class="btn"  />
                    <input type="hidden" name="code" value="{$code}" />
                    <input type="hidden" name="act" value="check_config" />
                    <input type="hidden" name="save" id="ECS_SAVE" value="{$save|default:0}">
                </div>
            </div>
        </fieldset>
    </form>
</div>