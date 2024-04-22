<div>
    <div class="main-chat-list" id="ChatList">
        @foreach ($Conversations as $Conversation)
        <div class="media new"
        wire:click="chatUserSelected({{$Conversation }},'{{ $this->get($Conversation,$name='id')}}')">
       
            <div class="main-img-user online">
                <img alt="" src="{{URL::asset('dashboard/img/faces/5.jpg')}}">  
            </div>
            
            <div class="media-body">
             
                <div class="media-contact-name">
                    <span>{{$this->get($Conversation,$name='name')}}</span> 
                    <span>{{$Conversation->messages->last()->created_at->shortAbsoluteDiffForHumans()}}</span>
                </div>
                <p>{{$Conversation->messages->last()->body}}</p>
              
            </div>
          
        </div>
        @endforeach
    </div><!-- main-chat-list -->
</div>
