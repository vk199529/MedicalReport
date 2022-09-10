@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .container{
        margin-top:10px;
    }
    #print_btn{
    margin-left: 50%;
}
 </style>
</head>
<body>

<div class="container" id="container">
    <div style="text-align:center;">
        <p style="margin-bottom:-22px;">TAX INVOICE</p>      
        <h2>SHRI SAI PHARMA</h2>   
        <p>STATION ROAD MOHAMMADABAD GOHANA</p> 
        <p>MAU-276403</p>  
        <p>MAOB-1234567890</p> 
    </div>    
  <table class="table table-bordered">
    <thead>
      <tr>
        <td colspan="3">
            M/s R.K MEDICAL STORE<br>
            xyz<br>
            MOB-1234567890
        </td>
        <td colspan="6">
            GST.NO :<br>
            DL.NO :
        </td>
        <td colspan="6">
           INV NO : L2068<br>
           INV DATE : 06.08.2022<br>
           STATE CODE : UTTAR PRADESH, 09<br>
        </td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>S.no.</th>
        <th>Particulars</th>
        <th>Batch</th>
        <th>HSN</th>
        <th>Qty</th>
        <th>Mrp</th>
        <th>Rate</th>
        <th>Dis%</th>
        <th>GST%</th>
        <th>Amount</th>
        <th>N. Rate</th>
        <th>N. Amount</th>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Mary</td>
        <td>Mary</td>
        <td>Mary</td>
        <td>Mary</td>
        <td>mary</td>
        <td>Mary</td>
        <td>Mary</td>
        <td>mary</td>
        <td>Mary</td>
        <td>Mary</td>
        <td>mary</td>
      </tr>
      <tr>
        <td colspan="12">
        <h4>Four Hundred Thirty Eight Only</h4>
            <p>Remarks :<p>
            <h4>Terms & conditions</h4>

        </td>
      </tr>
    </tbody>
   
</body>
  </table>
</div>
<a id="print_btn" href="javascript:void(0)" onclick="print(document.getElementById('container'))">PRINT</a>
</html>

<script>
  function print(str){
    var divContents = document.getElementById("container").innerHTML;
            var a = window.open('', '', 'height=500, width=1000');
            a.document.write('<html>');
            a.document.write('<body>');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
  }
</script>
@endsection
