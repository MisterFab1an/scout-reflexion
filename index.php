<html>
<head>
	<title>Reflexion</title>
	
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/site.webmanifest">
	<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="favicon/favicon.ico">
	<meta name="msapplication-TileColor" content="#603cba">
	<meta name="msapplication-config" content="favicon/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">

	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.23/datatables.min.css"/>
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.23/datatables.min.js"></script>
	
	<style>
	.comments-wrapper {
		padding: 10px
	}

	#reflexion-table-wrapper {
		padding: 20px
	}

	#page-container {
		position: relative;
		min-height: 100vh;
	}

	#content-wrap {
		padding-bottom: 6.5rem;    /* Footer height +1rem */
	}

	#footer {
		background-color: #f5f5f5;
		position: absolute;
		bottom: 0;
		width: 100%;
		height: 5.5rem;            /* Footer height */
	}
	
	@media only screen and (max-width : 1100px){ /* You can edit the max-width value to match what you need */
	#page-container {
		position: relative;
		min-height: calc(var(--vh, 1vh) * 100);	/* Fix mobile viewport height */
	}
	</style>
</head>

<body>
<div id="page-container">
	<div id="content-wrap">
		<div class="table-wrapper">
		<table class="table table-hover">
		<colgroup>
		   <col span="1" style="width: 13%;">
		   <col span="1" style="width: 5%;">
		   <col span="1" style="width: 10%;">
		   <col span="1" style="width: 8%;">
		   <col span="1" style="width: 10%;">
		   <col span="1" style="width: 5%;">
		   <col span="1" style="width: 10%;">
		   <col span="1" style="width: 5%;">
		</colgroup>
		<thead class="thead-dark">
			<tr>
				<th>Activate poll</th>
				<th>Link</th>
				<th>Copy link to clipboard</th>
				<th>Poll id</th>
				<th>Votes</th>
				<th>Count</th>
				<th>Average (2 decimals)</th>
				<th>Reset</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><button type="button" class="btn btn-primary" id="activateBtn01">Ziel erreicht</button></td>
				<td><a id="link01" class="btn btn-secondary" target="_blank" href="" style="visibility: hidden" disabled="true">loading...</a></td>
				<td><button type="button" class="btn btn-primary" id="copyBtn01" disabled="true" data-toggle="popover" data-container="body">Copy to clipboard</button></td>
				<td><div id="poll01"></div></td><td>
				<div id="votes01"></div></td>
				<td><div id="count01"></div></td>
				<td vertical-align="middle"><div id="avg01"></div></td>
				<td><button type="button" class="btn btn-primary" id="resetBtn01" disabled="true">Reset</button>
			</tr>
			<tr>
				<td><button type="button" class="btn btn-primary" id="activateBtn02">Lautstärke & Konzentration</button></td>
				<td><a id="link02" class="btn btn-secondary" target="_blank" href="" style="visibility: hidden" disabled="true">loading...</a></td>
				<td><button type="button" class="btn btn-primary" id="copyBtn02" disabled="true" data-toggle="popover" data-container="body">Copy to clipboard</button></td>
				<td><div id="poll02"></div></td>
				<td><div id="votes02"></div></td>
				<td><div id="count02"></div></td>
				<td><div id="avg02"></div></td>
				<td><button type="button" class="btn btn-primary" id="resetBtn02" disabled="true">Reset</button></tr>
			<tr>
				<td><button type="button" class="btn btn-primary" id="activateBtn03">Stimmung</button></td>
				<td><a id="link03" class="btn btn-secondary" target="_blank" href="" style="visibility: hidden" disabled="true">loading...</a></td>
				<td><button type="button" class="btn btn-primary" id="copyBtn03" disabled="true" data-toggle="popover" data-container="body">Copy to clipboard</button></td>
				<td><div id="poll03"></div></td><td><div id="votes03"></div></td>
				<td><div id="count03"></div></td>
				<td><div id="avg03"></div></td>
				<td><button type="button" class="btn btn-primary" id="resetBtn03" disabled="true">Reset</button></tr>
			<tr>
				<td><button type="button" class="btn btn-primary" id="activateBtn04">Programm</button></td>
				<td><a id="link04" class="btn btn-secondary" target="_blank" href="" style="visibility: hidden" disabled="true">loading...</a></td>
				<td><button type="button" class="btn btn-primary" id="copyBtn04" disabled="true" data-toggle="popover" data-container="body">Copy to clipboard</button></td>
				<td><div id="poll04"></div></td>
				<td><div id="votes04"></div></td>
				<td><div id="count04"></div></td>
				<td><div id="avg04"></div></td>
				<td><button type="button" class="btn btn-primary" id="resetBtn04" disabled="true">Reset</button></tr>
		<tbody>
		</table>
		</div>

		<div class="comments-wrapper input-group col-12">
		  <div class="input-group-prepend">
			<span class="input-group-text">Comments</span>
		  </div>
		  <textarea id="comments" class="form-control col-md-9" placeholder="notes, annotations, wishes, goals and other pretty things"></textarea>
		  
		  <button id="save-entry" type="button" class="btn btn-primary col-md-1" disabled="true">Save</button>
		  <button id="reset-all" type="button" class="btn btn-primary col-md-1">Reset all</button>
		</div>

		<br/>

		<div id="reflexion-table-wrapper">
			<table id="reflexion-table" class="table table-striped table-hover table-bordered" style="width:100%">
				<colgroup>
				   <col span="1" style="width: 10%;">
				   <col span="1" style="width: 10%;">
				   <col span="1" style="width: 10%;">
				   <col span="1" style="width: 10%;">
				   <col span="1" style="width: 10%;">
				   <col span="1" style="width: 10%;">
				   <col span="1" style="width: 40%;">
				</colgroup>
				<thead>
					<tr>
						<th>Id</th>
						<th>Datum</th>
						<th>Ziel erreicht</th>
						<th>Lautstärke & Konzentration</th>
						<th>Stimmug</th>
						<th>Programm</th>
						<th>Durchschnitt</th>
						<th>Kommentare</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>

	<footer id="footer"> 
		<div class="text-center py-2">
			<div>
				Verbesserungen, Anregungen, Bugs und Wünsche direkt an mich via <a href="https://discordapp.com/users/137229435030994944" target="_blank">Discord</a>
			<div>
			<div>
				<span id="version">Reflexion</span> &copy; 2022 Copyright: <a href="mailto:f.brandlmayer@gmail.com">Fabian Brandlmayer</a>
			</div>
			<div>
				<a href="favicon/favicon_original.png">Favicon</a> &copy; 2021 Copyright: <a href="https://discordapp.com/users/689499726390886452">Matteo Ingegneri</a>
			</div>
		</div>
	</footer>
