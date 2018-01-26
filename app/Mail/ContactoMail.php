<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactoMail extends Mailable
{
    use Queueable, SerializesModels;

    private $nombre;
    private $apellido;
    private $telefono;
    private $email;
    private $mensaje;
    

    public function __construct($nombre,$apellido,$telefono,$email,$mensaje)
    {
        $this.nombre=$nombre;
        $this.apellido=$apellido;
        $this.telefono=$telefono;
        $this.email=$email;
        $this.mensaje=$mensaje;
    }

   
    public function build()
    {
        return $this->view('mail.contacto');
    }
}
