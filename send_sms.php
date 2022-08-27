<?php
if (!empty($_GET['mobile'])) {
    /**
     * Here we are sending sms to mobile number
     */
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://sms77io.p.rapidapi.com/sms",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "to=%2B918850327690&p=ilnJgUvi4kKuUN7Fxc91LjyXqD6QLtD79OZTQpOsQ8A8tk5NFk68j6BWJapPcR8M&text=Dear%20customer.%20We%20want%20to%20say%20thanks%20for%20your%20trust.%20Use%20code%20MINUS10%20for%2010%20%25%20discount%20on%20your%20next%20order!",
        CURLOPT_HTTPHEADER => [
            "X-RapidAPI-Host: sms77io.p.rapidapi.com",
            "X-RapidAPI-Key: dced016ce3msh617de432b620444p1c2e67jsn8edffedaad78",
            "content-type: application/x-www-form-urlencoded"
        ],
    ]);
    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Movie Recommendation Searches</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
    <input type="text" name="mobile"/>
    <button type="submit">Submit</button>
</form>
<br/>
<div>
    <?php
        if(!empty($response) && $response == 100) {
            echo "<pre>";print_r($response);
            echo "<p><b>Message sent successfully</b></p>";
        }    
    ?>
</div>
</body>
</html>