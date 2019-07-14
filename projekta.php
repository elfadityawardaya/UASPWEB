<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tugas Akhir</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <style>
        body{
            background-color: rgb(148, 148, 148);
           width: 100%;
        }
        
        .atas{
            margin-top: 20px;
            width: 100%;
            
        }

        table{
            background-color: rgba(233, 233, 233, 0.8);
        }
        table img{
            padding-left: 80px;
            padding-right: 40px;
            margin-left:250px;
        }

       
        table h1 {
            padding-left: 30px;
            font-family:Georgia, 'Times New Roman', Times, serif;
        }

        table h4{
            padding-left: 30px;
            font-family:Georgia, 'Times New Roman', Times, serif;
        }

        .mid{
            width: 100%;
            text-align: center;
            float: left;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        
  
        .footer{
            width: 100%;
            float: right;
            text-align: center;
            margin-top: 20px;
            background-color: rgba(233, 233, 233, 0.8);
        }

        .footer p{
            padding-top: 10px;
        }
        
        .btn{
            padding-bottom: 15px;
        }

        .btn h4{
          padding-bottom: 1px;
        }
    </style>
</head>
<body>
        <div class="atas">
          <table border="0px">
              <tr>
                  <td>
                                <h1>Selamat Datang di Website Service Motor KecoaTerbang</h1>
                                <h4>Website booking service motor terbaik di seluruh dunia</h4>     
                  </td>
                  <td>
                        <img src="kecoaterbang.png" alt="" width="250px">
                  </td>
              </tr>
          </table>       
        </div>
    
        <div class="mid">          
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                          <li data-target="#myCarousel" data-slide-to="1"></li>
                          <li data-target="#myCarousel" data-slide-to="2"></li>
                          <li data-target="#myCarousel" data-slide-to="3"></li>
                        </ol>
                      
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                          <div class="item active">
                            <img src="yamaha1.jpg" alt="gambar1">
                          </div>
                      
                          <div class="item">
                            <img src="yamaha2.jpg" alt="gambar2">
                          </div>
                        
                          <div class="item">
                            <img src="yamaha3.jpg" alt="gambar3">
                          </div>
                        
                        <div class="item">
                            <img src="yamaha4.jpg" alt="gambar4">
                        </div>
                            
                        </div>
                      
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                      
    </div>
        <div class="btn-group btn-group-justified">
                <div class="btn-group">
                 <button type="button" class="btn">
                  
                        <h3>Lokasi</h3>
                        <p>Jl Tj No 188 Sorosutan</p>
                        <p>Umbulharjo,Yogyakarta </p>
                
                </button> 
                </div>

                <div class="btn-group">
                  <button type="button" class="btn">
                    <h3>Booking jadwal Service</h3>
                    <p>Yuk booking jadwal servicemu sekarang!</p>
                    <a href="form.php"><h4>Klik Disini!</h4></a>
                  </button>
                </div>

                <div class="btn-group">
                  <button type="button" class="btn">
                    <h3>Our Social Media</h3>
                    <p>IG       : KecoaTerbangService</p>
                    <p>Email    : kservice@gmail.com</p>
                  </button>
                </div>

                <div class="btn-group">
                    <button type="button" class="btn">
                        <h3>Contact Us</h3>
                        <p>082178909876</p>
                        <p>081800018070</p>
                    </button>
                </div>
         </div>
              
                <div class="footer">
                    <p><b>&copy KecoaTerbangService2019</b></p>
                </div>
    
    </body>
</html>
</html>