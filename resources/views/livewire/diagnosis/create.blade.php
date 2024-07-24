<div>
    <div class="col-xl-12 col-lg-7">
        <div class="card">
            <a class="main-header-arrow" href="" id="ChatBodyHide"><i class="icon ion-md-arrow-back"></i></a>
                
        <div class="main-content-body main-content-body-chat">
            <div class="main-chat-header">
    
                <div class="main-chat-msg-name">
                    <h4>Robo-Doc</h4>
                </div>
    
            </div><!-- main-chat-header -->
            <div class="main-chat-body" id="ChatBody" style="overflow: hidden auto">
                <div class="content-inner">
    
                  
                    @foreach ($messages as $message)
                        <div class="{{ $message['styles'] }}">
                            <div class="media-body">
                                <div class="main-msg-wrapper right">
                                    {{ $message['content'] }}
                                </div>
                                <div>
                                    <span>{{ $message['time']->diffForHumans() }}</span>
                                    <a href=""><i class="icon ion-android-more-horizontal"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                 
                </div>
            </div>
        </div>
        <form wire:submit.prevent='sendMessage'>
   
            <div class="main-chat-footer">
                
                <input class="form-control" id='message-body' wire:model="body" placeholder="Type your message here..." type="text">
                <button class="main-msg-send" type="submit"><i class="far fa-paper-plane"></i></button>
                <script>
                    Livewire.on('clear-message', function() {
                        document.getElementById('message-body').value = '';
                    });
                </script>
            </div>
        </div>
        </form>
    
    </div>

 