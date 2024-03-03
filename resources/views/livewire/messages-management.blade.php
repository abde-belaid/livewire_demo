<div>
    <ul class="" style="list-style:square;">

        @foreach ($messages as $message)
        <li>{{$message->message}} <i wire:click="delete({{ $message->id }})" class="fa fa-trash text-danger"></i>
        </li>
        @endforeach
    </ul>

    <div>

        <form action="">
            <input type="text" name="" class="form-control border border-primary border-4 w-100" wire:model="newmessage" placeholder="votre message ici ..." >
        <button wire:click="send" class="btn btn-success" id="btnSend">Envoyer</button>
        </form>
    </div>


</div>
