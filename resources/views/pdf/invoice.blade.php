<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            padding: 20px;
            max-width: 800px;
            margin: auto;
        }
        .header {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .invoice-details {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
        }
        .invoice-details div {
            margin-bottom: 10px;
        }
        .invoice-details .to {
            text-align: left;
        }
        .invoice-details span {
            display: block;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
        }
        .table th, .table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        .table th {
            background-color: #f4f4f4;
        }
        .total-section {
            margin-top: 20px;
            text-align: right;
        }
        .total-section p {
            margin: 5px 0;
        }
        .footer {
            margin-top: 60px;
            text-align: start;
        }
        .footerHeader {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
            margin: 0;
            font-weight: 600;
        }

        .batas{
          border: 1px solid black;
          width: 100%;
        }
        /* .brand{
          text-align: start
        } */
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
          <div class="brand">
            <h1>Arsindo</h1>
          </div>
          <div class="">
            <h1>INVOICE</h1>
            <p>Date: {{ \Carbon\Carbon::parse($dataBooking->created_at)->format('d-m-Y') }}</p>
          </div>
        </div>
        <hr class="batas">
        <div class="invoice-details">
            <div class="to">
                <h4>Invoice to:</h4>
                <span>{{$dataBooking->namalengkap}}</span>
                <span>{{$dataBooking->alamatpenjemputan}}</span>
            </div>  
        </div>
        <table class="table">
          <tr>
              <th>Mobil</th>
              <td>{{ $dataBooking->detailMobil->mobil }}</td>
          </tr>
              <th>Harga Sewa</th>
              <td>{{ number_format($dataBooking->harga, 0, ',', '.') }}</td>
          </tr>
          <tr>
              <th>Alamat Penjemputan</th>
              <td>{{ $dataBooking->alamatpenjemputan }}</td>
          </tr>
          <tr>
              <th>Tanggal Penjemputan</th>
              <td>{{ \Carbon\Carbon::parse($dataBooking->tanggalpenjemputan)->format('d-m-Y') }}</td>
          </tr>
          <tr>
              <th>Waktu Penjemputan</th>
              <td>{{ \Carbon\Carbon::parse($dataBooking->waktupenjemputan)->format('H:i') }}</td>
          </tr>
          <tr>
              <th>Tourguide</th>
              <td>{{ $dataBooking->tourguide ? 'Pakai Tourguide' : 'Tidak Pakai Tourguide' }}</td>
          </tr>
      </table>
        <div class="total-section">
            <p>Sub-total: Rp {{ number_format($dataBooking->harga, 0, ',', '.') }}</p>
            <h3>Total: Rp {{ number_format($dataBooking->harga, 0, ',', '.') }}</h3>
        </div>
        <div class="footer">
            <p class="footerHeader">Thank you for your purchase!</p>
            <p>Contact Us. </p>
            <p>Phone: 087882797730</p>
            <p>Email: arsindo@gmail.com </p>
        </div>
    </div>
</body>
</html>
