<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:96:"C:\phpStudy\PHPTutorial\WWW\1.0.0.20180911_full\public/../application/index\view\user\login.html";i:1536636086;s:90:"C:\phpStudy\PHPTutorial\WWW\1.0.0.20180911_full\application\index\view\layout\default.html";i:1540896091;}*/ ?>
<!DOCTYPE html >
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=1200, initial-scale=0.2" />
    <title>可为互娱官方网站</title>
    <meta name="Keywords" content="影动游联动，互动娱乐，影游联动">
    <meta name="description" content="可为互娱是一家致力于以IP运营为核心，将影视、游戏、动画跨界融合提升IP价值，并进行内容制作和宣传发行的互联网型的娱乐公司。">
    <link rel="stylesheet" type="text/css" href="/kewei/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/kewei/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="/kewei/css/mend.css"/>
    <script type="text/javascript" src="/kewei/js/jquery-1.8.3.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/kewei/css/layout.css" />
    <main class="content">
            <div id="content-container" class="container">
    <div class="user-section login-section">
        <div class="logon-tab clearfix"> <a class="active"><?php echo __('Sign in'); ?></a> <a href="<?php echo url('user/register'); ?>"><?php echo __('Sign up'); ?></a> </div>
        <div class="login-main"> 
            <form name="form" id="login-form" class="form-vertical" method="POST" action="">
                <input type="hidden" name="url" value="<?php echo $url; ?>" />
                <?php echo token(); ?>
                <div class="form-group">
                    <label class="control-label" for="account"><?php echo __('Account'); ?></label>
                    <div class="controls">
                        <input class="form-control input-lg" id="account" type="text" name="account" value="" data-rule="required" placeholder="<?php echo __('Email/Mobile/Username'); ?>" autocomplete="off">
                        <div class="help-block"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="password"><?php echo __('Password'); ?></label>
                    <div class="controls">
                        <input class="form-control input-lg" id="password" type="password" name="password" data-rule="required;password" placeholder="<?php echo __('Password'); ?>" autocomplete="off">
                    </div>
                </div>
                <div class="form-group">
                    <div class="controls">
                        <input type="checkbox" name="keeplogin" checked="checked" value="1"> <?php echo __('Keep login'); ?> 
                        <div class="pull-right"><a href="javascript:;" class="btn-forgot"><?php echo __('Forgot password'); ?></a></div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block"><?php echo __('Sign in'); ?></button>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/html" id="resetpwdtpl">
    <form id="resetpwd-form" class="form-horizontal form-layer" method="POST" action="<?php echo url('api/user/resetpwd'); ?>">
        <div class="form-body">
            <input type="hidden" name="action" value="resetpwd" />
            <div class="form-group">
                <label for="" class="control-label col-xs-12 col-sm-3"><?php echo __('Type'); ?>:</label>
                <div class="col-xs-12 col-sm-8">
                    <div class="radio">
                        <label for="type-email"><input id="type-email" checked="checked" name="type" data-send-url="<?php echo url('api/ems/send'); ?>" data-check-url="<?php echo url('api/validate/check_ems_correct'); ?>" type="radio" value="email"> <?php echo __('Reset password by email'); ?></label>
                        <label for="type-mobile"><input id="type-mobile" name="type" type="radio" data-send-url="<?php echo url('api/sms/send'); ?>" data-check-url="<?php echo url('api/validate/check_sms_correct'); ?>" value="mobile"> <?php echo __('Reset password by mobile'); ?></label>
                    </div>        
                </div>
            </div>
            <div class="form-group" data-type="email">
                <label for="email" class="control-label col-xs-12 col-sm-3"><?php echo __('Email'); ?>:</label>
                <div class="col-xs-12 col-sm-8">
                    <input type="text" class="form-control" id="email" name="email" value="" data-rule="required(#type-email:checked);email;remote(<?php echo url('api/validate/check_email_exist'); ?>, event=resetpwd, id=<?php echo $user['id']; ?>)" placeholder="">
                    <span class="msg-box"></span>
                </div>
            </div>
            <div class="form-group hide" data-type="mobile">
                <label for="mobile" class="control-label col-xs-12 col-sm-3"><?php echo __('Mobile'); ?>:</label>
                <div class="col-xs-12 col-sm-8">
                    <input type="text" class="form-control" id="mobile" name="mobile" value="" data-rule="required(#type-mobile:checked);mobile;remote(<?php echo url('api/validate/check_mobile_exist'); ?>, event=resetpwd, id=<?php echo $user['id']; ?>)" placeholder="">
                    <span class="msg-box"></span>
                </div>
            </div>
            <div class="form-group">
                <label for="captcha" class="control-label col-xs-12 col-sm-3"><?php echo __('Captcha'); ?>:</label>
                <div class="col-xs-12 col-sm-8">
                    <div class="input-group">
                        <input type="text" name="captcha" class="form-control" data-rule="required;length(4);integer[+];remote(<?php echo url('api/validate/check_ems_correct'); ?>, event=resetpwd, email:#email)" />
                        <span class="input-group-btn" style="padding:0;border:none;">
                            <a href="javascript:;" class="btn btn-info btn-captcha" data-url="<?php echo url('api/ems/send'); ?>" data-type="email" data-event="resetpwd"><?php echo __('Send verification code'); ?></a>
                        </span>
                    </div>
                    <span class="msg-box"></span>
                </div>
            </div>
            <div class="form-group">
                <label for="newpassword" class="control-label col-xs-12 col-sm-3"><?php echo __('New password'); ?>:</label>
                <div class="col-xs-12 col-sm-8">
                    <input type="password" class="form-control" id="newpassword" name="newpassword" value="" data-rule="required;password" placeholder="">
                    <span class="msg-box"></span>
                </div>
            </div>
        </div>
        <div class="form-group form-footer">
            <label class="control-label col-xs-12 col-sm-3"></label>
            <div class="col-xs-12 col-sm-8">
                <button type="submit" class="btn btn-md btn-info"><?php echo __('Ok'); ?></button>
            </div>
        </div>
    </form>
</script>
        </main>
