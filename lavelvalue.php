<?php

// Input list
// $input_list = ["AF|Afghanistan", "AL|Albania", "DZ|Algeria", "AS|American Samoa", "AD|Andorra", "AO|Angola", "AI|Anguilla", "AG|Antigua and Barbuda", "AR|Argentina", "AM|Armenia", "AW|Aruba", "AU|Australia", "AT|Austria", "AZ|Azerbaijan", "BS|Bahamas", "BH|Bahrain", "BD|Bangladesh", "BB|Barbados", "BY|Belarus", "BE|Belgium", "BZ|Belize", "BJ|Benin", "BM|Bermuda", "BT|Bhutan", "BO|Bolivia (Plurinational State of)", "BA|Bosnia and Herzegovina", "BW|Botswana", "BR|Brazil", "VG|British Virgin Islands", "BN|Brunei Darussalam", "BG|Bulgaria", "BF|Burkina Faso", "BI|Burundi", "CV|Cabo Verde", "KH|Cambodia", "CM|Cameroon", "CA|Canada", "KY|Cayman Islands", "CF|Central African Republic", "TD|Chad", "CL|Chile", "CN|China", "CX|Christmas Island", "CC|Cocos (Keeling) Islands", "CO|Colombia", "KM|Comoros", "CG|Congo", "CK|Cook Islands", "CR|Costa Rica", "HR|Croatia", "CU|Cuba", "CW|Curaçao", "CY|Cyprus", "CZ|Czech Republic", "CI|Côte d’Ivoire", "KP|Democratic People's Republic of Korea", "CD|Democratic Republic of the Congo", "DK|Denmark", "DJ|Djibouti", "DM|Dominica", "DO|Dominican Republic", "EC|Ecuador", "EG|Egypt", "SV|El Salvador", "GQ|Equatorial Guinea", "ER|Eritrea", "EE|Estonia", "ET|Ethiopia", "FK|Falkland Islands (Malvinas)", "FO|Faroe Islands", "FJ|Fiji", "FI|Finland", "FR|France", "GF|French Guiana", "PF|French Polynesia", "GA|Gabon", "GM|Gambia", "GE|Georgia", "DE|Germany", "GH|Ghana", "GI|Gibraltar", "GR|Greece", "GL|Greenland", "GD|Grenada", "GP|Guadeloupe", "GU|Guam", "GT|Guatemala", "GG|Guernsey", "GN|Guinea", "GW|Guinea-Bissau", "GY|Guyana", "HT|Haiti", "VA|Holy See", "HN|Honduras", "HU|Hungary", "IS|Iceland", "IN|India", "ID|Indonesia", "IQ|Iraq", "IE|Ireland", "IR|Iran (Islamic Republic of)", "IM|Isle of Man", "IL|Israel", "IT|Italy", "JM|Jamaica", "JP|Japan", "JE|Jersey", "JT|Johnston Atoll", "JO|Jordan", "KZ|Kazakhstan", "KE|Kenya", "KI|Kiribati", "KW|Kuwait", "KG|Kyrgyzstan", "LA|Lao People's Democratic Republic", "LV|Latvia", "LB|Lebanon", "LS|Lesotho", "LR|Liberia", "LY|Libya", "LI|Liechtenstein", "LT|Lithuania", "LU|Luxembourg", "MG|Madagascar", "MW|Malawi", "MY|Malaysia", "MV|Maldives", "ML|Mali", "MT|Malta", "MH|Marshall Islands", "MQ|Martinique", "MR|Mauritania", "MU|Mauritius", "YT|Mayotte", "MX|Mexico", "FM|Micronesia (Federated States of)", "UM|Midway Islands", "MC|Monaco", "MN|Mongolia", "ME|Montenegro", "MS|Montserrat", "MA|Morocco", "MZ|Mozambique", "MM|Myanmar", "NA|Namibia", "NR|Nauru", "NP|Nepal", "NL|Netherlands", "NC|New Caledonia", "NZ|New Zealand", "NI|Nicaragua", "NE|Niger", "NG|Nigeria", "NU|Niue", "NF|Norfolk Island", "MP|Northern Mariana Islands (Commonwealth of the)", "NO|Norway", "PS|Occupied Palestinian territory, including east Jerusalem", "OM|Oman", "PK|Pakistan", "PW|Palau", "PA|Panama", "PG|Papua New Guinea", "PY|Paraguay", "PE|Peru", "PH|Philippines", "PN|Pitcairn Islands", "PL|Poland", "PT|Portugal", "PR|Puerto Rico", "QA|Qatar", "KR|Republic of Korea", "MD|Republic of Moldova", "RO|Romania", "RU|Russian Federation", "RW|Rwanda", "RE|Réunion", "BL|Saint Barthelemy", "SH|Saint Helena", "KN|Saint Kitts and Nevis", "LC|Saint Lucia", "MF|Saint Martin", "PM|Saint Pierre and Miquelon", "VC|Saint Vincent and the Grenadines", "WS|Samoa", "SM|San Marino", "ST|Sao Tome and Principe", "SA|Saudi Arabia", "SN|Senegal", "RS|Serbia", "SC|Seychelles", "SL|Sierra Leone", "SG|Singapore", "SX|Sint Maarten", "SK|Slovakia", "SI|Slovenia", "SB|Solomon Islands", "SO|Somalia", "ZA|South Africa", "SS|South Sudan", "ES|Spain", "LK|Sri Lanka", "SD|Sudan", "SR|Suriname", "SJ|Svalbard and Jan Mayen Islands", "SZ|Swaziland", "SE|Sweden", "CH|Switzerland", "SY|Syrian Arab Republic", "TJ|Tajikistan", "TH|Thailand", "MK|The Former Yugoslav Republic of Macedonia", "TL|Timor-Leste", "TG|Togo", "TK|Tokelau", "TO|Tonga", "TT|Trinidad and Tobago", "TN|Tunisia", "TR|Turkey", "TM|Turkmenistan", "TC|Turks and Caicos Islands", "TV|Tuvalu", "UG|Uganda", "UA|Ukraine", "AE|United Arab Emirates", "GB|United Kingdom of Great Britain and Northern Ireland", "TZ|United Republic of Tanzania", "VI|United States Virgin Islands", "US|United States of America", "UY|Uruguay", "UZ|Uzbekistan", "VU|Vanuatu", "VE|Venezuela (Bolivarian Republic of)", "VN|Viet Nam", "WK|Wake Island", "WF|Wallis and Futuna", "EH|Western Sahara", "YE|Yemen", "ZM|Zambia", "ZW|Zimbabwe"];

