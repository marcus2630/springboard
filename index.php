<?php require_once('connect.php');?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Springboard</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" media="screen">

    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.2.0/list.min.js"></script>

  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
        </div>
          <div class="col-md-6" style="margin-top:4em;">


          <?php
            $sql = "SELECT status_msg, status_type FROM status_msg ORDER BY status_id DESC LIMIT 1";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()) {
          ?>

          <div class="alert alert-<?php echo($row['status_type']);?>" id="statusBox" role="alert" style="cursor: pointer;">
          <?php echo($row['status_msg']); ?>
          <span class="glyphicon pull-right 
          <?php 
            switch($row['status_type']) {
              case "info":
                echo('glyphicon-info-sign');
                break;
              case "success":
                echo('glyphicon glyphicon-ok-sign');
                break;
              case "warning":
                echo('glyphicon glyphicon-warning-sign');
                break;
              case "danger":
                echo('glyphicon glyphicon-exclamation-sign');
                break;
            }
          ?>"></span>
          </div>

          <?php }  ?>

        
        
          <h1 class="frontpage">Springboard</h1>
            <div class="col-md-12 dashboard">
            <div class="row">
            <a href="#" data-toggle="modal" data-target="#swap-lager">
              <div class="col-sm-4 dash-tile">
                <span class="label tile-badge label-primary">1</span><br/>
                <div class="tile-icon">
                <span class="glyphicon glyphicon-inbox"></span><br>
                <p>Swap-lager</p>
                </div>
              </div>
            </a>
            <a href="https://diagnostics.apple.com/" target="_blank">
              <div class="col-sm-4 dash-tile">
              <span class="label tile-badge label-primary">2</span><br/>
                <div class="tile-icon">
                <span class="glyphicon glyphicon-zoom-in"></span><br>
                <p>Diagnostics</p>
                </div>
              </div>
            </a>
            <a href="https://gsxapp.apple.com" target="_blank">
              <div class="col-sm-4 dash-tile">
              <span class="label tile-badge label-primary">3</span><br/>
                <div class="tile-icon">
                <span class="glyphicon glyphicon-globe"></span><br>
                <p>GSX</p> 
                </div>
              </div>
            </a>
            </div>
            <div class="row">
            <a href="https://row.ups.com/Default.aspx?Company=beatscare2&LoginId=testuser&Password=testuser" target="_blank">
              <div class="col-sm-4 dash-tile">
              <span class="label tile-badge label-primary">4</span><br/>
                <div class="tile-icon">
                <span class="glyphicon glyphicon-plane"></span><br>
                <p>UPS</p>
                </div> 
              </div>
            </a>
            <div class="col-xs-4 dash-tile content textcenter nohover">
            <span>Personale pris</span>
                <form class="form-inline">
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon">Kr.</div>
                        <input type="text" autocomplete="off" class="form-control" id="wholesaleprice" placeholder="Exchange pris">
                        
                      </div>

                    </div>
                    
                  </form>
                  <br/>
                  <p>Kr. <span class="wholesaleoutput"></span>,-</p>
              </div>
              <div class="col-xs-4 dash-tile textcenter">
                <div class="tile-icon">
                <span><?php echo(date("W")); ?></span><br>
                <p>UGE</p>
                </div>
              </div>
              
            </div>
            <div class="row ">
              
                <div class="col-md-12 dash-tile fullsize">
                <canvas id="myChart" width="400" height="200"></canvas>
              </div>

            </div>

            </div>
            
          </div>

        <div class="col-md-2">
        </div>
      </div>
      </div>
    </div>

    <?php include('swap-modal.php'); ?>
    <?php include('status-modal.php'); ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $( "#statusBox" ).click(function() {
        $('#status-modal').modal();
      });



var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["10", "11", "12", "13", "14"],
        datasets: [
        {
            label: "% CSAT",
            fill: true,
            lineTension: 0.1,
            backgroundColor: "rgba(17, 41, 68,0.7)",
            borderColor: "rgba(40, 101, 168 ,1.0)",
            borderWidth: 4,
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "rgba(40, 101, 168 ,1.0)",
            pointHoverBackgroundColor: "rgba(40, 101, 168 ,1.0)",
            pointBackgroundColor: "rgba(40, 101, 168 ,1.0)",
            pointBorderWidth: 0,
            pointHoverRadius: 5,
            pointHoverBorderColor: "rgba(40, 101, 168 ,1.0)",
            pointHoverBorderWidth: 0,
            pointRadius: 0,
            pointHitRadius: 50,
            data: [76,83,83,80,80],
            spanGaps: false,
        }
    ]
},
    options: {
        legend: {
          labels: {
            boxWidth: 0,
            fontColor: 'black'
          }
        },
        scales: {

            yAxes: [{

      gridLines: {
        display:false
      },
                ticks: {
                    min: 50,
                    max: 100,
                    fontFamily: "Helvetica Neue",
                    fontColor: 'black',
                    beginAtZero:false,
                }
            }],
            xAxes: [{

      gridLines: {
        display:false
      },
                ticks: {
                  fontFamily: "Helvetica Neue",
                    fontColor: 'black'
                }
            }]
        }
    }
});




    </script>
    <script>

    $("#wholesaleprice").on('keyup',function(){
   // alert('pressed')
        var input = $(this).val()
        var totalcost= $(this).val() * 1.25 + $(this).val() * 0.05
    $(".wholesaleoutput").html(totalcost);
})

    </script>
    <script src="hotkeys.js"></script>

  </body>
</html>