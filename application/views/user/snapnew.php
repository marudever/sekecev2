<html>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>Checkout</title>
  <head>
    <script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="SB-Mid-client-Egl0aANz5axu4-r6"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  </head>
  <body>
    
    <div class="container">
      <form id="payment-form" method="post" action="<?=site_url()?>/snap/finish">
        <input type="hidden" name="result_type" id="result-type" value=""></div>
        <input type="hidden" name="result_data" id="result-data" value=""></div>

        <div style="margin:10% 20% 10% 20%;">
          <h2>SeKece Service Payment</h2>
          <?php foreach($list as $lt): ?>
          <div class="mb-3">
            <input type="hidden" name="payment_id" id="payment_id" value="<?= $lt->ID ?>">
          </div>
          <div class="mb-3">
            <label class="form-label">Name of Service</label>
            <input type="text" class="form-control" value="<?= $lt->Judul ?>" name="service" id="service">
          </div>
          <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="text" class="form-control" value="<?= $lt->harga ?>" name="harga" id="harga">
          </div>
          <button class="btn btn-md btn-primary" id="pay-button">Pay!</button>
          <?php endforeach; ?>
        </div>
      </form>
    </div>
    
    
    <script type="text/javascript">
  
    $('#pay-button').click(function (event) {
      event.preventDefault();
      $(this).attr("disabled", "disabled");
    
    var payment_id = $("#payment_id").val();
    var service = $("#service").val();
    var harga = $("#harga").val();
    $.ajax({
      type:'POST',
      url: '<?=site_url()?>/snap/token',
      data: {
        payment_id: payment_id,
        service: service,
        harga: harga
      },
      cache: false,

      success: function(data) {
        //location = data;

        console.log('token = '+data);
        
        var resultType = document.getElementById('result-type');
        var resultData = document.getElementById('result-data');

        function changeResult(type,data){
          $("#result-type").val(type);
          $("#result-data").val(JSON.stringify(data));
          //resultType.innerHTML = type;
          //resultData.innerHTML = JSON.stringify(data);
        }

        snap.pay(data, {
          
          onSuccess: function(result){
            changeResult('success', result);
            console.log(result.status_message);
            console.log(result);
            $("#payment-form").submit();
          },
          onPending: function(result){
            changeResult('pending', result);
            console.log(result.status_message);
            $("#payment-form").submit();
          },
          onError: function(result){
            changeResult('error', result);
            console.log(result.status_message);
            $("#payment-form").submit();
          }
        });
      }
    });
  });

  </script>


</body>
</html>
