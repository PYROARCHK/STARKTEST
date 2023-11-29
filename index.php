<html>
<head>
    <title>AINCRAD SYSTEM</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body, h5, h6, span, label, button {
            font-family: 'Lobster', cursive;
        }
        
    body {
        background-image: url('#');
        background-size: cover; /* This ensures that the image covers the entire background */
        background-position: center; /* Centers the background image */
        background-repeat: no-repeat; /* Prevents the image from repeating */
    }


    </style>
    <!-- Add this script in the head section of your HTML -->
    <!-- your existing head content -->

    <!-- Add jQuery script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Add your custom script after including jQuery -->
<!-- Add this script after the previous script in your head section -->
<script>
  // Object to store key balances
  var keyBalances = {};

// Function to load valid keys and balances from the text file
function loadKeys() {
  $.ajax({
    url: 'keys.txt',
    dataType: 'text',
    success: function(data) {
      // Remove the alert line below
      // alert('Keys loaded successfully:\n' + data);
      console.log('Keys loaded successfully:', data);

      // Parse keys and balances here
      parseKeys(data);
    },
    error: function(xhr, status, error) {
      alert('Error loading keys.txt: ' + status + '\n' + error);
      console.error('Error loading keys.txt:', status, error);
    }
  });
}

// Function to parse keys and balances
function parseKeys(data) {
  var keyLines = data.split('\n');
  keyLines.forEach(function(line) {
    var parts = line.split(':');
    var key = parts[0].trim();
    var balance = parseInt(parts[1].trim());
    keyBalances[key] = balance;
  });
}

// Call loadKeys when the document is ready
$(document).ready(function() {
  loadKeys();
});



function checkKeyAndStart() {
  var enteredKey = $('#keyInput').val();
  var numberOfCards = getNumberOfCards(); // Implement this function to get the number of cards
  if (keyBalances.hasOwnProperty(enteredKey) && keyBalances[enteredKey] >= numberOfCards) {
    var initialBalance = keyBalances[enteredKey];
    keyBalances[enteredKey] -= numberOfCards;
    updateBalanceOnServer(enteredKey, numberOfCards); // Call the function to update balance
    $('#testar').prop('disabled', false);
    alert('KEY AUTHORIZED! Initial balance: ' + initialBalance + '. Remaining balance: ' + keyBalances[enteredKey]);
  } else {
    alert('Invalid Key Provided or Insufficient Balance.Buy a key from Admin.');
    $('#testar').prop('disabled', true);
  }
}

function updateBalanceOnServer(key, deduction) {
  $.ajax({
    url: 'updateBalance.php',
    type: 'GET',
    data: { key: key, balance: deduction },
    success: function(response) {
      console.log(response);
    },
    error: function(error) {
      console.error('Error updating balance:', error);
    }
  });
}

function getNumberOfCards() {
  // Implement this function to retrieve the number of cards from your textarea
  var cardsInput = $("#lista").val();
  var cardsArray = cardsInput.split('\n');
  return cardsArray.length;
}



</script>

    <!-- your existing style tag and other head content -->

</head>
<body background="tech-gif-1.gif" text="white">
    <br>
<div class="row col-md-20">
    <div class="card col-sm-12 order-5 order-sm-5" style="border: 2px solid black;">
        <h5 class="card-body h6"></h5>
        <div class="card-body">
            <div class="md-form">
                <div class="col-md-12">
                    <textarea type="text" style="text-align: center;" id="lista" class="md-textarea form-control" rows="7" placeholder="Enter Cards"></textarea>
                    <label for="lista"></label>
                </div>
            </div>
