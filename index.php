<?php

$curl = curl_init();
$public_key = "QSy3TgHXg9Z0LOzGrpihIbIrMEtyNz";
$private_key = "96cb1179-25a4-4f91-99eb-b178005dba8f";
curl_setopt_array($curl, array(
    CURLOPT_URL => "https://emplusstg.urgtech.com/api/Security/Authenticate",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_HTTPHEADER => array(
        "Content-Type: application/json", "Authorization: Basic " . base64_encode($public_key . ":" . $private_key)
    ),
));

$response = curl_exec($curl);
print_r($response);
curl_close($curl);





// curl_setopt($ch, CURLOPT_URL, "https://emplusstg.urgtech.com/api/Security/Authenticate");
// curl_setopt($ch, CURLOPT_HEADER, 0);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_POST, 1);

// $data = array(
//     'username' => 'QSy3TgHXg9Z0LOzGrpihIbIrMEtyNz',
//     'password' => '96cb1179-25a4-4f91-99eb-b178005dba8f'
// );

// curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

// $contents = curl_exec($ch);
// print_r($contents);
// curl_close($ch);



// $curlConfig = array(
//     CURLOPT_URL            => "https://emplusstg.urgtech.com/api/Security/Authenticate",
//     CURLOPT_POST           => true,
//     CURLOPT_RETURNTRANSFER => true,
//     CURLOPT_POSTFIELDS     => array(
//         'CultureCode' => 'string',
//         'DeviceId' => 'string',
//         'DeviceModel' => 'string',
//         'DevicePlatform' => 'string',
//         'DeviceVersion' => 'string',
//         'Password' => 'deekay2024',
//         'Username' => 'invoice@deekaycontractingltd.com',
//         'Instance' => 'string',
//         'incrementLockoutOnFailure' => true
//     )
// );
// curl_setopt_array($ch, $curlConfig);
// $result = curl_exec($ch);
// print_r($result);
// curl_close($ch);
