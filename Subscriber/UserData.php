<?php
namespace BlurThemeViews\Subscriber;

use Enlight\Event\SubscriberInterface;

class UserData implements SubscriberInterface
{
    private $userLoggedIn;
    
    public static function getSubscribedEvents()
    {
        return [
            'Enlight_Controller_Action_PostDispatchSecure_Frontend' => 'getUserData'
        ];
    }
    
    public function getUserData(\Enlight_Controller_ActionEventArgs $args)
    {
        $view = $args->getSubject()->View();
        
        if (null === $this->userLoggedIn) {
            $this->userLoggedIn = (bool)$this->session->get('sUserId');
        }
        
        $globalUserData = [];
        
        // assign userData array to smarty
        if ($this->userLoggedIn) {
//            $this->addUserData($globalUserData);
        }
        
        if ($this->userLoggedIn) {
//            $this->addUserAttributes($globalUserData);
        }
        
        $view->assign('bcUserLoggedIn', $this->userLoggedIn);
//        $view->assign('globalUserData', $globalUserData);
    }
}

?>