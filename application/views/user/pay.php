
  <div class="container-fluid" style="padding:5% 5% 5% 5%;">
  
    <div class="mr-md-3" style="padding:2% 2% 2% 2%;">
      <form id="payment-form" method="post" action="<?=site_url()?>/snap/finish">
        <input type="hidden" name="result_type" id="result-type" value=""></div>
        <input type="hidden" name="result_data" id="result-data" value=""></div>

        <label for="nama">Nama / Username</label>
        <div class="form-group">
          <input class="form-control" type="text" name="nama" id="nama">
        </div>
        
        <label for="freelancer">Freelancer</label>
        <div class="form-group">
          <input class="form-control" type="text" name="freelancer" id="freelancer">
        </div>

        <label for="Jumlah Biaya">Jumlah Biaya</label>
        <div class="form-group">
          <input class="form-control" type="text" name="jml" id="jml">
        </div>
      </form>
      
      <button class="btn" id="pay-button">Pay!</button>
    </div>
  
  </div>
    


    <script type="text/javascript">
  
    $('#pay-button').click(function (event) {
      event.preventDefault();
      $(this).attr("disabled", "disabled");
    
    var nama      = $('#nama').val();
    var freelancer     = $('#freelancer').val();
    var jml       = $('#jml').val();
    $.ajax({
      type :'POST',
      url: '<?=site_url()?>/snap/token',
      data :{
            nama:nama,
            freelancer:freelancer,
            jml:jml
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
