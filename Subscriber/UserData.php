<?php
namespace BlurThemeViews\Subscriber;

use Enlight\Event\SubscriberInterface;
use Shopware\Components\Plugin\ConfigReader;

class UserData implements SubscriberInterface
{
    private $userLoggedIn;
	
    private $userInfo;
    
    private $session;
    
    /*
     * UserData constructor
     *
     * @param \Enlight_Components_Session_Namespace $session
     */
    public function __construct(
        \Enlight_Components_Session_Namespace $session
    ) {
        $this->session      = $session;
		
		//echo $this->session->get('sUserId');
    }
    
    /*
     * Subscribe Events and register functions
     * 
     * @func getUserData
     */
    public static function getSubscribedEvents()
    {
        return [
            'Enlight_Controller_Action_PostDispatchSecure_Frontend' => 'getUserData',
            'Enlight_Controller_Action_PostDispatchSecure_Widgets' => 'getUserData'
        ];
    }
    
    /*
     * Assign Objects to Smarty
     *
     * @var $isUserLoggedIn = $userLoggedIn
     */
    public function getUserData(\Enlight_Controller_ActionEventArgs $args)
    {       
        $view = $args->getSubject()->View();
        
        if (null === $this->userLoggedIn) {
            $this->userLoggedIn = (bool)$this->session->get('sUserId');
        }
		
		if ($this->userLoggedIn) {
			$this->userInfo = Shopware()->Container()->get('shopware_account.store_front_greeting_service')->fetch();
		}
        
        $view->assign('isUserLoggedIn', $this->userLoggedIn);
        $view->assign('userInfo', $this->userInfo);
    }
}

?>