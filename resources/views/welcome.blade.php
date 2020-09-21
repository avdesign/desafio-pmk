<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <script>var __basePath = './';</script>
        
        <!-- Styles -->
        <style media="only screen">
            html, body {
                height: 100%;
                width: 100%;
                margin: 0;
                box-sizing: border-box;
                -webkit-overflow-scrolling: touch;
            }
    
            html {
                position: absolute;
                top: 0;
                left: 0;
                padding: 0;
                overflow: auto;
            }
    
            body {
                padding: 1rem;
                overflow: auto;
            }
        </style>
        <script src="https://unpkg.com/@ag-grid-enterprise/all-modules@24.0.0/dist/ag-grid-enterprise.min.js"></script>
        <link rel="stylesheet" href="assets/css/styles.css">
    </head>    
    <body>
        <div class="example-wrapper">
      <div class="example-header">
        Por página:
        <select onchange="onPageSizeChanged()" id="page-size">
          <option value="10" selected>10</option>
          <option value="100">100</option>
          <option value="500">500</option>
          <option value="1000">1000</option>
        </select>
      </div>
      <div id="myGrid" class="ag-theme-alpine"></div>
    </div>
    
        <script src="assets/js/main.js"></script>
    </body>
</html>
