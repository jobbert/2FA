<?php
/**
*
* @package phpBB Extension - Jobbert 2FA
* @copyright (c) 2016 Job Peters
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/
checkAuthy();
public function registerBundles()
{
    $bundles = array(
        // ...
        new Scheb\TwoFactorBundle\SchebTwoFactorBundle(),
    );
}
