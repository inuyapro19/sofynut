<?php

namespace App\Listeners;
use Mail;
use App\Events\FormularioEnviado;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\mail\SendMail;

class EnvioCorreo
{
   
    public function handle(FormularioEnviado $event)
    {
        Mail::to('chico.otaku22@gmail.com')->queue(
            new SendMail($event->nombre , $event->apellido,$event->telefono,$event->email,$event->mensaje)
        );
    }
}
