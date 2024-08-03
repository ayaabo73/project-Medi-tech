<div>
    @if($selected_conversation)
    <div class="main-content-body main-content-body-chat">
        <div class="main-chat-header">
            <div class="main-img-user"><img alt="" src="{{URL::asset('dashboard/img/faces/9.jpg')}}"></div>
            <div class="main-chat-msg-name">
                <h6>{{$receviverUser->name}}</h6>
            </div>
            <nav class="nav">
                <ul class="ah-actions actions align-items-center">
                    <li class="call-icon">
                        <a href="" class="d-done d-md-block phone-button" data-toggle="modal" data-target="#audiomodal">
                            <i class="si si-phone"></i>
                        </a>
                    </li>
                    <li class="video-icon">
                        <a href="" class="d-done d-md-block phone-button" data-toggle="modal" data-target="#videomodal">
                            <i class="si si-camrecorder"></i>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="" data-toggle="dropdown" aria-expanded="true">
                            <i class="si si-options-vertical"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><i class="fa fa-user-circle"></i> View profile</li>
                            <li><i class="fa fa-users"></i>Add friends</li>
                            <li><i class="fa fa-plus"></i> Add to group</li>
                            <li><i class="fa fa-ban"></i> Block</li>
                        </ul>
                    </li>
                    <li>
                        <a href=""  class="" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="si si-close text-black"></i></span>
                        </a>
                    </li>
                </ul>
               
            </nav>
        </div><!-- main-chat-header -->
        <div class="main-chat-body" id="ChatBody" style="overflow: hidden auto">
            <div class="content-inner">

                @foreach($messages as $message)
                <div class="media {{$auth_email == $message->sender_email ?'flex-row-reverse':''}}">
                    <div class="media-body">
                        <div class="main-msg-wrapper right">
                            {{$message->body}}
                        </div>
                        <div>
                            <span>{{$message->created_at->shortAbsoluteDiffForHumans()}}</span><a href=""><i class="icon ion-android-more-horizontal"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
</div>
