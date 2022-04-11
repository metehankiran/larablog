<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Setup Wizard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center p-5">
                <h2>setup wizard</h2>
            </div>
        </div>
        <div class="row">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      Welcome!
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Enter the <code>SETUP_KEY</code> to continue.</p>
                      <input type="text" name="setup_key" class="form-control" placeholder="SETUP_KEY" value="L1f57en4AtYwtCWxeGCWHbZTBDFGoR8h">
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingSetup">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSetup" aria-expanded="false" aria-controls="collapseSetup">
                      First Setup
                    </button>
                  </h2>
                  <div id="collapseSetup" class="accordion-collapse collapse" aria-labelledby="headingSetup" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <div class="row">
                          <div class="col">
                            <button class="btn btn-primary" id="setup-default-settings">Setup Default Settings</button>
                          </div>
                          {{-- <div class="col">
                            <div class="form-text">Please enter <code>website title</code></div>
                            <div class="input-group mb-3">
                              <span class="input-group-text" id="basic-addon1">website title</span>
                              <input type="text" class="form-control" name="command" placeholder="namesurname/companyname">
                            </div>
                            <div class="form-text">Please enter <code>website tags</code></div>
                            <div class="input-group mb-3">
                              <span class="input-group-text" id="basic-addon1">website tags</span>
                              <input type="text" class="form-control" name="command" placeholder="travel,technology,development,food,chess">
                            </div>
                          </div> --}}
                      </div>
                        <div>
                          <div class="text-center" id="custom_loader" style="display:none">
                            <div class="spinner-border text-info p-2 m-2" role="status">
                              <span class="visually-hidden">Loading...</span>
                            </div>
                          </div>
                          <div class="alert alert-info" role="alert" id="custom_info" style="display:none">
                            <p>
                              <p><code>Run time : <span id="custom_runtime"></span> second.</code></p>
                              <p class="mt-2" id="output"></p>
                            </p>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Custom Command
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <div class="form-text">Please enter <code>artisan</code> command.</div>
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1">php artisan</span>
                          <input type="text" class="form-control" name="command" placeholder="Etc. migrate:fresh --seed">
                          <button class="btn btn-outline-secondary" type="button" id="custom_command">Run Command</button>
                        </div>
                        <div>
                          <div class="text-center" id="custom_loader" style="display:none">
                            <div class="spinner-border text-info p-2 m-2" role="status">
                              <span class="visually-hidden">Loading...</span>
                            </div>
                          </div>
                          <div class="alert alert-info" role="alert" id="custom_info" style="display:none">
                            <p>
                              <p><code>Run time : <span id="custom_runtime"></span> second.</code></p>
                              <p class="mt-2" id="output"></p>
                            </p>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script>
      function msToSecond(ms) {
        var seconds = ms / 1000;
        seconds = seconds.toFixed(3);
        return seconds;
      }
      $('#custom_command').click(function(){
        $.ajax({
          startTime: performance.now(),
          url: '{{ route('setup.command.custom') }}',
          type: 'POST',
          data: {
            _token: '{{ csrf_token() }}',
            setup_key: $('input[name=setup_key]').val(),
            command: $('input[name=command]').val()
          },
          beforeSend: function(){
            $('#custom_loader').show();
            $('#custom_info').hide();
          },
          success: function(data){
            console.log(data);
            var time = performance.now() - this.startTime;
            $('#custom_runtime').text(msToSecond(time));
            $('#custom_loader').hide();
            $('#custom_info').show();
            $('#output').html(data.output);
          }
        });
      });

      $('#setup-default-settings').click(function(){
        $.ajax({
          startTime: performance.now(),
          url: '{{ route('setup.default.settings') }}',
          type: 'POST',
          data: {
            _token: '{{ csrf_token() }}',
            setup_key: $('input[name=setup_key]').val(),
          },
          beforeSend: function(){
            $('#custom_loader').show();
            $('#custom_info').hide();
          },
          success: function(data){
            console.log(data);
            var time = performance.now() - this.startTime;
            $('#custom_runtime').text(msToSecond(time));
            $('#custom_loader').hide();
            $('#custom_info').show();
            $('#output').html(data.output);
          }
        });
      });
    </script>
  </body>
</html>