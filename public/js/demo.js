// Called after form input is processed
function startConnect() {
    // Generate a random client ID
    // clientID = "python-mqtt-" + parseInt(Math.random() * 100);
    clientID = "python-mqtt-" + parseInt(Math.random() * 1000);

    // Fetch the hostname/IP address and port number from the form
    host = document.getElementById("host").value;
    port = document.getElementById("port").value;

    // Print output for the user in the messages div
    document.getElementById("messages").innerHTML += '<span>Connecting to: ' + host + ' on port: ' + port + '</span><br/>';
    document.getElementById("messages").innerHTML += '<span>Using the following client value: ' + clientID + '</span><br/>';

    // Initialize new Paho client connection
    client = new Paho.MQTT.Client(host, Number(port), clientID);

    // Set callback handlers
    client.onConnectionLost = onConnectionLost;
    client.onMessageArrived = onMessageArrived;

    // Connect the client, if successful, call onConnect function
    client.connect({ 
        onSuccess: onConnect,
        userName : 'admin-user',
	    password : 'admin-password'
    });
    
    storedata(onMessageArrived);
    
 
}

// Called when the client connects
function onConnect() {
    // Fetch the MQTT topic from the form
    topic = document.getElementById("topic").value;
    // Print output for the user in the messages div
    document.getElementById("messages").innerHTML += '<span>Subscribing to: ' + topic + '</span><br/>';
    // Subscribe to the requested topic
    client.subscribe(topic);
}

// Called when the client loses its connection
function onConnectionLost(responseObject) {
    document.getElementById("messages").innerHTML += '<span>ERROR: Connection lost</span><br/>';
    if (responseObject.errorCode !== 0) {
        document.getElementById("messages").innerHTML += '<span>ERROR: ' + + responseObject.errorMessage + '</span><br/>';
    }
}


// Called when a message arrives
function onMessageArrived(message) {
    var nama_sens = document.getElementById("nama").value;
    // var nama_sensor = JSON.stringify(nama_sens);
    //console.log("onMessageArrived: " + message.payloadString);  
    var simpan = JSON.parse(message.payloadString);
    // var simpan = JSON.parse($("#productDiv").html());
    document.getElementById("messages").innerHTML += '<span>Topic: ' + message.destinationName + '  | ' + simpan[nama_sens] + '</span><br/>';
    // document.getElementById("messages").innerHTML += '<span>Topic: ' + message.destinationName + '  | ' + message.payloadString + '</span><br/>';
    
    // storedata(message.payloadString);
    return message.payloadString;
}

function storedata(data){
    //AJAX
    var xhr = new XMLHttpRequest();
    var csrfToken = xhr.getResponseHeader('x-csrf-token');
    console.log(csrfToken);
    xhr.open('POST','http://127.0.0.1:8000/MQTTdata', true);
    xhr.setRequestHeader('x-csrf-token', csrfToken);
    xhr.setRequestHeader('Content-Type', 'application/json; charset=utf-8');
    xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                alert(xhr.responseText);
            }
        }   
    xhr.send(data);
}


// Called when the disconnection button is pressed
function startDisconnect() {
    client.disconnect();
    document.getElementById("messages").innerHTML += '<span>Disconnected</span><br/>';
}

function updateScroll() {
    var element = document.getElementById("messages");
    element.scrollTop = element.scrollHeight;
}