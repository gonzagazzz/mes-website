<style type="text/css">
	*{padding:0;margin:0;}
	body{
		background-color: #CCC;
	}
	.float{
		position:fixed;
		width:60px;
		height:60px;
		bottom:40px;
		right:40px;
		background-color:#cb1223;
		color:#FFF;
		border-radius:50px;
		text-align:center;
		box-shadow: 2px 2px 3px #cb1223;
		z-index:1000;
		animation: bot-to-top 2s ease-out;
	}
	.ul{
		position:fixed;
		right:40px;
		padding-bottom:20px;
		bottom:80px;
		z-index:100;
	}
	.ul .li{
		list-style:none;
		margin-bottom:10px;
	}
	.ul .li a{
		background-color:#cb1223;
		color:#FFF;
		border-radius:50px;
		text-align:center;
		box-shadow: 2px 2px 3px #cb1223;
		width:60px;
		height:60px;
		display:block;
	}
	.ul:hover{
		visibility:visible!important;
		opacity:1!important;
	}
	.my-float{
		font-size:24px;
		margin-top:20px;
	}
	a#menu-share + ul{
	  visibility: hidden;
	}
	a#menu-share:hover + ul{
	  visibility: visible;
	  animation: scale-in 0.5s;
	}
	a#menu-share img{
		animation: rotate-in 0.5s;
	}
	a#menu-share:hover > img{
		animation: rotate-out 0.5s;
	}
	@keyframes bot-to-top {
	    0%   {bottom:-40px}
	    50%  {bottom:40px}
	}
	@keyframes scale-in {
	    from {transform: scale(0);opacity: 0;}
	    to {transform: scale(1);opacity: 1;}
	}
	@keyframes rotate-in {
	    from {transform: rotate(0deg);}
	    to {transform: rotate(360deg);}
	}
	@keyframes rotate-out {
	    from {transform: rotate(360deg);}
	    to {transform: rotate(0deg);}
	}
</style>

<script type="text/javascript">
	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	})
</script>



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
