<!DOCTYPE html>
<html>
<head>
  <title>Log Report</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
      display: flex;
      justify-content: center; 
      align-items: center; 
      min-height: 100vh; 
      background-image: url({{url('images/background-white.jpg')}});
      overflow: hidden;
      background-size: cover;
    }

    h1 {
      text-align: center;
      margin-top: 0;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: rgba(0, 0, 0, 0.5);
    }

    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      color: white;
    }

    th {
      background-color: #333; 
    }

    tr:nth-child(even) {
      background-color: rgba(0, 0, 0, 0.3);
    }

    .back-button {
    width: 30px;
    position: absolute;
    top: 20px;
    left: 20px;
  }
  </style>
</head>
<body>
    <a href="/Main"><img src="{{URL::asset('/images/backbutton.png')}}" alt="" class="back-button"></img></a>
  <h1>Log Report</h1>
  <table>
    <thead>
      <tr>
        <th>Date</th>
        <th>Plate Number</th>
        <th>Location</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>2023-06-01</td>
        <td>B 9822 Jk</td>
        <td>Las Vegas</td>
      </tr>
      <tr>
        <td>2023-06-02</td>
        <td>B 9822 Jk</td>
        <td>Surabaya</td>
      </tr>
      <tr>
        <td>2023-06-03</td>
        <td>B 9822 Jk</td>
        <td>Bandung</td>
      </tr>
      <tr>
        <td>2023-06-04</td>
        <td>B 9822 Jk</td>
        <td>Jakarta</td>
      </tr>
    </tbody>
  </table>
</body>
</html>
