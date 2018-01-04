<!DOCTYPE html>
<html>
<head>
    
    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Kloudless File Explorer</title>
  <script src="https://static-cdn.kloudless.com/p/platform/sdk/kloudless.explorer.js"></script>
</head>
<body>

 
  <button id="chooser">Choose a file</button>
  <button id="saver">Save a file</button>

  <h3>File information</h3>
  <div id="file-info"><pre>Result will appear here</pre></div>
</body>
    
        
<script>
 /*
 *    Welcome to the Kloudless JS File Explorer!
 *
 *    To view the explorer in action click 'Result'!
 */

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
    multiselect: true,
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
  
  window.open(obj[0].link,'_blank');

  
});

// Initializing Chooser
explorer.choosify(document.getElementById('chooser'));

    
// Initializing Saver
var files = [{
    url: "https://kloudl.es/l/a5j_i5lSg0EaEsyooql-",
    name: "who..png"
}];
explorer.savify(document.getElementById('saver'), files);



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
</html>