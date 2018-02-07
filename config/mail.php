<?php

return [
   'driver' => env('MAIL_DRIVER', 'smtp'),
   'host' => env('MAIL_HOST', 'smtp.gmail.com'),
   'port' => env('MAIL_PORT', 587),
   'from' => ['intranet' => 'suporte@cartoriomartins.com.br','diego' => 'intranet'],
   'encryption' => env('MAIL_ENCRYPTION', 'tls'),
   'username' => env('MAIL_USERNAME','suporte@cartoriomartins.com.br'),
   'password' => env('MAIL_PASSWORD','cassador23'),
   'sendmail' => '/usr/sbin/sendmail -bs',


];

Mail::send('emails.recuperar-senha',$dados, function ($message)use($request){
        $message->from(\Config::get('mail.from.teste'))
                ->to('suporte@cartoriomartins.com.br')
                ->subject('recuperar senha');
    });