</div>

<script>
// for mobile-viewport
// get the viewport height and multiple it by 1% to get a value for a vh unit
let vh = window.innerHeight * 0.01;
// set the value in the --vh custom property to the root of the document
document.documentElement.style.setProperty('--vh', `${vh}px`);

$(document).ready(function() {
    $('#reflexion-table').DataTable({
		"order": [[ 1, "desc" ]],
        "processing": true,
        "serverSide": true,
        "ajax": "fetch-data.php",
		"columns": [
            { "data": 0 },
            { "data": 1 },
            { "data": 2 },
            { "data": 3 },
            { "data": 4 },
            { "data": 5 },
            { "data": null,
				"render": function ( data, type, row, meta ) {
					return (((parseFloat(row[2]) + 
								parseFloat(row[3]) + 
								parseFloat(row[4]) + 
								parseFloat(row[5])) || 0) 
								/ 4).round(2);
			}},
            { "data": 6 }],
		"columnDefs": [
			{ targets: [0], visible: false },
			{ targets: [7], orderable: false }
		]
	});
	
	// set version in title and footer
	var version = "Reflexion v4.0.0";
	document.title = version;
	$('#version').text(version);
});

var apiUrl = "https://api.strawpoll.com/v3/polls";

var preBody = '{"title":"';
var postBody = '","poll_options":[{"type":"text","value":"1","position":0},{"type":"text","value":"2","position":1},{"type":"text","value":"3","position":2},{"type":"text","value":"4","position":3},{"type":"text","value":"5","position":4}],"poll_config":{"is_private":true,"duplicate_checking":"session"}}';

