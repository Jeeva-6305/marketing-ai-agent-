<?php
require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mime\Email;

try {
    $transport = Transport::fromDsn('smtp://localhost:1025');
    $mailer = new Mailer($transport);

    $email = (new Email())
        ->from('admin@mautic.ddev.site')
        ->to('jeevanandham@adople.ai')
        ->subject('🎉 SUCCESS: Your Mautic Email is Delivered!')
        ->text("Hello Jeeva,\n\nThis is a direct test email from your Mautic application!\nYour email sending system is completely working.\n\nTime: " . date('Y-m-d H:i:s'));

    $mailer->send($email);
    echo "=========================================\n";
    echo "SUCCESS! Email has been sent to Mailpit!\n";
    echo "=========================================\n";
} catch (\Exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}

