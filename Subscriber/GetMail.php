<?php
namespace BlurThemeViews\Subscriber;

use Doctrine\ORM\Mapping as ORM;
use Enlight\Event\SubscriberInterface;
use Shopware\Components\Plugin\ConfigReader;
use Shopware\Models\Mail\Mail;
use Shopware\Components\Model\ModelEntity;

use Shopware\Components\Logger;

class GetMail implements SubscriberInterface
{
    
    /**
     * @var $logger Logger
     */
    private $logger;
    
    /**
     * @param $logger Logger
     */
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }
    
    public static function getSubscribedEvents()
    {
            return [
                'Enlight_Controller_Action_PostDispatch_Backend_Mail' => 'onGetMail'
            ];
    }
    
    /*
     * Mail Template Sandbox
     *
     * @var $isUserLoggedIn = $userLoggedIn
     */
    public function onGetMail(\Enlight_Controller_ActionEventArgs $args)
    {
        // the Views HTML Mail Template
        $htmlContent = "<div>das ist ein html content</div>";
        
        // get the origin HTML Mail Template
        $sorderOrgHtml = Shopware()->Models()->getRepository(Mail::class)->findOneBy(array('name' => 'sORDER'))->getContentHtml();
        $sorderViewsHtml = Shopware()->Models()->getRepository(Mail::class)->findOneBy(array('name' => 'sORDER'))->setContentHtml($htmlContent);

        // write the origin HTML Mail Template in a file
        file_put_contents(__DIR__ . "/../mails/sORDER.tpl", $sorderOrgHtml);
        
        //Shopware()->Models()->persist($sorderTemplateHtml);
        //Shopware()->Models()->flush($sorderTemplateHtml);

        $debug = \Doctrine\Common\Util\Debug::dump($sorderOrgHtml, 2, true, false);
        //var_dump($debug);
    }
}