addActivateClickHandler("01");
addActivateClickHandler("02");
addActivateClickHandler("03");
addActivateClickHandler("04");

addResetClickHandler("01");
addResetClickHandler("02");
addResetClickHandler("03");
addResetClickHandler("04");

addRemainingClickHandler();

loadLocalStorage();

startUpdateFieldsLoop();

function addRemainingClickHandler() {
	$('#save-entry').click(function(){
        var goal_reached = parseFloat($('#avg01').text() || 0);
        var volume_and_concentration = parseFloat($('#avg02').text() || 0);
        var mood = parseFloat($('#avg03').text() || 0);
        var program = parseFloat($('#avg04').text() || 0);
		var avg = ((goal_reached + volume_and_concentration + mood + program) / 4).round(2);
		
        data =  {'goal_reached': goal_reached,
				'volume_and_concentration': volume_and_concentration,
				'mood': mood,
				'program': program,
				'average': avg,
				'comments': $('#comments').val()};
				
        $.post('insert-data.php', data, function (response) {
			console.debug(response);
			$('#reflexion-table').DataTable().ajax.reload();
        });
    });
	
	$('#reset-all').click(function() {
		resetPoll("01");
		resetPoll("02");
		resetPoll("03");
		resetPoll("04");
		$('#comments').val("");
		
		updateSaveButton();
	});
}

function updateSaveButton() {
	if(!$("#resetBtn01").is(':disabled') &&
		!$("#resetBtn02").is(':disabled') &&
		!$("#resetBtn03").is(':disabled') &&
		!$("#resetBtn04").is(':disabled')) {
		$('#save-entry').attr('disabled', false);
	}
	else {
		$('#save-entry').attr('disabled', true);
	}
}

/**
 *	Adds a click handler to a specific element
 *	On click:
 *		Disables the activate button
 *		Executes a post function to create a poll
 *		On success:
 *			Sets a localStorage item with the returned id
 *			Sets the necessary elements to active
 *		On failure:
 *			Reenables the activate button again
 *			Shows toast message with the error received
 */
function addActivateClickHandler(id) {
	var data = preBody + $("#activateBtn" + id).text() + postBody;
	
	$("#activateBtn" + id).click(function(){
		$("#link" + id).attr("style", "visibility: visible");
		$("#activateBtn" + id).attr('disabled', true);
		
		$.post(apiUrl, data)
		.done(function(returnValue) {
			localStorage.setItem("poll" + id, returnValue.id);
			setActive(id, returnValue.id);
		})
		.fail(function(returnValue) {
			toastr.error("Request failed due to: " + returnValue.statusText + " (" + returnValue.status + ")");
			$("#activateBtn" + id).attr('disabled', false);
			$("#link" + id).attr("style", "visibility: hidden");
		});
	});
}

/**
 *	Fills the fields with links and text
 *	Adds a click handler to be able to copy the link into the clipboard
 *	Enables the reset button
 */
