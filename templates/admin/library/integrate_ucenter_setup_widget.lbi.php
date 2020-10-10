<?php defined('IN_ECJIA') or exit('No permission resources.');?>
<div>
    <form class="form-horizontal" id="form-privilege" name="Form1" action="{$form_action}" method="post">
        <fieldset>
            <div class="control-group">
                <label class="control-label">{$plugin_lang.ucenter_lable_id}</label>
                <div class="controls">
                    <input class="w350" type="text" name="cfg[uc_id]" value="{$cfg.uc_id}" /><i class="input-must"><span class="require-field" style="color:#FF0000,">*</span></i>
                    <span class="help-block" id="noticeGoodsSN">{$plugin_lang.ucenter_notice_id}</span>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">{$plugin_lang.ucenter_lable_key}</label>
                <div class="controls users">
                    <input class="w350" type="text" name="cfg[uc_key]" value="{$cfg.uc_key}" /><i class="input-must"><span class="require-field" style="color:#FF0000,">*</span></i>
                    <span class="w400 help-block" id="noticeGoodsSN">{$plugin_lang.ucenter_notice_key}</span>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">{$plugin_lang.ucenter_lable_url}</label>
                <div class="controls users">
                    <input class="w350" type="text" name="cfg[uc_url]" value="{$cfg.uc_url}" /><i class="input-must"><span class="require-field" style="color:#FF0000,">*</span></i>
                    <span class="w400 help-block" id="noticeGoodsSN">{$plugin_lang.ucenter_notice_url}</span>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">{$plugin_lang.ucenter_lable_ip}</label>
                <div class="controls users">
                    <input class="w350" type="text" name="cfg[uc_ip]" value="{$cfg.uc_ip}" />
                    <span class="help-block" id="noticeGoodsSN">{$plugin_lang.ucenter_notice_ip}</span>
                </div>
            </div>

            <div class="control-group">
                <div class="controls">
                    <input type="hidden" name="code" value="{$code}" />
                    <input class="btn btn-gebo m_r10" type="submit" value='{t domain="integrate"}保存{/t}' />
                    <input class="btn" type="reset" value='{t domain="integrate"}重置{/t}' />
                </div>
            </div>
        </fieldset>
    </form>
</div>