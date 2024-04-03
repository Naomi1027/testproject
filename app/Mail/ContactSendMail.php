<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactSendMail extends Mailable
{
    use Queueable, SerializesModels;

    // プロパティを定義
    private $email;
    private $name;
    private $content;

    /**
     * Create a new message instance.
     */
    public function __construct($inputs)
    {
        // コンストラクタでプロパティに値を格納
        // $this->name  = $inputs['name'];
        // $this->email = $inputs['email'];
        // $this->content = $inputs['content'];
        $this->inputs = $inputs;
    }

    public function build()
    {
    // メールの設定
    return $this
            ->from('naomimotomura27@gmail.com')
            ->subject('お問合せを受け付けました')
            ->view('thanks')
            ->with(['inputs' => $this->inputs]);
            // ->with([
            // 'email' => $this->email,
            // 'name' => $this->name,
            // 'content' => $this->content,
            // ]);
    }

    /**
     * Get the message envelope.
     */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'お問い合わせ',
    //         from: 'naomimotomura27@gmail.com',
    //     );
    // }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view:'thanks',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
