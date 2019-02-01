<a class="float" id="menu-share">
	<img src="{{URL::to('/')}}/img/float-icons/more.png" width="20" class="my-float">
</a>
<ul class="ul">
	@if(Auth::check())
	<li class="li">
		<a href="{{URL::to('/')}}/requests/add" data-toggle="tooltip" data-placement="left" title="Add request"><img src="{{URL::to('/')}}/img/float-icons/add.png" width="20" class="my-float"></a>
	</li>
	<li class="li">
		<a href="{{URL::to('/')}}/pm/send" data-toggle="tooltip" data-placement="left" title="Send private message"><img src="{{URL::to('/')}}/img/float-icons/message.png" width="20" class="my-float"></a>
	</li>
	@endif
	<li class="li">
		<a href="{{URL::to('/')}}/donate" data-toggle="tooltip" data-placement="left" title="Donate"><img src="{{URL::to('/')}}/img/float-icons/donate.png" width="20" class="my-float"></a>
	</li>
</ul>
