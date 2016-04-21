<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Carta Mama 1</title>
<link rel="stylesheet" type="text/css" href="{{ asset($templateMain->template_name.'/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset($templateMain->template_name.'/css/mama_1.css') }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.print {
    float: right;
    margin-right:30px;
    margin-top:30px;
    cursor: pointer;
}

@media print {
    .print {
        display: none;
    }
}
</style>
</head>
<body>
<img onclick="window.print();" class="print" src="{{ asset('img/print.png') }}" alt="">
<?php $dirImage = asset($templateMain->template_name.'/img\/'); ?>
{!! str_replace('img/',$dirImage,$template->content) !!}
</body>

</html>