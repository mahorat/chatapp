<!DOCTYPE html>
<html>
<head>
	<title>Chat App</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
	<div class="container">
		<div class="row" id="app">
			<div class="offset-4 col-4">
				<li class="list-group-item active">Chat App</li>
				<ul class="list-group" v-chat-scroll>
				  <message
					v-for="message in chat.message"
					:key=message.index
					color='success'
				  >
				  	@{{message}}
				  </message>
				</ul>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Type message here..." v-model='message' @keyup.enter='send'>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>