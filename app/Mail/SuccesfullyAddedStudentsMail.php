<?php
class SuccesfullyAddedStudentsMail extends \Illuminate\Mail\Mailable
{
    use \Illuminate\Bus\Queueable,\Illuminate\Queue\SerializesModels;
    public $name;
    public function __construct($name)
    {
        $this->subject = 'succefully added';
        $this->from = [['address' =>config('mail.from.address'),'name' => config('mail.from.name')]];
        $this->name = $name;
    }

    public function build()
    {
        return $this->view('mails/joinmail', ['name'=>$this->name]);
    }
}