function setActive(id, pollId) {
	$("#poll" + id).text(pollId);
	$("#link" + id).text("Click");
	var pollUrl = "https://strawpoll.com/polls/" + pollId;
	$("#link" + id).attr("href", pollUrl);
	$("#link" + id).attr("disabled", false);
	$("#votes" + id).text("loading...");
	updateField(id);
	
	$("#copyBtn" + id).click(function() {
		var textArea = document.createElement("textarea");
		textArea.style.position = 'fixed';
		textArea.style.top = 0;
		textArea.style.left = 0;
		textArea.style.width = '2em';
		textArea.style.height = '2em';
		textArea.style.padding = 0;
		textArea.style.border = 'none';
		textArea.style.outline = 'none';
		textArea.style.boxShadow = 'none';
		textArea.style.background = 'transparent';
		textArea.value = pollUrl;
		document.body.appendChild(textArea);
		textArea.focus();
		textArea.select();
		document.execCommand('copy');
		document.body.removeChild(textArea);

		$('#copyBtn' + id).popover('dispose').popover({
			trigger: 'manual',
			content: "Copied: " + pollUrl});
		$('#copyBtn' + id).mouseleave(function() {
			$('#copyBtn' + id).popover('hide');
		});
		$('#copyBtn' + id).popover('show');
	});
	$("#copyBtn" + id).attr('disabled', false);
	
	$("#resetBtn" + id).attr('disabled', false);
	
	updateSaveButton();
}

/**
 *	On click:
 *		Resets row
 */
function addResetClickHandler(id) {
	$("#resetBtn" + id).click(function(){
		resetPoll(id);
		updateSaveButton();
	});
}

/**
 *  Removes all text and links from elements
 *	Enables activate button and disables reset button
 */
function resetPoll(id) {
	$("#poll" + id).text("");
	localStorage.removeItem("poll" + id);
	$("#link" + id).text("loading...");
	
	$("#link" + id).attr("href", "");
	$("#votes" + id).text("");
	$("#count" + id).text("");
	$("#avg" + id).text("");
	
	$("#activateBtn" + id).attr('disabled', false);
	$("#link" + id).attr('disabled', true);
	$("#copyBtn" + id).attr('disabled', true);
	$("#resetBtn" + id).attr('disabled', true);
	
	$("#link" + id).attr("style", "visibility: hidden");
}

/**
 *	Enter if-stub only when pollId is set
 *	Executes get request to resource and fetches poll results
 *	On success:
 *		Calculates count and average and sets corresponding text fields
 *	On failure:
 *		Shows toast message with error received
 */
function updateField(id){
	if($("#poll" + id).text() && $("#poll" + id).text().length != 0) {
		$.get(apiUrl + "/" + $("#poll" + id).text() + "/results")
		.done(function(returnValue) {
			var votes = "";
			var sum = 0;
			var count = 0;
			
			returnValue.poll_options.forEach(function(item, index) {
				votes += item.value + ":" + item.vote_count + ", ";
				sum += parseInt(item.value, 10) * parseInt(item.vote_count, 10);
				count += parseInt(item.vote_count, 10);
			});
			var avg = count != 0 ? sum/count : count;
			votes = votes.slice(0, -2);
			
			// double check after get request - could be empty due to reset
			if($("#poll" + id).text() && $("#poll" + id).text().length != 0) {
				$("#votes" + id).text(votes);
				$("#avg" + id).text(avg.round(2).toFixed(2));
				$("#count" + id).text(count);
			}
		})
		.fail(function(returnValue) {
			toastr.error("Request failed due to: " + returnValue.statusText + " (" + returnValue.status + ")");
		});
	}
}

/**
 *	Loops the get request update every 5 seconds
 */
function startUpdateFieldsLoop(){
	updateField("01");
	updateField("02");
	updateField("03");
	updateField("04");

    setTimeout(startUpdateFieldsLoop, 5000);
}

/**
 *	Loads local storage items for persistence if the browser was closed
 */
function loadLocalStorage() {
	loadLocalStorageItem("01");
	loadLocalStorageItem("02");
	loadLocalStorageItem("03");
	loadLocalStorageItem("04");
}

/**
 *	Sets fields to active if local storage item exists
 */
function loadLocalStorageItem(id) {
	var pollId = localStorage.getItem("poll" + id);
	
	if(pollId != null) {
		$("#link" + id).attr("style", "visibility: visible");
		$("#activateBtn" + id).attr('disabled', true);
		
		setActive(id, pollId);
	}
}

/**
 *	Adds round function to number variables
 */
Number.prototype.round = function(places) {
  return +(Math.round(this + "e+" + places)  + "e-" + places);
}
</script>

</body>
</html>