<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print AWB</title>
    <style>
        /* Style untuk printer thermal */
        @media print {
            @page {
                size: 80mm 150mm;
                margin: 0;
            }
            body {
                margin: 0;
                font-family: 'Courier New', Courier, monospace;
                font-size: 12px;
            }
        }

        body {
            width: 80mm;
            margin: 0 auto;
            padding: 0;
            font-family: 'Courier New', Courier, monospace;
        }

        .section {
            ext-align: center;
            padding: 5px 0;
        }

        .barcode {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 45px;
            margin: 0 auto;
            padding: 10px 0;
        }

        .barcode img {
            max-width: 100%;
        }

        .title {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }

        .titleawb {
            text-align: center;
            font-size: 25px;
            font-weight: bold;
        }

        .sub-title {
            font-size: 16px;
            font-weight: bold;
            text-align: center;
        }

        .content {
            text-align: center;
            font-size: 12px;
        }

        .border-middle {
            border-left: 2px solid #000;
        }
        .border {
            border-top: 1px solid black;
            margin: 10px 0;
            padding: 5px 0;
        }

        .double-border {
            border-top: 1px solid black;
            border-bottom: 1px solid black;
            margin: 10px 0;
            padding: 5px 0;
        }

        .footer {
            text-align: center;
            font-size: 12px;
            padding-top: 15px;
        }

        .footer img {
            width: 50mm;
        }
    </style>
</head>
<body>
    <div>
        <p></p>
    </div>
    <!-- Title -->
    <div class="titleawb">{{ $awb->airline }}</div>

    <!-- Barcode for awbbc -->
    <div class="section barcode">
        <div>{!! $barcodeHTMLawbbc !!}</div>
    </div>

    <!-- Awbbc -->
    <div class="title">{{ $awb->awbbc }}</div>

    <!-- Air Waybill Number -->
    <div class="section border">
        <div class="sub-title">AIR WAYBILL NUMBER</div>
        <div class="title">{{ $awb->awb }}</div>
    </div>

    <!-- Destination and Total -->
    <div class="section border">
        <table width="100%">
            <tr>
                <td class="content">DESTINATION</td>
                <td class="content">TOTAL NO OF PIECES</td>
            </tr>
            <tr>
                <td class="title">{{ $awb->destination }}</td>
                <td class="title">{{ $awb->total }}</td>
            </tr>
        </table>
    </div>

    <!-- Origin Station -->
    <div class="section border">
        <div class="content">ORIGIN STATION</div>
        <div class="title">{{ $awb->origin }}</div>
    </div>

    <!-- HAWB -->
    <div class="section border">
        <table width="100%">
            <tr>
                <td class="content">HAWB NO</td>
                <td class="content">{{ $awb->hawb }}</td>
            </tr>
        </table>
    </div>

    <!-- Barcode for hawb -->
    <div class="section barcode">
        <div>{!! $barcodeHTMLhawb !!}</div>
    </div>

    <!-- Footer Logo -->
    <div class="footer">
        <img src="{{ asset('images/khz.png') }}" alt="Kurhanz Trans">
    </div>
</body>
</html>
