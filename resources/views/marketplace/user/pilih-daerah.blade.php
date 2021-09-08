<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cek Ongkir</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.1/css/select2.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.1/js/select2.min.js"></script>
    </head>
    <body>
        <nav class='navbar navbar-primary bg-primary mb-3'>
            <div class='container'>
                <a href="/" class="navbar-brand">Locumart Ongkir</a>
            </div>
        </nav>
        <div class="container">





            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="card">
                            <h5 class="card-header text-black" style="background-color: .bg-secondary;">
                                Pilih Ongkos Kirim
                            </h5>          
                            <div class="card-body">
                                <form class="form" id="ongkir" method="POST">


                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Kurir</label>
                                        <div class="col-sm-12">          
                                            <select class="form-control" id="kurir" name="kurir" required="">
                                                <option value="" selected="selected">--Pilih kurir--</option>
                                                <option value="jne">JNE</option>
                                                <option value="tiki">TIKI</option>
                                                <option value="pos">POS INDONESIA</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Kota Asal:</label>
                                        <div class="col-sm-12">
                                            <select class="form-control" id="kota_asal" name="kota_asal" required="">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Kota Tujuan</label>
                                        <div class="col-sm-12">          
                                            <select class="form-control" id="kota_tujuan" name="kota_tujuan" required="">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Berat (Kg)</label>
                                        <div class="col-sm-12">          
                                            <input type="text" class="form-control" id="berat" name="berat" placeholder="Max. 30 KG" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">        
                                        <div class="col-sm-offset-3 col-sm-8">
                                            <button type="submit" class="btn btn-success col-sm-8">Cek</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7" id="response_ongkir">  
                          
                    </div>
                    <br>  
                    
                </div>
            </div>
          














        </div>




        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Total Biaya Anda Menjadi : 

                  <?php
                 
                  $biaya = 200000 + floatval($pemesanan->nama_produk);
                //   $total = $biaya + $tarif['value'];
                   echo 'Rp. ' . number_format($biaya, 2, ',', '.');  
                // echo $costs;
                   ?>
             
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <form action="" method="post" action = "{{route('update_jasa',$pemesanan->id)}}">
                      @csrf
                      @method('PATCH')
                    <input type="hidden" name = "harga_total" value = "<?php echo $biaya ?>">
                    <input type="hidden" name = "ongkos_kirim" value = 200000>
                    <input type="hidden" name = "namakota" value = "Tasikmalaya">
                    <input type="hidden" name = "media_pengiriman" value = "JNE">
                    <button type="submit" class="btn btn-primary">Ambil</button>
                  </form>

                </div>
              </div>
            </div>
          </div>

        <script type="text/javascript">
            $(document).ready(function () {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $('#kota_asal').select2({
                    placeholder: '--Pilih kota/kabupaten asal--',
                    language: "id"
                });
        
                $('#kota_tujuan').select2({
                    placeholder: '--Pilih kota/kabupaten tujuan--',
                    language: "id"
                });
        
                $.ajax({
                    type: "GET",
                    dataType: "html",
                    url: "{{ route('get.kota', 'kotaasal') }}",
                    success: function (msg) {
                        $("select#kota_asal").html(msg);
                    }
                });    
           
                $.ajax({
                    type: "GET",
                    dataType: "html",
                    url: "{{ route('get.kota', 'kotatujuan') }}",
                    success: function (msg) {
                        $("select#kota_tujuan").html(msg);
                    }
                });
        
                $("#ongkir").submit(function (e) {
                    e.preventDefault();
                    $.ajax({
                        //url: 'cek_ongkir.php',
                        url: "{{ route('cek.ongkir') }}",
                        type: 'post',
                        data: $(this).serialize(),
                        success: function (data) {
                            console.log(data);
                            document.getElementById("response_ongkir").innerHTML = data;
                        }
                    });
                });
        
            });
        </script>




        <script src="{{ asset('js/app.js') }}" type="text/js"></script>
    </body>
</html>