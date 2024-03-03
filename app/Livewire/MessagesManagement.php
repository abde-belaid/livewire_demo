<?php

namespace App\Livewire;

use App\Models\Message;
use Livewire\Component;

class MessagesManagement extends Component
{
    public $newmessage;
    public $idMessage;

    public function send()
    {
        // dd('test');

        $sms = new Message();
        $sms->message = $this->newmessage;
        $sms->save();
        // $this->newmessage = '';
        $this->reset('newmessage');
        // return redirect(route('index'));
    }

    public function delete($id){
        Message::findOrfail($id)->delete();
        // $mess=Message::findOrfail($id);
        // dd($mess);
    }


    public function render()
    {
        // dd(Message::all());
        return view('livewire.messages-management', ['messages' => Message::all()]);
    }
}
