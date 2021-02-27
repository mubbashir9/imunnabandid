
<?php
    $parameter =
    [
    'OrderNumber' => 1992,
    'Product' => "Vaxi Band",
    'FirstName' => "Alex",
    'LastName' => "Jhon",
    'Email' => "alexjhon@gmail.com",
    'Shippinginformation' => "New York",
    'FinalVaccinationDate' => "10/2/2020",
    ];
    $parameter= Crypt::encrypt($parameter);
?>
<a href="{{url('/show',$parameter)}}" target="_blank">Go To Form</a>