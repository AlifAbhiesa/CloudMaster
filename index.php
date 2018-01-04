<!DOCTYPE HTML>
<!--
	Aerial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
        <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
  <script src="https://static-cdn.kloudless.com/p/platform/sdk/kloudless.explorer.js"></script>
         <script src="https://static-cdn.kloudless.com/p/platform/sdk/kloudless.explorer.js"></script>
		<title>CLOUD MASTER</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="loading">
		<div id="wrapper">
			<div id="bg"></div>
			<div id="overlay"></div>
			<div id="main">

				<!-- Header -->
					<header id="header">
						<h1>CLOUD MASTER</h1>
						<p>Alif &nbsp;&bull;&nbsp; Anisa &nbsp;&bull;&nbsp; Kevin &nbsp;&bull;&nbsp; Tegar</p>
						<nav>
							<ul>
								<li><a id="chooser" href="#" class="icon fa-hdd-o"><span id="chooser" class="label">Upload</span>
                                    </a></li>
                                <li>
                                    <a id="saver" href="#" class="icon fa-cloud-upload"><span id="saver" class="label">Upload</span>
                                    </a></li>
								
							</ul>
						</nav>
					</header>

				<!-- Footer -->
					<footer id="footer">
						<span class="copyright">&copy; Design: <a href="http://html5up.net">xcode___</a>.</span>
					</footer>

			</div>
		</div>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script>
			window.onload = function() { document.body.className = ''; }
			window.ontouchmove = function() { return false; }
			window.onorientationchange = function() { document.body.scrollTop = 0; }
		</script>
         
        
<script>
    // File Explorer Configuration
var explorer = window.Kloudless.explorer({
    // Chooser and Saver Options
    app_id: 'iCZ_ICMy43H0NSoz0QbLvmyjzCHf2frAOPaBfWVgh9_vrFIM',
    computer: true,
    persist: "local",
    services: ['all'],
    display_backdrop: true,
    create_folder: true,
    can_upload_files:true,
    retrieve_token: false,
    tokens: [],
    // Chooser options
    multiselect: false,
    link: true,
    direct_link: false,
    copy_to_upload_location: false,
    upload_location_account: null,
    upload_location_folder: null,
    types: ['all'],
});
    
explorer.on('success', function(files) {
  var text = JSON.stringify(files, null, 2);
  var obj = JSON.parse(text);
    
    var temp = new Object();
    temp["url"] = obj[0].link;
    temp["name"] = obj[0].name;
  coba.push(temp);
  
  window.open(obj[0].link);

  
});


// Initializing Chooser
explorer.choosify(document.getElementById('chooser'));

// Initializing Saver
var coba = [];
explorer.savify(document.getElementById('saver'), coba);



/********************************************************
    The code below is used for setting event handlers
    and not for initialization.
*********************************************************/

var events = {
    'success': 'files',
    'cancel': null,
    'error': 'error',
    'open': null,
    'close': null,
    'selected': 'files',
    'addAccount': 'account',
    'deleteAccount': 'account',
    'startFileUpload': 'file',
    'finishFileUpload': 'file'
}

for (var event in events) {
    (function(evt) {
        if (events[event]) {
            explorer.on(evt, function(arg) {
                printResult('Fired ' + evt + ' event.', true);
                printResult(JSON.stringify(arg, null, 2), false);
            });
        } else {
            explorer.on(evt, function() {
                printResult('Fired ' + evt + ' event.', false);
            });
        }
    })(event);
}

function printResult(result, clear) {
    var eventContainer = document.getElementById('event-info');
    // remove all elements
    if (clear) {
        while (eventContainer.lastChild) {
            eventContainer.removeChild(
                eventContainer.lastChild);
        }
    }
    var eventJSON = document.createElement('pre');
    eventJSON.appendChild(document.createTextNode(result));   
    eventContainer.appendChild(eventJSON);
}

    </script>
	</body>
</html>