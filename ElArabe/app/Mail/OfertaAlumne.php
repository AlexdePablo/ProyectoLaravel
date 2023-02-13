<?php

namespace App\Mail;

use App\Models\Oferta;
use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OfertaAlumne extends Mailable
{
    use Queueable, SerializesModels;
    public $desc="AAAAAAAAAAAAA";
    public $NombreV;

    public $Curs;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Oferta $oferta)
    {

        $this->desc = $oferta->Descripció;
        $this->NombreV = $oferta->NombreVacants;
        $this->Curs = $oferta->Curs;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Oferta Alumne',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'emails.ofertaAlumne',
        );
    }
    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
