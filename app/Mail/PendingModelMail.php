<?php

namespace App\Mail;

use App\Models\Mannequin;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PendingModelMail extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var Mannequin
     */
    protected $mannequin;

    /**
     * Create a new message instance.
     *
     * @param Mannequin $mannequin
     */
    public function __construct(Mannequin $mannequin)
    {
        $this->mannequin = $mannequin;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(config('mail.from.address'), 'D Model Management')
            ->view('mails.pending_model')
            ->with([
                'mannequinId' => $this->mannequin->id,
                'mannequinName' => $this->mannequin->getName(),
            ]);
    }
}
