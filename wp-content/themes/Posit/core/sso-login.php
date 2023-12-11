<?php
/*  Define variables for sso login URL and certificate  */
function sso_login(){
  $sso_login_url = '';
  $sso_login_certpath = '';
  if(!empty($_ENV['PANTHEON_ENVIRONMENT'])) {
    switch ($_ENV['PANTHEON_ENVIRONMENT']) {
      case 'live':
          $sso_login_url = ("https://posit.okta.com/app/posit_wordpressadminlive_1/exk4xqo71gUsUEFAr697/sso/saml");
          $sso_login_certpath = ("sso_login_live.pem");
          $sso_login_entityId = ("http://www.okta.com/exk4xqo71gUsUEFAr697");
          break;
      case 'test':
          $sso_login_url = ("https://posit.okta.com/app/posit_wordpressadmintest_1/exk4xpyfz8WgcCekC697/sso/saml");
          $sso_login_certpath = ("sso_login_test.pem");
          $sso_login_entityId = ("http://www.okta.com/exk4xpyfz8WgcCekC697");
          break;
      case 'wp-migrate':
            $sso_login_url = ("https://posit.okta.com/app/posit_pantheonmigrate_1/exk5187r7vgZTbW1R697/sso/saml");
            $sso_login_certpath = ("sso_login_wpmigrate.pem");
            $sso_login_entityId = ("http://www.okta.com/exk5187r7vgZTbW1R697");
            break;
    default:
        $sso_login_url = ("https://posit.okta.com/app/posit_wordpressadmindev_1/exk4xpx6uc9DWqkog697/sso/saml");
        $sso_login_certpath = ("sso_login_dev.pem");
        $sso_login_entityId = ("http://www.okta.com/exk4xpx6uc9DWqkog697");
          break;
    }
  }else{
      $sso_login_url = ("https://posit.okta.com/app/posit_wordpressadmindev_1/exk4xpx6uc9DWqkog697/sso/saml");
      $sso_login_certpath = ("sso_login_dev.pem");
      $sso_login_entityId = ("http://www.okta.com/exk4xpx6uc9DWqkog697");
    }
return array($sso_login_url, $sso_login_certpath, $sso_login_entityId);
  }
