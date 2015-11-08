# FlashMessageControl

Hello there, 

This is a result of a lesson in a school project.

Flash messages are used to inform the user about the state of the action he / she has made or simply displaying information to users. These types of messages can be generated using this component. Below you will find some examples of instant messaging with Font Awesome.

You can easily remove or add your own messages, but you must specify them in the flashmessages.css. This version is also used with Font Awesome which you can download via https://fortawesome.github.io/Font-Awesome/.

Installation

1. To install, I recommend composer.
2. Add this line into composer.json file: "require": {"ezon/flashmessage": "dev-master"}

#Access the controller in your frontcontroller:

$di->setShared('flashMessages', function() use ($di){ $flashMessages = new Ezon\FlashMessage\FlashController($di); return $flashMessages; }); 

In the router you also need to add the css-stylesheet flashmessages.css


#Add the route in your front controller:

// Test Route $app->router->add('', function() use ($app) {

$app->theme->setTitle("Testing FlashMEssages"); 

$app->flashMessages->addMessage('Check!', 'success');
$app->flashMessages->addMessage('Information', 'info');
$app->flashMessages->addMessage('Warning!', 'warning');
$app->flashMessages->addMessage('Error', 'error');

//Adds the view to display the messages

$app->views->add('flash/flash', [ 
    'content' => $app->flashMessages->getFlashMessages(),
    ]); 

});
