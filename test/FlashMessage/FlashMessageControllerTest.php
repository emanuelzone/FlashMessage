<?php
namespace Ezon\FlashMessage;
 
/**
 * A controller for users and admin related events.
 *
 */
class FlashMesasgeControlTest extends \PHPUnit_Framework_TestCase
{
  
  public function testAddMessage() {
        $el = new \Ezon\FlashMessage\FlashController();
        $di = new \Anax\DI\CDIFactoryDefault();
        $el->setDI($di);
        $el->addMessage('content', 'type');
        $res = $el->getFlashMessages();
        $exp = "<p class='type'>content</p>";
        $this->assertEquals($res, $exp, "Missmatch");
}
public function testShowMsg() {
 
        $el = new \Ezon\FlashMessage\FlashController();
        $di = new \Anax\DI\CDIFactoryDefault();
        $el->setDI($di);
        $res = $el->getFlashMessages();
        $exp = null;
        $this->assertEquals($res, $exp, "Missmatch");
}
}
?>