// // Function to convert the list
// function convertList($input_list)
// {
//     $output_list = [];
//     foreach ($input_list as $item) {
//         list($key, $value) = explode('|', $item);
//         $output_list[] = "- value: " . $key;
//         $output_list[] = "  label: " . $value;
//     }
//     return $output_list;
// }

// // Convert the list
// $converted_list = convertList($input_list);

// // Print the converted list
// foreach ($converted_list as $item) {
//     echo "<pre>";
//     echo $item . PHP_EOL;
// }


$array = [45, 23, 55, 33, 22, 44, 55];
for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j < count($array) - 1; $j++) {
        if ($array[$j + 1] < $array[$j]) {
            $temp = $array[$j + 1];
            $array[$j + 1] = $array[$j];
            $array[$j] = $temp;
        }
    }
    //echo "<br>";
}

//print_r($array);
//die;

$a = 5;
$b = 6;
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
// echo $a;
// echo '<br>';
// echo $b;
///SELECT name, salary  FROM employee  WHERE salary = ( SELECT MAX(salary) FROM employee  WHERE salary < (SELECT MAX(salary) FROM employee));


$string = 'Suchi';
$reverse = '';
$i = 0;
while (!empty($string[$i])) {
    $reverse = $string[$i] . $reverse;
    $i++;
}
echo $reverse;




$data = [3, 5, 7, 2, 9, 4];
// Initialize a variable to hold the highest value
$highestValue = $data[0]; // Assume the first element is the highest initially
// Loop through the array
foreach ($data as $value) {
    if ($value > $highestValue) {
        $highestValue = $value; // Update the highest value
    }
}
echo "The highest value in the array is: " . $highestValue;


$a = 1;
echo $a;
echo $a++;
echo $a++ + $a++;
echo $a--;
echo '--' . $a-- - $a--;
echo $a;