<center>
  <div style="display: flex; justify-content: center; align-items: center;">
    <!-- Add an input for entering the key -->
    <input type="text" id="keyInput" placeholder="Enter Key" style="width: 300px; margin-right: 5px;">

    <!-- Add a button to check the key -->
    <button class="btn btn-info" onclick="checkKeyAndStart()" style="width: 100px; margin-right: 5px;">Unlock</button>
  </div>

  <br>

  <!-- Modify the Start button -->
  <button class="btn btn-primary" style="width: 100px; outline: none;" id="testar" onclick="enviar()" disabled>Start</button>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <button class="btn btn-danger" style="width: 100px; outline: none;">Stop</button>
</center>


<div class="col-md-12">
    <div class="card">
        <div style="position: absolute; top: 0; right: 0;">
            <button id="mostra" class="btn btn-primary">Show</button>
        </div>
        <div class="card-body">
            <h6 style="font-weight: bold;" class="card-title">Approved <span id="cLive2" class="badge badge-success">0</span></h6>
            <div id="bode"><span id=".aprovadas" class="aprovadas"></span></div>
        </div>
    </div>
</div>

<br>
<br>
<br>

<div class="col-md-12">
    <div class="card">
        <div style="position: absolute; top: 0; right: 0;">
            <button id="mostra2" class="btn btn-primary">Show</button>
        </div>
        <div class="card-body">
            <h6 style="font-weight: bold;" class="card-title">Declined <span id="cDie2" class="badge badge-danger">0</span></h6>
            <div id="bode2"><span id=".reprovadas" class="reprovadas"></span></div>
        </div>
    </div>
</div>

  
                    </div>
                </div>
 

<div class="card col-sm-12 order-5 order-sm-2" style="border: 2px solid black; text-align: center;">
    <h5 class="card-body h3">Pyroarity</h5>
    <div class="card-body">
        <span>Status:</span><span class="badge badge-secondary"> Waiting For Command.</span>
        <div class="md-form">
            <span>Approved:</span>&nbsp<span id="cLive" class="badge badge-success">0</span>
            <span>Declined:</span>&nbsp<span id="cDie" class="badge badge-danger"> 0</span>
            <span>Checked:</span>&nbsp<span id="total" class="badge badge-info">0</span>
            <span>Total:</span>&nbsp<span id="carregadas" class="badge badge-dark">0</span>
        

                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#bode").hide();
            $("#esconde").show();

            $('#mostra').click(function(){
                $("#bode").slideToggle();
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#bode2").hide();
            $("#esconde2").show();

            $('#mostra2').click(function(){
                $("#bode2").slideToggle();
            });
        });
    </script>

<!-- Modify your existing enviar() function to call checkKeyAndStart() instead -->
<script title="ajax do checker">
  function enviar() {
    checkKeyAndStart();
    // Rest of your existing enviar() logic here...
  var linha = $("#lista").val();
  var linhaenviar = linha.split("\n");
  var total = linhaenviar.length;
  var ap = 0;
  var rp = 0;
  linhaenviar.forEach(function(value, index) {
    setTimeout(function() {
      // Your existing AJAX logic here
      $.ajax({
        url: 'api.php?lista=' + value,
        type: 'GET',
        async: true,
        success: function(resultado) {
          if (resultado.match("#Aprovada")) {
            removelinha();
            ap++;
            aprovadas(resultado + "");
          } else {
            removelinha();
            rp++;
            reprovadas(resultado + "");
          }
          $('#carregadas').html(total);
          var fila = parseInt(ap) + parseInt(rp);
          $('#cLive').html(ap);
          $('#cDie').html(rp);
          $('#total').html(fila);
          $('#cLive2').html(ap);
          $('#cDie2').html(rp);
        }
      });
    }, 500 * index);
  });

    }
    function aprovadas(str) {
        $(".aprovadas").append(str + "<br>");
    }
    function reprovadas(str) {
        $(".reprovadas").append(str + "<br>");
    }
    function removelinha() {
        var lines = $("#lista").val().split('\n');
        lines.splice(0, 1);
        $("#lista").val(lines.join("\n"));
    }
</script> 



    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/js/mdb.min.js"></script>
</body>
</html>


