<div style="margin-top:5%;margin-bottom:2%;">
  
  <!-- Form Pay -->
  <div class="container-fluid">
    <div style="padding:5% 25% 5% 25%;">
      <!-- Default form subscription -->

      <form class="border border-light p-5" id="payment-form" method="post" action="<?=site_url()?>/snap/finish">

      <p class="h4 mb-4">Pay Now</p>

      <p>Rasakan kemudahan pembayaran yang kami sediakan</p>

      <hr>
      
      <input class="form-control mb-4" type="hidden" name="result_type" id="result-type" value="">
      <input class="form-control mb-4" type="hidden" name="result_data" id="result-data" value="">
      <!-- Name -->
      <label class="text-left" for="nama">Costumer /</label>
      <input class="form-control mb-4 raihan" name="nama" id="nama">

      <!-- Freelancer -->
      <label class="text-left" for="freelancer">Freelancer /</label>
      <input class="form-control mb-4 raihan" name="freelancer" id="freelancer">

      <!-- Harga -->
      <label class="text-left" for="jml">Harga /</label>
      <input class="form-control mb-4 raihan" name="jml" id="jml">

      </form>
      <!-- Default form subscription -->

      <!-- Sign in button -->
      <button class="btn btn-info btn-block" id="pay-button"><i class="fa fa-check-circle" aria-hidden="true"></i> Pay</button>

      <!-- Powered by -->
      <div style="padding:2% 2% 2% 2%;">
        <p><a href="#" data-toggle="modal" data-target="#modalSocial"><i class="fa fa-shield" aria-hidden="true"></i> Payment Rules</a> | <i class="fa fa-bolt" aria-hidden="true"></i> Powered by <a href="https://midtrans.com/">MidTrans</a></p>
      </div>
    </div>
  </div>

</div>


<!-- Midtrans Script -->
<script type="text/javascript">
        
        $('#pay-button').click(function (event) {
          event.preventDefault();
          $(this).attr("disabled", "disabled");
        
        var nama      = $('#nama').val();
        var jml       = $('#jml').val();
        var freelacner  = $('#freelancer').val();
        $.ajax({
          type :'POST',
          url: '<?=site_url()?>/snap/token',
          data :{
            nama:nama,
            jml:jml,
            freelancer:freelancer
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