<?php
$title = 'Home';

include "login/misc/pagehead.php";
?>
</head>
<body>

<?php require 'login/misc/pullnav.php'; ?>

<div class="container">

<?php

if ($auth->isLoggedIn()) {
    echo '<div class="jumbotron text-center"><h1>Hi, '.$_SESSION['username'].'!</h1>
    <!-- <p>Basic functionality to control the PiAlarmSystem is on this page.</p>--></div>
    <div class="col-lg-2"></div><div class="col-lg-8">
    
    <h1>Controls</h1>

    <p><br /></p>
    
    ';

    ?>
    
    
<div class="checkbox">
  <label>
    <input type="checkbox" name="toggle0" id="toggle0" data-toggle="toggle" data-off="Disabled" data-on="Enabled" data-height="4.5em" checked>
    Option one is enabled
  </label>
</div>
<div class="checkbox">
  <label>
    <input type="checkbox" name="toggle1" id="toggle1" data-toggle="toggle" data-off="Disabled" data-on="Enabled" data-height="4.5em" checked>
    Option one is enabled
  </label>
</div>
<div class="checkbox">
  <label>
    <input type="checkbox" name="toggle2" id="toggle2" data-toggle="toggle" data-off="Disabled" data-on="Enabled" data-height="4.5em" checked>
    Option one is enabled
  </label>
</div>
<div class="checkbox">
  <label>
    <input type="checkbox" name="toggle3" id="toggle3" data-toggle="toggle" data-off="Disabled" data-on="Enabled" data-height="4.5em" checked>
    Option one is enabled
  </label>
</div>
    
     <!-- <form id="myForm" name="myForm" action="audio_alarm.php" method="post"> 
      <input type="checkbox" name="toggle" id="toggle2" data-toggle="toggle" data-off="Disabled" data-on="Enabled" data-height="4.5em" checked>
    </form> -->
     
    <br><br>
        <button class="btn btn-success" onclick="allArmed()">All On</button>
        <button class="btn btn-danger" onclick="allOff()">All Of</button>

    <br /> <br />
    <div class="panel panel-default"></div>
    <div class="panel-heading" id="heading"></div>
    <div class="panel-body" id="body"></div>
    <script>
         
        
      $('#toggle2').change(function(){
        var mode= $(this).prop('checked');
        // // submit the form 
        // $(#myForm).ajaxSubmit(); 
        // // return false to prevent normal browser submit and page navigation 
        // return false; 
        $.ajax({
          type:'POST',
          dataType:'JSON',
          url:'audio_alarm.php',
          data:'mode='+mode,
          success:function(data)
          {
            var data=eval(data);
            message=data.message;
            success=data.success;
            $("#heading").html(success);
            $("#body").html(message);
          }
        });
      });
      
      
    $('#toggle0').bootstrapToggle({
      on: 'On',
      off: 'Off',
      onstyle: 'success',
      offstyle: 'danger'
    });
    
    
    $('#toggle1').bootstrapToggle({
      on: 'On',
      off: 'Off',
      onstyle: 'success',
      offstyle: 'danger'
    });
    
    
    $('#toggle2').bootstrapToggle({
      on: 'On',
      off: 'Off',
      onstyle: 'success',
      offstyle: 'danger'
    });
    
    
    $('#toggle3').bootstrapToggle({
      on: 'On',
      off: 'Off',
      onstyle: 'success',
      offstyle: 'danger'
    });
    
    function allArmed() {
    $('#toggle0').bootstrapToggle('on')
    $('#toggle1').bootstrapToggle('on')
    $('#toggle2').bootstrapToggle('on')
    $('#toggle3').bootstrapToggle('on')
    }
    function allOff() {
    $('#toggle0').bootstrapToggle('off')  
    $('#toggle1').bootstrapToggle('off')  
    $('#toggle2').bootstrapToggle('off')  
    $('#toggle3').bootstrapToggle('off')  
    }
    
    </script>
    
<script>
  
    
</script>
    
    <?php
   
} else {
    echo '<div class="jumbotron text-center"><h1 class="display-1">Homepage</h1>
    <small>This is your homepage. You are currently signed out.</small><br><br>
    <p>You can sign in or create a new account by clicking "Sign In" in the top right corner!</p>';
}

?>
        </div><div class="col-lg-2"></div>
    </div>
</body>
</html>
