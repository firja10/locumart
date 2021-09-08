<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="SB-Mid-client-qmdMbgAE1r9qb1Ve"></script>
  </head>
  <body>
    <button id="pay-button">Pay!</button>

    <form action="bayar" method = "GET" id = "payment-form"> 

      <input type="hidden" name="result_data" id = "result-data">

    </form>

    <script type="text/javascript">
      var payButton = document.getElementById('pay-button');
      payButton.addEventListener('click', function () {
        snap.pay('<?=$snapToken?>'
        // ,
      
        // {$('#payment-form').submit();}
        onSuccess: function(result){console.log('success');console.log(result);},
          onPending: function(result){console.log('pending');console.log(result);},
          onError: function(result){console.log('error');console.log(result);},
          onClose: function(){console.log('customer closed the popup without finishing the payment');}
        
        );
      });
    </script>
  </body>
</html>