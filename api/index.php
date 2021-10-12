<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', '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');

$apiInstance = new SendinBlue\Client\Api\TransactionalEmailsApi(new GuzzleHttp\Client(),$config);
$sendSmtpEmail = new \SendinBlue\Client\Model\SendSmtpEmail();
$sendSmtpEmail['subject'] = 'My sdfs';
$sendSmtpEmail['htmlContent'] = '<html><body><h1>This is a transactional email {{params.parameter}}</h1></body></html>';
$sendSmtpEmail['sender'] = array('name' => 'John Doe', 'email' => 'example@example.com');
$sendSmtpEmail['to'] = array(
    array('email' => 'kuldeep.tki1@gmail.com', 'name' => 'Jane Doe')
);
$sendSmtpEmail['replyTo'] = array('email' => 'replyto@domain.com', 'name' => 'John Doe');
$sendSmtpEmail['headers'] = array('Some-Custom-Name' => uniqid());
$sendSmtpEmail['params'] = array('parameter' => 'My param value', 'subject' => 'New Subject');

try {
    $result = $apiInstance->sendTransacEmail($sendSmtpEmail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalEmailsApi->sendTransacEmail: ', $e->getMessage(), PHP_EOL;
}
?>
