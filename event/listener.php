<?php
/**
 *
 * @package Quick Login Extension
 * @copyright (c) 2015 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace paybas\quicklogin\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	/** @var \phpbb\auth\auth */
	protected $auth_provider_collection;

	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/** @var string phpBB root path */
	protected $root_path;

	/** @var string PHP extension */
	protected $phpEx;

	public function __construct(\phpbb\auth\provider_collection $auth_provider_collection, \phpbb\config\config $config, \phpbb\template\template $template, \phpbb\user $user, $root_path, $phpEx)
	{
		$this->auth_provider_collection = $auth_provider_collection;
		$this->config                   = $config;
		$this->template                 = $template;
		$this->user                     = $user;
		$this->root_path                = $root_path;
		$this->phpEx                    = $phpEx;
	}

	/**
	 */
	public function checkAuthy()
	{
		if($login['status'] === LOGIN_SUCCESS) {
			echo "<script>alert();</script>";
		}
	}
}
