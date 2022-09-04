<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
    <script src="https://unpkg.com/html5-qrcode"></script>
  </head>
  <body>
    <div id="qr-reader" style="width: 100%;"></div>
    <script>
        var setScan = '';
        function onScanSuccess(decodedText, decodedResult) {
            if (decodedText == '') return;

            if (decodedText == setScan) return;

            setScan = decodedText;
            finalSetScan = setScan;
            window.location.href = finalSetScan;
       }
       var html5QrcodeScanner = new Html5QrcodeScanner(
         "qr-reader", { fps: 10, qrbox: 250 });
       html5QrcodeScanner.render(onScanSuccess);
    </script>
  </body>
</html>