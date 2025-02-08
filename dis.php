<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ERROR | E_WARNING | E_PARSE);

/*============== Local Cred =============*/
$host = "localhost";
$user = "root";
$pass = "Smoking@12345";
$db   = "RECDemo_240522";
/*==========================================*/

$conn = mysqli_connect($host, $user, $pass, $db);
//Check connection
if ($conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    /*NSWS API*/

    define("apiUrllicence", "https://uat-nsws-mnstrportal.investindia.gov.in/");

    $api_url = apiUrllicence;
    $jsondata = json_encode(array('licenseId' => 'M029_D003_A005', 'ministryStateId' => "M029", 'deptId' => "M029_D003", 'wingId' => "M029_D003_WNG01"));
    $headeraddress = array('access-id:MIN_TEST_0', 'access-secret:MintesT@1234', 'api-key:Min1@GLL08', 'Content-Type:application/json', 'Accept:application/json');

    //$result = accreditationApi("POST",$api_url,$jsondata,$api_name='nsws_license/getLicensesList',$headeraddress);

    $result1 = '{
    "message": "Success",
    "status": "200",
    "response": [
        {
            "applReqId": "SW5287274831-M029_D003_A005-1655448827537",
            "licenseId": "M029_D003_A005",
            "licenseVersion": "1",
            "swsId": "SW5287274831",
            "investorName": "vijay",
            "investorRequestid": "49097",
            "licenseReqDate": "2022-06-17T06:53:47.000+00:00",
            "dependentLicenseFlag": "N",
            "dependentLicenseList": [],
            "licenseToBePushDepartmentFlag": "N",
            "ministeryId": "M029",
            "departmentId": "M029_D003",
            "License_state": "O",
            "Orgnl_LicenseReqID": "SW5287274831-M029_D003_A005-1655448827537",
            "paymentType": "UU",
            "SignedApplicationContentID": "",
            "forms": [
                {
                    "name": "Accreditation form for DISCOM User - REC",
                    "formId": "F00929",
                    "sections": [
                        {
                            "sectionName": "Applicant Details",
                            "sectionId": "339566",
                            "sectionResponseId": "253650",
                            "sectionKey": "S-0",
                            "serialNumber": "0",
                            "fieldResponses": [
                                {
                                    "fieldName": "Contact Details",
                                    "inputValue": "",
                                    "fieldResponseId": "2305407",
                                    "fieldKey": "F-3",
                                    "serialNumber": "5",
                                    "subFields": [
                                        {
                                            "fieldResponseId": "2305408",
                                            "fieldName": "Primary Contact Person Name",
                                            "inputValue": "Dinesh",
                                            "fieldKey": "F-82483",
                                            "serialNumber": "0"
                                        },
                                        {
                                            "fieldResponseId": "2305409",
                                            "fieldName": "Position/Designation",
                                            "inputValue": "Director",
                                            "fieldKey": "F-67419",
                                            "serialNumber": "1"
                                        },
                                        {
                                            "fieldResponseId": "2305410",
                                            "fieldName": "Contact Number (Land-line)",
                                            "inputValue": "{\"countryCode\":\"011\",\"phoneNumber\":\"123456\"}",
                                            "fieldKey": "F-65616",
                                            "serialNumber": "2"
                                        },
                                        {
                                            "fieldResponseId": "2305411",
                                            "fieldName": "Contact Number (Mobile)",
                                            "inputValue": "{\"countryCode\":\"+91\",\"phoneNumber\":\"8800667814\"}",
                                            "fieldKey": "F-7074",
                                            "serialNumber": "3"
                                        },
                                        {
                                            "fieldResponseId": "2305412",
                                            "fieldName": "Fax Number",
                                            "inputValue": "22323213",
                                            "fieldKey": "F-1888",
                                            "serialNumber": "4"
                                        },
                                        {
                                            "fieldResponseId": "2305413",
                                            "fieldName": "E-mail ID",
                                            "inputValue": "narlikar.s@gmail.com",
                                            "fieldKey": "F-78277",
                                            "serialNumber": "5"
                                        },
                                        {
                                            "fieldResponseId": "2305414",
                                            "fieldName": "Website",
                                            "inputValue": "",
                                            "fieldKey": "F-1289",
                                            "serialNumber": "6"
                                        }
                                    ]
                                },
                                {
                                    "fieldName": "City/Suburb",
                                    "inputValue": "Mumbai",
                                    "fieldResponseId": "2305405",
                                    "fieldKey": "F-9",
                                    "serialNumber": "4"
                                },
                                {
                                    "fieldName": "Project Details",
                                    "inputValue": "",
                                    "fieldResponseId": "2305415",
                                    "fieldKey": "F-0",
                                    "serialNumber": "0",
                                    "subFields": [
                                        {
                                            "fieldResponseId": "2305416",
                                            "fieldName": "Name of Entity",
                                            "inputValue": "DISCOMUS",
                                            "fieldKey": "F-46932",
                                            "serialNumber": "0"
                                        }
                                    ]
                                },
                                {
                                    "fieldName": "Personal Details: Address",
                                    "inputValue": "",
                                    "fieldResponseId": "2305402",
                                    "fieldKey": "F-2",
                                    "serialNumber": "2",
                                    "subFields": [
                                        {
                                            "fieldResponseId": "2305403",
                                            "fieldName": "Postal Address of the Applicant",
                                            "inputValue": "Rohini",
                                            "fieldKey": "F-69691",
                                            "serialNumber": "0"
                                        },
                                        {
                                            "fieldResponseId": "2305404",
                                            "fieldName": "Postal Code",
                                            "inputValue": "800020",
                                            "fieldKey": "F-38591",
                                            "serialNumber": "1"
                                        }
                                    ]
                                },
                                {
                                    "fieldName": "Personal Details",
                                    "inputValue": "",
                                    "fieldResponseId": "2305417",
                                    "fieldKey": "F-1",
                                    "serialNumber": "1",
                                    "subFields": [
                                        {
                                            "fieldResponseId": "2305418",
                                            "fieldName": "Name of the Applicant",
                                            "inputValue": "Disocm user",
                                            "fieldKey": "F-88824",
                                            "serialNumber": "0"
                                        },
                                        {
                                            "fieldResponseId": "2305419",
                                            "fieldName": "Type of the Applicant",
                                            "inputValue": "Partnership",
                                            "fieldKey": "F-28764",
                                            "serialNumber": "1"
                                        }
                                    ]
                                },
                                {
                                    "fieldName": "State",
                                    "inputValue": "Maharashtra",
                                    "fieldResponseId": "2305406",
                                    "fieldKey": "F-13",
                                    "serialNumber": "3"
                                }
                            ]
                        },
                        {
                            "sectionName": "RPO Compliance Details for Last 4 years",
                            "sectionId": "339569",
                            "sectionResponseId": "253651",
                            "sectionKey": "S-4",
                            "serialNumber": "3",
                            "fieldResponses": [
                                {
                                    "fieldName": "Current and Prior FYs for which RECs issue being fought",
                                    "inputValue": "",
                                    "fieldResponseId": "2305420",
                                    "fieldKey": "F-21",
                                    "serialNumber": "0",
                                    "subFields": [
                                        {
                                            "fieldResponseId": "2305421",
                                            "fieldName": "Select Financial Year for which RECs issue being fought",
                                            "inputValue": "2018-2019",
                                            "fieldKey": "F-54308",
                                            "serialNumber": "0"
                                        },
                                        {
                                            "fieldResponseId": "2305422",
                                            "fieldName": "3 FY prior to RECs issue being fought",
                                            "inputValue": "2015-2016",
                                            "fieldKey": "F-82036",
                                            "serialNumber": "1"
                                        },
                                        {
                                            "fieldResponseId": "2305423",
                                            "fieldName": "2 FY prior to RECs issue being fought",
                                            "inputValue": "2016-2017",
                                            "fieldKey": "F-72699",
                                            "serialNumber": "2"
                                        },
                                        {
                                            "fieldResponseId": "2305424",
                                            "fieldName": "1 FY prior to RECs issue being fought",
                                            "inputValue": "2017-2018",
                                            "fieldKey": "F-46194",
                                            "serialNumber": "3"
                                        }
                                    ]
                                },
                                {
                                    "fieldName": "(E). Shortfall/Surplus in Procurement against the RPO set by SERC (C-D)",
                                    "inputValue": "",
                                    "fieldResponseId": "2305463",
                                    "fieldKey": "F-9146",
                                    "serialNumber": "5",
                                    "subFields": [
                                        {
                                            "fieldResponseId": "2305464",
                                            "fieldName": "Type : Solar?",
                                            "inputValue": "Yes",
                                            "fieldKey": "F-41541",
                                            "serialNumber": "0"
                                        },
                                        {
                                            "fieldResponseId": "2305465",
                                            "fieldName": "S1. Energy Procurement Period ( ) - 3 FY prior to RECs issue being fought",
                                            "inputValue": "12",
                                            "fieldKey": "F-77674",
                                            "serialNumber": "1"
                                        },
                                        {
                                            "fieldResponseId": "2305466",
                                            "fieldName": "S2. Energy Procurement Period ( ) - 2 FY prior to RECs issue being fought",
                                            "inputValue": "12",
                                            "fieldKey": "F-63924",
                                            "serialNumber": "2"
                                        },
                                        {
                                            "fieldResponseId": "2305467",
                                            "fieldName": "S3. Energy Procurement Period ( ) - 1 FY prior to RECs issue being fought",
                                            "inputValue": "12",
                                            "fieldKey": "F-30015",
                                            "serialNumber": "3"
                                        },
                                        {
                                            "fieldResponseId": "2305468",
                                            "fieldName": "S4. Energy Procurement Period ( ) - For the year RECs issue being fought",
                                            "inputValue": "12",
                                            "fieldKey": "F-67863",
                                            "serialNumber": "4"
                                        },
                                        {
                                            "fieldResponseId": "2305469",
                                            "fieldName": "Type : Non-Solar?",
                                            "inputValue": "Yes",
                                            "fieldKey": "F-60809",
                                            "serialNumber": "5"
                                        },
                                        {
                                            "fieldResponseId": "2305470",
                                            "fieldName": "NS1. Energy Procurement Period ( ) - 3 FY prior to RECs issue being fought",
                                            "inputValue": "12",
                                            "fieldKey": "F-97270",
                                            "serialNumber": "6"
                                        },
                                        {
                                            "fieldResponseId": "2305471",
                                            "fieldName": "NS2. Energy Procurement Period ( ) - 2 FY prior to RECs issue being fought",
                                            "inputValue": "12",
                                            "fieldKey": "F-79524",
                                            "serialNumber": "7"
                                        },
                                        {
                                            "fieldResponseId": "2305472",
                                            "fieldName": "NS3. Energy Procurement Period ( ) - 1 FY prior to RECs issue being fought",
                                            "inputValue": "12",
                                            "fieldKey": "F-66171",
                                            "serialNumber": "8"
                                        },
                                        {
                                            "fieldResponseId": "2305473",
                                            "fieldName": "NS4. Energy Procurement Period ( ) - For the year RECs issue being fought",
                                            "inputValue": "12",
                                            "fieldKey": "F-90263",
                                            "serialNumber": "9"
                                        }
                                    ]
                                },
                                {
                                    "fieldName": "(B). RPO as specified by SERC or NAPCC or Tariff Policy Whichever is higher in %",
                                    "inputValue": "",
                                    "fieldResponseId": "2305425",
                                    "fieldKey": "F-20",
                                    "serialNumber": "2",
                                    "subFields": [
                                        {
                                            "fieldResponseId": "2305426",
                                            "fieldName": "Type : Solar?",
                                            "inputValue": "Yes",
                                            "fieldKey": "F-45115",
                                            "serialNumber": "0"
                                        },
                                        {
                                            "fieldResponseId": "2305427",
                                            "fieldName": "S1. Energy Procurement Period ( ) - 3 FY prior to RECs issue being fought",
                                            "inputValue": "12",
                                            "fieldKey": "F-66245",
                                            "serialNumber": "1"
                                        },
                                        {
                                            "fieldResponseId": "2305428",
                                            "fieldName": "S2. Energy Procurement Period ( ) - 2 FY prior to RECs issue being fought",
                                            "inputValue": "12",
                                            "fieldKey": "F-18555",
                                            "serialNumber": "2"
                                        },
                                        {
                                            "fieldResponseId": "2305429",
                                            "fieldName": "S3. Energy Procurement Period ( ) - 1 FY prior to RECs issue being fought",
                                            "inputValue": "12",
                                            "fieldKey": "F-8007",
                                            "serialNumber": "3"
                                        },
                                        {
                                            "fieldResponseId": "2305430",
                                            "fieldName": "S4. Energy Procurement Period ( ) - For the year RECs issue being fought",
                                            "inputValue": "12",
                                            "fieldKey": "F-28821",
                                            "serialNumber": "4"
                                        },
                                        {
                                            "fieldResponseId": "2305431",
                                            "fieldName": "Type : Non-Solar?",
                                            "inputValue": "Yes",
                                            "fieldKey": "F-2380",
                                            "serialNumber": "5"
                                        },
                                        {
                                            "fieldResponseId": "2305432",
                                            "fieldName": "NS1. Energy Procurement Period ( ) - 3 FY prior to RECs issue being fought",
                                            "inputValue": "12",
                                            "fieldKey": "F-90459",
                                            "serialNumber": "6"
                                        },
                                        {
                                            "fieldResponseId": "2305433",
                                            "fieldName": "NS2. Energy Procurement Period ( ) - 2 FY prior to RECs issue being fought",
                                            "inputValue": "12",
                                            "fieldKey": "F-60845",
                                            "serialNumber": "7"
                                        },
                                        {
                                            "fieldResponseId": "2305434",
                                            "fieldName": "NS3. Energy Procurement Period ( ) - 1 FY prior to RECs issue being fought",
                                            "inputValue": "12",
                                            "fieldKey": "F-91356",
                                            "serialNumber": "8"
                                        },
                                        {
                                            "fieldResponseId": "2305435",
                                            "fieldName": "NS4. Energy Procurement Period ( ) - For the year RECs issue being fought",
                                            "inputValue": "12",
                                            "fieldKey": "F-59970",
                                            "serialNumber": "9"
                                        }
                                    ]
                                },
                                {
                                    "fieldName": "(C). RPO as specified by SERC or NAPCC or Tariff Policy Whichever is higher in MWh (A*B/100)",
                                    "inputValue": "",
                                    "fieldResponseId": "2305447",
                                    "fieldKey": "F-66314",
                                    "serialNumber": "3",
                                    "subFields": [
                                        {
                                            "fieldResponseId": "2305448",
                                            "fieldName": "Type : Solar?",
                                            "inputValue": "Yes",
                                            "fieldKey": "F-59808",
                                            "serialNumber": "0"
                                        },
                                        {
                                            "fieldResponseId": "2305449",
                                            "fieldName": "S1. Energy Procurement Period ( ) - 3 FY prior to RECs issue being fought",
                                            "inputValue": "12",
                                            "fieldKey": "F-95017",
                                            "serialNumber": "1"
                                        },
                                        {
                                            "fieldResponseId": "2305450",
                                            "fieldName": "S2. Energy Procurement Period ( ) - 2 FY prior to RECs issue being fought",
                                            "inputValue": "12",
                                            "fieldKey": "F-39853",
                                            "serialNumber": "2"
                                        },
                                        {
                                            "fieldResponseId": "2305451",
                                            "fieldName": "S3. Energy Procurement Period ( ) - 1 FY prior to RECs issue being fought",
                                            "inputValue": "12",
                                            "fieldKey": "F-57798",
                                            "serialNumber": "3"
                                        },
                                        {
                                            "fieldResponseId": "2305452",
                                            "fieldName": "S4. Energy Procurement Period ( ) - For the year RECs issue being fought",
                                            "inputValue": "12",
                                            "fieldKey": "F-27993",
                                            "serialNumber": "4"
                                        },
                                        {
                                            "fieldResponseId": "2305453",
                                            "fieldName": "Type : Non-Solar?",
                                            "inputValue": "Yes",
                                            "fieldKey": "F-34605",
                                            "serialNumber": "5"
                                        },
                                        {
                                            "fieldResponseId": "2305454",
                                            "fieldName": "NS1. Energy Procurement Period ( ) - 3 FY prior to RECs issue being fought",
                                            "inputValue": "12",
                                            "fieldKey": "F-67041",
                                            "serialNumber": "6"
                                        },
                                        {
                                            "fieldResponseId": "2305455",
                                            "fieldName": "NS2. Energy Procurement Period ( ) - 2 FY prior to RECs issue being fought",
                                            "inputValue": "12",
                                            "fieldKey": "F-33816",
                                            "serialNumber": "7"
                                        },
                                        {
                                            "fieldResponseId": "2305456",
                                            "fieldName": "NS3. Energy Procurement Period ( ) - 1 FY prior to RECs issue being fought",
                                            "inputValue": "12",
                                            "fieldKey": "F-59104",
                                            "serialNumber": "8"
                                        },
                                        {
                                            "fieldResponseId": "2305457",
                                            "fieldName": "NS4. Energy Procurement Period ( ) - For the year RECs issue being fought",
                                            "inputValue": "12",
                                            "fieldKey": "F-28490",
                                            "serialNumber": "9"
                                        }
                                    ]
                                },
                                {
                                    "fieldName": "(D). Total Quantity of Renewable Energy Including RECs, if any Procured in MWh during the FY",
                                    "inputValue": "",
                                    "fieldResponseId": "2305436",
                                    "fieldKey": "F-32472",
                                    "serialNumber": "4",
                                    "subFields": [
                                        {
                                            "fieldResponseId": "2305437",
                                            "fieldName": "Type : Solar?",
                                            "inputValue": "Yes",
                                            "fieldKey": "F-3829",
                                            "serialNumber": "0"
                                        },
                                        {
                                            "fieldResponseId": "2305438",
                                            "fieldName": "S1. Energy Procurement Period ( ) - 3 FY prior to RECs issue being fought",
                                            "inputValue": "12",
                                            "fieldKey": "F-48711",
                                            "serialNumber": "1"
                                        },
                                        {
                                            "fieldResponseId": "2305439",
                                            "fieldName": "S2. Energy Procurement Period ( ) - 2 FY prior to RECs issue being fought",
                                            "inputValue": "12",
                                            "fieldKey": "F-29910",
                                            "serialNumber": "2"
                                        },
                                        {
                                            "fieldResponseId": "2305440",
                                            "fieldName": "S3. Energy Procurement Period ( ) - 1 FY prior to RECs issue being fought",
                                            "inputValue": "12",
                                            "fieldKey": "F-38977",
                                            "serialNumber": "3"
                                        },
                                        {
                                            "fieldResponseId": "2305441",
                                            "fieldName": "S4. Energy Procurement Period ( ) - For the year RECs issue being fought",
                                            "inputValue": "12",
                                            "fieldKey": "F-59821",
                                            "serialNumber": "4"
                                        },
                                        {
                                            "fieldResponseId": "2305442",
                                            "fieldName": "Type : Non-Solar?",
                                            "inputValue": "Yes",
                                            "fieldKey": "F-1195",
                                            "serialNumber": "5"
                                        },
                                        {
                                            "fieldResponseId": "2305443",
                                            "fieldName": "NS1. Energy Procurement Period ( ) - 3 FY prior to RECs issue being fought",
                                            "inputValue": "12",
                                            "fieldKey": "F-73649",
                                            "serialNumber": "6"
                                        },
                                        {
                                            "fieldResponseId": "2305444",
                                            "fieldName": "NS2. Energy Procurement Period ( ) - 2 FY prior to RECs issue being fought",
                                            "inputValue": "12",
                                            "fieldKey": "F-58211",
                                            "serialNumber": "7"
                                        },
                                        {
                                            "fieldResponseId": "2305445",
                                            "fieldName": "NS3. Energy Procurement Period ( ) - 1 FY prior to RECs issue being fought",
                                            "inputValue": "12",
                                            "fieldKey": "F-20632",
                                            "serialNumber": "8"
                                        },
                                        {
                                            "fieldResponseId": "2305446",
                                            "fieldName": "NS4. Energy Procurement Period ( ) - For the year RECs issue being fought",
                                            "inputValue": "12",
                                            "fieldKey": "F-47663",
                                            "serialNumber": "9"
                                        }
                                    ]
                                },
                                {
                                    "fieldName": "(A). Total Consumption (in MWh)",
                                    "inputValue": "",
                                    "fieldResponseId": "2305458",
                                    "fieldKey": "F-17",
                                    "serialNumber": "1",
                                    "subFields": [
                                        {
                                            "fieldResponseId": "2305459",
                                            "fieldName": "Energy Procurement Period ( ) - 3 FY prior to RECs issue being fought",
                                            "inputValue": "12",
                                            "fieldKey": "F-55794",
                                            "serialNumber": "0"
                                        },
                                        {
                                            "fieldResponseId": "2305460",
                                            "fieldName": "Energy Procurement Period ( ) - 2 FY prior to RECs issue being fought",
                                            "inputValue": "12",
                                            "fieldKey": "F-48548",
                                            "serialNumber": "1"
                                        },
                                        {
                                            "fieldResponseId": "2305461",
                                            "fieldName": "Energy Procurement Period ( ) - 1 FY prior to RECs issue being fought",
                                            "inputValue": "12",
                                            "fieldKey": "F-78695",
                                            "serialNumber": "2"
                                        },
                                        {
                                            "fieldResponseId": "2305462",
                                            "fieldName": "Energy Procurement Period ( ) - For the Year RECs issue being fought",
                                            "inputValue": "12",
                                            "fieldKey": "F-34106",
                                            "serialNumber": "3"
                                        }
                                    ]
                                }
                            ]
                        },
                        {
                            "sectionName": "General Details",
                            "sectionId": "339567",
                            "sectionResponseId": "253652",
                            "sectionKey": "S-1",
                            "serialNumber": "1",
                            "fieldResponses": [
                                {
                                    "fieldName": "Furnish list of Directors/Partners of the Organisation",
                                    "inputValue": "test",
                                    "fieldResponseId": "2305478",
                                    "fieldKey": "F-5",
                                    "serialNumber": "1"
                                },
                                {
                                    "fieldName": "Basic Documents of the Company",
                                    "inputValue": "test",
                                    "fieldResponseId": "2305475",
                                    "fieldKey": "F-11",
                                    "serialNumber": "3"
                                },
                                {
                                    "fieldName": "Nature and Activities of the Applicant",
                                    "inputValue": "SUCHI TEST",
                                    "fieldResponseId": "2305479",
                                    "fieldKey": "F-4",
                                    "serialNumber": "0"
                                },
                                {
                                    "fieldName": "TDS Certificate, if applicable",
                                    "inputValue": "[{\"fileName\":\"Renewable Energy Certificate Registry of INDIA - Injection Form.pdf\",\"type\":\"TDS Certificate\",\"value\":\"SW5287274831-745-#49097-F00929-S-1-F-98282#-1\"}]",
                                    "fieldResponseId": "2305477",
                                    "fieldKey": "F-98282",
                                    "serialNumber": "5"
                                },
                                {
                                    "fieldName": "Enclose Memorandum of Association & Articles of Association of a Company/ Certificate of Incorporation, in case of Pvt. Ltd. Company/Certificate of Incorporation & Certificate of Business Commencement, in case of Public Ltd. Company and other relevant document as applicable in other cases",
                                    "inputValue": "[{\"fileName\":\"Re-Accreditation-Old.pdf\",\"type\":\"Copy of Registration\",\"value\":\"SW5287274831-21-#49097-F00929-S-1-F-7#-1\"}]",
                                    "fieldResponseId": "2305476",
                                    "fieldKey": "F-7",
                                    "serialNumber": "4"
                                },
                                {
                                    "fieldName": "Income Tax PAN Details of the Applicant",
                                    "inputValue": "AACDF2123F",
                                    "fieldResponseId": "2305474",
                                    "fieldKey": "F-6",
                                    "serialNumber": "2"
                                }
                            ]
                        },
                        {
                            "sectionName": "Fee and Charges",
                            "sectionId": "339568",
                            "sectionResponseId": "253653",
                            "sectionKey": "S-5",
                            "serialNumber": "2",
                            "fieldResponses": [
                                {
                                    "fieldName": "Gross Amount Payable",
                                    "inputValue": "5000",
                                    "fieldResponseId": "2305484",
                                    "fieldKey": "F-22",
                                    "serialNumber": "0"
                                },
                                {
                                    "fieldName": "TDS Deduct",
                                    "inputValue": "Yes",
                                    "fieldResponseId": "2305481",
                                    "fieldKey": "F-65086",
                                    "serialNumber": "4"
                                },
                                {
                                    "fieldName": "Total Payable Tax",
                                    "inputValue": "900",
                                    "fieldResponseId": "2305485",
                                    "fieldKey": "F-72128",
                                    "serialNumber": "2"
                                },
                                {
                                    "fieldName": "Total Amount Payable",
                                    "inputValue": "5900",
                                    "fieldResponseId": "2305482",
                                    "fieldKey": "F-72581",
                                    "serialNumber": "3"
                                },
                                {
                                    "fieldName": "GST @ 18.00%",
                                    "inputValue": "Yes",
                                    "fieldResponseId": "2305483",
                                    "fieldKey": "F-48339",
                                    "serialNumber": "1"
                                },
                                {
                                    "fieldName": "TDS Rate(%)",
                                    "inputValue": "2%",
                                    "fieldResponseId": "2305480",
                                    "fieldKey": "F-90061",
                                    "serialNumber": "5"
                                }
                            ]
                        }
                    ]
                },
                {
                    "name": "Application for Registration of RE Generation Project - DISCOM USER",
                    "formId": "F01534",
                    "sections": [
                        {
                            "sectionName": "Registration: Fee and Charges",
                            "sectionId": "339578",
                            "sectionResponseId": "253649",
                            "sectionKey": "S-1",
                            "serialNumber": "0",
                            "fieldResponses": [
                                {
                                    "fieldName": "TDS Deduct",
                                    "inputValue": "Yes",
                                    "fieldResponseId": "2305397",
                                    "fieldKey": "F-2",
                                    "serialNumber": "4"
                                },
                                {
                                    "fieldName": "Total Amount Payable",
                                    "inputValue": "1180",
                                    "fieldResponseId": "2305400",
                                    "fieldKey": "F-87261",
                                    "serialNumber": "3"
                                },
                                {
                                    "fieldName": "Gross Amount Payable",
                                    "inputValue": "1000",
                                    "fieldResponseId": "2305398",
                                    "fieldKey": "F-1",
                                    "serialNumber": "0"
                                },
                                {
                                    "fieldName": "TDS Rate (%)",
                                    "inputValue": "2%",
                                    "fieldResponseId": "2305401",
                                    "fieldKey": "F-24112",
                                    "serialNumber": "5"
                                },
                                {
                                    "fieldName": "Total Payable Tax",
                                    "inputValue": "180",
                                    "fieldResponseId": "2305396",
                                    "fieldKey": "F-2581",
                                    "serialNumber": "2"
                                },
                                {
                                    "fieldName": "GST @ 18%",
                                    "inputValue": "Yes",
                                    "fieldResponseId": "2305399",
                                    "fieldKey": "F-6729",
                                    "serialNumber": "1"
                                }
                            ]
                        },
                        {
                            "sectionName": "Registration: Enclosures",
                            "sectionId": "339579",
                            "sectionResponseId": "253648",
                            "sectionKey": "S-2",
                            "serialNumber": "1",
                            "fieldResponses": [
                                {
                                    "fieldName": "Checklist issued by State Agency along with the Accreditation Certificate",
                                    "inputValue": "[{\"fileName\":\"Dummy.pdf\",\"type\":\"Certification of Accreditation\",\"value\":\"SW5287274831-631-#49097-F01534-S-2-F-24225#-1\"}]",
                                    "fieldResponseId": "2305394",
                                    "fieldKey": "F-24225",
                                    "serialNumber": "1"
                                },
                                {
                                    "fieldName": "Undertaking that it has not entered into any Power Purchase Agreement at preferential tariff as may be determined by the Appropriate Commission",
                                    "inputValue": "[{\"fileName\":\"Renewable Energy Certificate Registry of INDIA - Injection Form.pdf\",\"type\":\"Undertaking/Affidavit\",\"value\":\"SW5287274831-256-#49097-F01534-S-2-F-47492#-1\"}]",
                                    "fieldResponseId": "2305395",
                                    "fieldKey": "F-47492",
                                    "serialNumber": "3"
                                },
                                {
                                    "fieldName": "TDS Certificate",
                                    "inputValue": "[{\"fileName\":\"Lorem_ipsum.pdf\",\"type\":\"TDS Certificate\",\"value\":\"SW5287274831-745-#49097-F01534-S-2-F-67846#-1\"}]",
                                    "fieldResponseId": "2305393",
                                    "fieldKey": "F-67846",
                                    "serialNumber": "4"
                                },
                                {
                                    "fieldName": "Accreditation Certificate given by State Aagency",
                                    "inputValue": "[{\"fileName\":\"Dummy.pdf\",\"type\":\"Certification of Accreditation\",\"value\":\"SW5287274831-631-#49097-F01534-S-2-F-0#-1\"}]",
                                    "fieldResponseId": "2305391",
                                    "fieldKey": "F-0",
                                    "serialNumber": "0"
                                },
                                {
                                    "fieldName": "Commissioning Certificate",
                                    "inputValue": "[{\"fileName\":\"Dummy.pdf\",\"type\":\"Commissioning Certificate\",\"value\":\"SW5287274831-714-#49097-F01534-S-2-F-20694#-1\"}]",
                                    "fieldResponseId": "2305392",
                                    "fieldKey": "F-20694",
                                    "serialNumber": "2"
                                }
                            ]
                        }
                    ]
                }
            ],
            "_class": "com.tcs.nsws.license.DTOModel.TargetLicenseTransaction"
        }
    ]
}';


    $result = json_decode($result1);

    //echo "<pre>";
    //print_r($result);

    $countResponse = count($result->response);

    for ($r = 0; $r < $countResponse; $r++) {

        $apiresponseData = array();
        $apiresponseData['applrequid'] = $result->response[$r]->applReqId;
        $apiresponseData['licenseid'] = $result->response[$r]->licenseId;
        $apiresponseData['licenseversion'] = $result->response[$r]->licenseVersion;
        $apiresponseData['swsId'] = $result->response[$r]->swsId;
        $apiresponseData['investorname'] = $result->response[$r]->investorName;
        $apiresponseData['investorrequestid'] = $result->response[$r]->investorRequestid;
        $apiresponseData['licensereqdate'] = $result->response[$r]->licenseReqDate;
        $apiresponseData['dependentlicenseflag'] = $result->response[$r]->dependentLicenseFlag;
        $apiresponseData['pushdepartmentflag'] = $result->response[$r]->licenseToBePushDepartmentFlag;
        $apiresponseData['ministeryid'] = $result->response[$r]->ministeryId;
        $apiresponseData['departmentid'] = $result->response[$r]->departmentId;
        $apiresponseData['license_state'] = $result->response[$r]->License_state;
        $apiresponseData['orgnllicensereqid'] = $result->response[$r]->Orgnl_LicenseReqID;
        $apiresponseData['paymenttype'] = $result->response[$r]->paymentType;
        $applicationRequestedId = $result->response[$r]->applReqId;

        /*payment details*/

        $jsondataPayment = json_encode(array('licensereqid' => "SW9921613274-M029_D003_A004-1653468458200"));
        $paymentheaderaddress = array('access-id:MIN_TEST_0', 'access-secret:MintesT@1234', 'api-key:Min1@GPD13', 'Content-Type:application/json', 'Accept:application/json');
        $paymentDecode = accreditationApi("POST", $api_url, $jsondataPayment, $api_name = 'nsws_payment/getPaymentDetails', $paymentheaderaddress);

        //echo "<pre>";
        //print_r($paymentDecode);
        //die;

        /*start API read*/
        $totalcount = count($result->response[$r]->forms);

        for ($i = 0; $i < $totalcount; $i++) {
            $sectionsField = $result->response[$r]->forms[$i]->sections;
            $sectionKeyarray = array();

            for ($d = 0; $d < count($sectionsField); $d++) {
                $sectionKey = @$result->response[$r]->forms[$i]->sections[$d]->sectionKey;
                /*application details*/
                if ($sectionKey == 'S-0') {
                    $sectionKeyarray['s0'] = $sectionKey;
                    $applicantDetails = array();
                    $responseCount = count($result->response[$r]->forms[$i]->sections[$d]->fieldResponses);
                    for ($v = 0; $v < $responseCount; $v++) {
                        $fieldKey = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->fieldKey;

                        if ($fieldKey == "F-3") {
                            $subFieldArray =  count($result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields);
                            for ($a = 0; $a <= $subFieldArray; $a++) {
                                $fieldkeys = @$result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields[$a]->fieldKey;
                                $fieldvalue = @$result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields[$a]->inputValue;
                                if ($fieldkeys == 'F-82483') {
                                    $applicantDetails['primary_contact_name'] = $fieldvalue;
                                }
                                if ($fieldkeys == 'F-67419') {
                                    $applicantDetails['owner_designation'] = $fieldvalue;
                                }
                                if ($fieldkeys == 'F-65616') {
                                    $phonenumber = json_decode($fieldvalue, true);
                                    $applicantDetails['phone'] = "'" . $phonenumber['phoneNumber'] . "'";
                                }
                                if ($fieldkeys == 'F-7074') {
                                    $contactMobile = json_decode($fieldvalue, true);
                                    $applicantDetails['mobile'] =  "'" . $contactMobile['phoneNumber'] . "'";
                                }
                                if ($fieldkeys == 'F-1888') {
                                    $applicantDetails['fax'] =  "'" . $fieldvalue . "'";
                                }
                                if ($fieldkeys == 'F-78277') {
                                    $applicantDetails['email'] = "'" . $fieldvalue . "'";
                                }
                                if ($fieldkeys == 'F-1289') {
                                    $applicantDetails['web'] = "'" . $fieldvalue . "'";
                                }
                            }
                        }
                        if ($fieldKey == "F-9") {
                            $applicantDetails['town'] = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->inputValue;
                        }
                        if ($fieldKey == "F-0") {
                            $subEntityArray =  count($result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields);
                            for ($e = 0; $e <= $subEntityArray; $e++) {
                                $fieldkey = @$result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields[$e]->fieldKey;
                                $fieldvalue = @$result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields[$e]->inputValue;
                                if ($fieldkey == 'F-46932') {
                                    $applicantDetails['REgen_Entity_name'] = strtoupper("'" . $fieldvalue . "'");
                                    $projectoNumber = "000";
                                    $applicantDetails['REgen_Project_num'] = "'" . $projectoNumber . "'";
                                }
                            }
                        }
                        if ($fieldKey == "F-2") {
                            $addressArray =  count($result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields);
                            for ($ad = 0; $ad <= $addressArray; $ad++) {
                                $addressFieldKey = @$result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields[$ad]->fieldKey;
                                $addressFieldValue = @$result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields[$ad]->inputValue;
                                if ($addressFieldKey == 'F-69691') {
                                    $applicantDetails['postal_address'] = "'" . $addressFieldValue . "'";
                                }
                                if ($addressFieldKey == 'F-38591') {
                                    $applicantDetails['postal_code'] = "'" . $addressFieldValue . "'";
                                }
                            }
                        }
                        if ($fieldKey == "F-1") {
                            $personalDetailsArray =  count($result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields);
                            for ($pe = 0; $pe <= $addressArray; $pe++) {
                                $personalFieldKey = @$result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields[$pe]->fieldKey;
                                $personalFieldValue = @$result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields[$pe]->inputValue;
                                if ($personalFieldKey == 'F-88824') {
                                    $applicantDetails['owner_name'] = "'" . $personalFieldValue . "'";
                                }
                                if ($personalFieldKey == 'F-28764') {
                                    $applicantDetails['owner_type'] = "'" . $personalFieldValue . "'";
                                }
                            }
                        }

                        if ($fieldKey == "F-13") {
                            $fieldvalues = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->inputValue;
                            $applicantDetails['state'] = "'" . $fieldvalues . "'";
                        }
                        $applicantDetails['created_on'] = "'" . date("Y-m-d h:i:s") . "'";
                    }
                }
                /*application details*/

                $sectionName = @$result->response[$r]->forms[$i]->sections[$d]->sectionName;

                if ($sectionKey == 'S-1' && $sectionName == 'General Details') {
                    $sectionKeyarray['s1'] = $sectionKey;
                    $responseCount = count($result->response[$r]->forms[$i]->sections[$d]->fieldResponses);
                    $generalDetails = array();

                    for ($v = 0; $v < $responseCount; $v++) {

                        $fieldKey = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->fieldKey;
                        $fieldValue = strtoupper($result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->inputValue);

                        if ($fieldKey == "F-5") {
                            $generalDetails['nature1'] = "'" . $fieldValue . "'";
                        }

                        if ($fieldKey == "F-11") {
                            $projectNumber = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->inputValue;
                            $generalDetails['earlier_project_plan'] = $fieldValue;
                        }

                        if ($fieldKey == "F-4") {
                            $projectNumber = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->inputValue;
                            $generalDetails['nature'] = $fieldValue;
                        }
                        if ($fieldKey == "F-6") {
                            $projectNumber = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->inputValue;
                            $generalDetails['pan_details'] = $fieldValue;
                        }
                        $generalDetails['basic_company_document'] = "'" . 'Y' . "'";
                        $generalDetails['created_on'] =  "'" . date("Y-m-d h:i:s") . "'";
                    }

                    echo "<pre>";
                    print_r($generalDetails);
                    //die;		

                    /*login data*/
                    // $userDetails = array();
                    // $userDetails['role_id'] = 3;
                    // if ($entityName) {
                    //     $regenLoginName = '';
                    //     $regenLoginName = $entityName . $projectNumber;
                    //     //$getRegenId = getRegenId($regenLoginName,3,$conn);				
                    //     $userDetails['regen_login_name'] = "'" . $regenLoginName . "'";
                    // }
                    // $password = random_password();
                    // $encod_password = hash("sha256", $password);
                    // $userDetails['regen_login_paswd'] = "'" . $encod_password . "'";
                    // $expiry = mktime(0, 0, 0, date("m"), date("d") + 15, date("Y"));
                    // $expiry_date = date("Y-m-d", $expiry);
                    // $userDetails['created_on'] = "'" . date("Y-m-d h:i:s") . "'";
                    // $userDetails['isactive'] = "'Y'";
                    // $userDetails['status_id'] = 12;
                    // $userDetails['expiry_date'] = "'" . $expiry_date . "'";
                    // $userDetails['first_login'] = "'0'";
                    // $userDetails['password_update'] = 2;
                    /*login data*/
                }



                if ($sectionKey == 'S-2') {
                    $sectionKeyarray['s2'] = $sectionKey;
                    $operatorDetails = array();
                    $responseCount = count($result->response[$r]->forms[$i]->sections[$d]->fieldResponses);
                    for ($v = 0; $v < $responseCount; $v++) {
                        $operatorDet = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->fieldKey;
                        $owner_operator_val = '';

                        if ($operatorDet == 'F-96') {
                            $ownerEntitySame = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->inputValue;
                            if ($ownerEntitySame == 'Yes') {
                                $owner_operator_val = 'Y';
                            } else if ($ownerEntitySame == 'No') {
                                $owner_operator_val = 'N';
                            }
                        }

                        if ($owner_operator_val == 'Y') {
                            $operatorDetails['operator_Entity_name'] = "'" . $entityName . "'";
                            $operatorDetails['operator_Project_num'] = $projectNumber;
                            $operatorDetails['is_same_as_owner'] = "'" . $owner_operator_val . "'";
                            $operatorDetails['operator_name'] = $ownerDetails['owner_name'];
                            $operatorDetails['operator_type'] = $ownerDetails['owner_type'];
                            $operatorDetails['operator_postal_address'] = $ownerDetails['postal_address'];
                            $operatorDetails['operator_town'] = $ownerDetails['town'];
                            $operatorDetails['operator_state'] = $ownerDetails['state'];
                            $operatorDetails['operator_postal_code'] = $ownerDetails['postal_code'];
                            $operatorDetails['operator_primary_contact_name'] = $ownerDetails['primary_contact_name'];
                            $operatorDetails['operator_designation'] = $ownerDetails['owner_designation'];
                            $operatorDetails['operator_phone'] = $ownerDetails['phone'];
                            $operatorDetails['operator_fax'] = $ownerDetails['fax'];
                            $operatorDetails['operator_mobile'] = $ownerDetails['mobile'];
                            $operatorDetails['operator_email'] = $ownerDetails['email'];
                            $operatorDetails['operator_web'] = $ownerDetails['web'];
                            $operatorDetails['operator_appointed_person_name'] = $ownerDetails['appointed_person_name'];
                            $operatorDetails['created_on'] =  "'" . date("Y-m-d h:i:s") . "'";
                        } else {
                            if ($operatorDet == 'F-97') {
                                $projectDetails = count($result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields);
                                for ($p = 0; $p < $projectDetails; $p++) {
                                    $pfieldKey = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields[$p]->fieldKey;
                                    if ($pfieldKey == 'F-4423') {
                                        //$operatorDetails['operator_name'] = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields[$p]->inputValue;								 
                                        $operatorDetails['operator_Entity_name'] = "'" . $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields[$p]->inputValue . "'";
                                    }
                                    if ($pfieldKey == 'F-79445') {
                                        $operatorDetails['operator_Project_num'] =    "'" . $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields[$p]->inputValue . "'";

                                        //$operatorDetails['operator_type'] =	$result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields[$p]->inputValue;
                                    }
                                }
                            }
                            if ($operatorDet == 'F-98') {
                                $operationCount = count($result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields);
                                for ($o = 0; $o < $operationCount; $o++) {
                                    $operatorFieldKey = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields[$o]->fieldKey;

                                    if ($operatorFieldKey == 'F-7425') {
                                        $operator_name = "'" . $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields[$o]->inputValue . "'";
                                    }
                                    if ($operatorFieldKey == 'F-2009') {
                                        @$operator_type = "'" . strtolower($result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields[$o]->inputValue) . "'";
                                        if ($operator_type == 'individual') {
                                            $operator_type = "'indv'";
                                        }
                                    }
                                }
                            }

                            if ($operatorDet == 'F-25') {
                                $postLCount = count($result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields);
                                for ($a = 0; $a < $postLCount; $a++) {
                                    $operatorAddreKey = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields[$a]->fieldKey;
                                    if ($operatorAddreKey == 'F-6224') {
                                        $operator_postal_address = "'" . $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields[$a]->inputValue . "'";
                                    }
                                    if ($operatorAddreKey == 'F-15795') {
                                        $operator_postal_code = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields[$a]->inputValue;
                                    }
                                }
                            }
                            if ($operatorDet == 'F-26') {
                                $operator_town = "'" . $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->inputValue . "'";
                            }
                            if ($operatorDet == 'F-12') {
                                $operatorCount = count($result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields);
                                for ($op = 0; $op < @$postLCount; $op++) {
                                    $operatorKey = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields[$op]->fieldKey;
                                    if ($operatorKey == 'F-12136') {
                                        $operator_primary_contactname = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields[$op]->inputValue;
                                    }
                                    if ($operatorKey == 'F-87012') {
                                        $operator_designation = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields[$op]->inputValue;
                                    }
                                    if ($operatorKey == 'F-63817') {
                                        $operator_phone = "'" . $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields[$op]->inputValue . "'";
                                    }
                                    if ($operatorKey == 'F-5383') {
                                        $operator_mobile = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields[$op]->inputValue;
                                    }
                                    if ($operatorKey == 'F-3853') {
                                        $operator_fax = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields[$op]->inputValue;
                                    }
                                    if ($operatorKey == 'F-96834') {
                                        $operator_email = "'" . $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields[$op]->inputValue . "'";
                                    }
                                    if ($operatorKey == 'F-67277') {
                                        $operator_web = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields[$op]->inputValue;
                                    }
                                    if ($operatorKey == 'F-82523') {
                                        $operator_appointed_person_name = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields[$op]->inputValue;
                                    }
                                }
                            }
                            if ($operatorDet == 'F-27') {
                                $stateCode = "'" . $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->inputValue . "'";
                                $operator_state = getStateId($stateCode, $conn);
                            }

                            $operatorDetails['operator_Entity_name'] = $operatorDetails['operator_Entity_name'];
                            $operatorDetails['operator_Project_num'] = $operatorDetails['operator_Project_num'];
                            $operatorDetails['is_same_as_owner'] = "'" . $owner_operator_val . "'";

                            $operatorDetails['operator_name'] = $operator_name;
                            $operatorDetails['operator_type'] = $operator_type;
                            $operatorDetails['operator_postal_address'] = $operator_postal_address;
                            $operatorDetails['operator_town'] = $operator_town;
                            $operatorDetails['operator_state'] = "'" . $operator_state . "'";
                            $operatorDetails['operator_postal_code'] = "'" . $operator_postal_code . "'";
                            $operatorDetails['operator_primary_contact_name'] = "'" . $operator_primary_contactname . "'";
                            $operatorDetails['operator_designation'] = "'" . $operator_designation . "'";
                            $operatorDetails['operator_phone'] = "'" . $operator_phone . "'";
                            $operatorDetails['operator_fax'] = "'" . $operator_fax . "'";
                            $operatorDetails['operator_mobile'] = "'" . $operator_mobile . "'";
                            $operatorDetails['operator_email'] = "'" . $operator_email . "'";
                            $operatorDetails['operator_web'] = "'" . $operator_web . "'";
                            $operatorDetails['operator_appointed_person_name'] = "'" . $operator_appointed_person_name . "'";
                            $operatorDetails['created_on'] =  "'" . date("Y-m-d h:i:s") . "'";
                        }
                    }
                }

                //echo '<pre>';
                //print_r($operatorDetails);
                //die;

                if ($sectionKey == 'S-3') {
                    $stationDetails = array();
                    $unitList = array();
                    $unitDetails = [];
                    $responseCount = count($result->response[$r]->forms[$i]->sections[$d]->fieldResponses);
                    $sectionKeyarray['s3'] = $sectionKey;

                    for ($v = 0; $v < $responseCount; $v++) {
                        $stationfieldKey = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->fieldKey;
                        if ($stationfieldKey == 'F-28') {
                            $station_name = "'" . $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->inputValue . "'";
                        }
                        if ($stationfieldKey == 'F-29') {
                            $station_postal_address = "'" . $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->inputValue . "'";
                        }
                        if ($stationfieldKey == 'F-30') {
                            $station_town = "'" . $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->inputValue . "'";
                        }
                        if ($stationfieldKey == 'F-31') {
                            $station_state = "'" . $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->inputValue . "'";
                        }
                        if ($stationfieldKey == 'F-33') {
                            $station_postal_code = "'" . $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->inputValue . "'";
                        }
                        if ($stationfieldKey == 'F-51344') {
                            $station_latitude = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->inputValue;
                        }
                        if ($stationfieldKey == 'F-34') {
                            $station_longitude = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->inputValue;
                        }
                        if ($stationfieldKey == 'F-28386') {
                            $catofland = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->inputValue;
                            if ($catofland == 'Govt Land') {
                                $catof_land = 1;
                            } else {
                                $catof_land = 2;
                            }
                        }
                        if ($stationfieldKey == 'F-21296') {
                            $stationLandPosition = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->inputValue;
                            if ($stationLandPosition == 'Leased') {
                                $stationLand_Position = 1;
                            } else if ($stationLandPosition == 'Owned') {
                                $stationLand_Position = 2;
                            }
                        }
                        if ($stationfieldKey == 'F-40') {
                            $total_installed_capacity = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->inputValue;
                        }
                        if ($stationfieldKey == 'F-41') {
                            $total_installed_acc_capacity = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->inputValue;
                        }
                        if ($stationfieldKey == 'F-81781') {
                            $total_no_ofCapacity = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->inputValue;
                        }
                        if ($stationfieldKey == 'F-37') {
                            $energysource = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->inputValue;
                            if ($energysource == 'Solar') {
                                $energy_source = 1;
                            } else {
                                $energy_source = 2;
                            }
                        }
                        /*remaining point Which Renewable Energy Resources is/are utilised by the RE Generating Station */
                        if ($stationfieldKey == 'F-42') {
                            $noumberofsought = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->inputValue;
                        }
                        if ($stationfieldKey == 'F-32') {
                            $fossilefule = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->inputValue;
                        }
                        if ($stationfieldKey == 'F-99046') {
                            $typeroute = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->inputValue;
                            if ($typeroute == 'APPC_OA') {
                                if ($stationfieldKey == 'F-67036') {
                                    $capacity_in_appc = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->inputValue;
                                }
                                if ($stationfieldKey == 'F-16367') {
                                    $capacity_in_oa =  $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->inputValue;
                                }
                            }
                        }
                        if ($stationfieldKey == 'F-52073') {
                            $selfconsumption = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->inputValue;
                        }
                        if ($stationfieldKey == 'F-59388') {
                            $selfconsumption_utilisation = "'" . $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->inputValue . "'";
                        }
                        if ($stationfieldKey == 'F-43') {
                            $selfconsumption_utilisation = "'" . $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->inputValue . "'";
                        }
                        if ($stationfieldKey == 'F-35') {
                            $connectivityDigram = "'" . $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->inputValue . "'";
                        }
                        if ($stationfieldKey == 'F-45') {
                            $propossedGross = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->inputValue;
                        }
                        if ($stationfieldKey == 'F-87607') {
                            $pollingName = "'" . $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->inputValue . "'";
                        }

                        if ($stationfieldKey == 'F-80') {
                            $unitCount = count($result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields);
                            for ($u = 0; $u < $unitCount; $u++) {
                                $unitKey = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields[$u]->fieldKey;
                                if ($unitKey == 'F-660') {
                                    $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields[$u]->inputValue;
                                    $unitList['unit'] = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields[$u]->inputValue;
                                }
                                if ($unitKey == 'F-10816') {
                                    $unitList['capacity'] = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields[$u]->inputValue;
                                }
                                if ($unitKey == 'F-3872') {
                                    $dateofCommission = json_decode($result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields[$u]->inputValue, true);
                                    $unitList['date_of_commissioning'] = "'" . str_replace('/', '-', $dateofCommission['date']) . "'";
                                    $unitList['date_of_commissioning_new'] = "'" . str_replace('/', '-', $dateofCommission['date']) . "'";
                                }
                                if ($unitKey == 'F-71356') {
                                    $date_ofCommercial = json_decode($result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$v]->subFields[$u]->inputValue, true);
                                    $unitList['date_of_commercial_operation'] = "'" . str_replace('/', '-', $date_ofCommercial['date']) . "'";
                                }
                            }
                            $unitList['created_on'] = "'" . date("Y-m-d h:i:s") . "'";
                            $unitList['modified_on'] = "'" . date("Y-m-d h:i:s") . "'";
                            $unitDetails[] = $unitList;
                        }
                    }

                    $stationDetails['station_name'] = $station_name;
                    $stationDetails['station_postal_address'] = $station_postal_address;
                    $stationDetails['station_town'] = $station_town;
                    //$stationDetails['station_state'] =$station_state;
                    $stationDetails['station_state'] = 2;
                    $stationDetails['station_postal_code'] = $station_postal_code;
                    $stationDetails['station_latitude'] = $station_latitude;
                    $stationDetails['station_longitude'] = $station_longitude;
                    $stationDetails['station_land_category'] = $catof_land;
                    $stationDetails['station_land_possession'] = $stationLand_Position;
                    $stationDetails['total_installed_capacity'] = $total_installed_capacity;
                    $stationDetails['total_installed_accre_capacity'] = $total_installed_acc_capacity;
                    $stationDetails['total_numberof_units'] = $total_no_ofCapacity;
                    $stationDetails['energy_source'] = $energy_source;
                    $stationDetails['units_for_accreditation'] = $noumberofsought;
                    $stationDetails['planned_usageof_fossil'] = "'" . $fossilefule . "'";

                    $stationDetails['appc_cgp_oa'] = "'" . $typeroute . "'";
                    $stationDetails['capacity_in_appc'] = "'" . $capacity_in_appc . "'";
                    $stationDetails['capacity_in_oa'] = "'" . $capacity_in_oa . "'";

                    $stationDetails['self_consumption_energy_generated'] = "'" . $selfconsumption . "'";
                    $stationDetails['self_consumption_utilized_capacity'] = $selfconsumption_utilisation;
                    $stationDetails['connectivity_diagram'] = $connectivityDigram;
                    $stationDetails['gross_units'] = $propossedGross;
                    $stationDetails['station_pool_name'] = $pollingName;
                    $stationDetails['modified_on'] = "'" . date("Y-m-d h:i:s") . "'";
                }

                if ($sectionKey == 'S-4') {
                    $sectionKeyarray['s4'] = $sectionKey;
                    $connectivityDetails = array();
                    $networkMetering = [];
                    $newnetworkMetering = [];
                    $connectivityCount = count($result->response[$r]->forms[$i]->sections[$d]->fieldResponses);

                    for ($c = 0; $c < $connectivityCount; $c++) {
                        $sectionKeyfield = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$c]->fieldKey;
                        if ($sectionKeyfield == 'F-14') {
                            $licencePhone = "'" . $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$c]->inputValue . "'";
                        }
                        if ($sectionKeyfield == 'F-46') {
                            $concernedName = "'" . $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$c]->inputValue . "'";
                        }
                        if ($sectionKeyfield == 'F-48') {
                            $stateCode = "'" . $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$c]->inputValue . "'";
                            $concernedState  = getStateId($stateCode, $conn);
                        }
                        if ($sectionKeyfield == 'F-13') {
                            $concerneAddress =  "'" . $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$c]->inputValue . "'";
                        }
                        if ($sectionKeyfield == 'F-100') {
                            $concernePostalCode = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$c]->inputValue;
                        }
                        if ($sectionKeyfield == 'F-50') {
                            $concerneEmailid = "'" . $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$c]->inputValue . "'";
                        }
                        if ($sectionKeyfield == 'F-15') {
                            $concerneFax = "'" . $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$c]->inputValue . "'";
                        }
                        if ($sectionKeyfield == 'F-102') {
                            $concerneSubField = count($result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$c]->subFields);
                            for ($t = 0; $t < $concerneSubField; $t++) {
                                $fieldk = $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$c]->subFields[$t]->fieldKey;
                                if ($fieldk == 'F-38029') {
                                    $networkMetering['network_line_from'] = "'" . $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$c]->subFields[$t]->inputValue . "'";
                                }
                                if ($fieldk == 'F-14061') {
                                    $networkMetering['network_line_to'] = "'" . $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$c]->subFields[$t]->inputValue . "'";
                                }
                                if ($fieldk == 'F-16499') {
                                    $networkMetering['network_voltage_level'] = "'" . $result->response[$r]->forms[$i]->sections[$d]->fieldResponses[$c]->subFields[$t]->inputValue . "'";
                                }
                                //$networkMetering['modifiedon'] = "'".date("Y-m-d h:i:s")."'";						
                            }
                            $networkMetering['modifiedon'] = "'" . date("Y-m-d h:i:s") . "'";
                            $newnetworkMetering[] = $networkMetering;
                        }
                    }
                    $connectivityDetails['name_concerned_licensee'] = @$concernedName;
                    $connectivityDetails['address_licensee'] = @$concerneAddress;
                    $connectivityDetails['state_licensee'] = @$concernedState;
                    $connectivityDetails['postal_code_licensee'] = @$concernePostalCode;
                    $connectivityDetails['licensee_mail'] = @$concerneEmailid;
                    $connectivityDetails['licensee_phone'] = @$licencePhone;
                    $connectivityDetails['licensee_fax'] = @$concerneFax;
                    $connectivityDetails['modified_on'] = "'" . date("Y-m-d h:i:s") . "'";
                }

                if ($sectionKey == 'S-9') {
                    $sectionKeyarray['s9'] = $sectionKey;
                    $encloserDetails = array();
                    $encloserCount = count($result->response[$r]->forms[$i]->sections[$d]->fieldResponses);

                    for ($e = 0; $e < $encloserCount; $e++) {

                        $encloserJsondeCode = json_decode($result->response[0]->forms[$i]->sections[$d]->fieldResponses[$e]->inputValue);

                        $encloser = explode(".", $result->response[0]->forms[$i]->sections[$d]->fieldResponses[$e]->fieldName);
                        $encloserDetails[] = $encloser[0];

                        $filename = $encloserJsondeCode[0]->fileName;
                        $fileType = $encloserJsondeCode[0]->type;
                        $fileValue = $encloserJsondeCode[0]->value;

                        /*PDF Details*/

                        $jsondataPdf = json_encode(array('contentId' => ["$fileValue"]));
                        $pdfheaderaddress = array('access-id:MIN_TEST_0', 'access-secret:MintesT@1234', 'api-key:Min1@GD03', 'Content-Type:application/json', 'Accept:application/json');
                        $pdfResult = accreditationApi("POST", $api_url, $jsondataPdf, $api_name = 'nsws_document/getDocument', $pdfheaderaddress);
                        $pdfContent =  base64_decode(str_replace('', '+', $pdfResult->response[0]->fileResponse), true);
                        $pdf = @fopen('pdf/' . $filename, 'w');
                        @fwrite($pdf, $pdfContent);
                        //close output file
                        @fclose($pdf);
                    }
                }
                //echo "<pre>";
                //print_r($encloserDetails1);			
            }



            /*save start*/
            if ($regenLoginName) {
                $getRegenId = getRegenId($regenLoginName, 3, $conn);
            }

            /*check	accredition*/
            $getAccrRegenId = getAccredition($getRegenId, $conn);

            //if(empty($getAccrRegenId)){

            if ($sectionKeyarray['s1'] == 'S-1') {
                //$table ="regen_owner_details";
                if ($getRegenId) {
                    updateRecord($table, $ownerDetails, $getRegenId, $conn);
                } else {
                    //$lasinserteddata = insertData($table,$ownerDetails,$conn);
                }

                if (!empty($lasinserteddata)) {
                    $regenId['regen_id'] = $lasinserteddata;
                    $userDetails = array_merge(array_slice($userDetails, 0, 0), $regenId, array_slice($userDetails, 0));
                    $table = "re_generator_login";
                    insertData($table, $userDetails, $conn);
                    $useremail = "'" . $ownerDetails['email'] . "'";

                    $to_message .= "Dear Sir/Madam, <br/><br/>Your account has been created successfully. <br/> Please login and fill up the application for accreditation within 15 days otherwise your account will expire. <br/><br/>Your login credentials are as follow: <br/><br/>User Name : $regenLoginName <br/><br/>";
                    $to_message .= "For reset your password, please click <a href='https://www.recregistryindia.nic.in/index.php/publics/ResetPassword/" . md5($lasinserteddata) . "/" . md5($regenLoginName) . "'>here</a>.<br />";
                    $to_message .= "<br/><br/><br/><br/>Thank You.<br/><br/>REC Registry India.";
                    $to_message .= "\r\n\r\n\r\n\r\n <b>* This is an auto-generated mail from POSOCO system. Please do not reply to this email, kindly write or reply to nldc.rec@posoco.in only. *</b>";
                    $to_subject = "Your Login Credentials For REC Registry";
                    //$from : 'noreply-nldc-rec@nic.in';
                    $headers = "From: noreply-nldc-rec@nic.in" . "\r\n";
                    mail($useremail, $to_subject, $msg, $headers);
                }
            }

            if ($sectionKeyarray['s2'] == "S-2") {
                //$table ="regen_operator_details";
                $numrows = findRegenId($table, $getRegenId, $conn);
                if ($numrows > 0) {
                    updateRecord($table, $operatorDetails, $getRegenId, $conn);
                } else {
                    if ($getRegenId) {
                        $regenId['regen_id'] = $getRegenId;
                    } else {
                        $regenId['regen_id'] = $lasinserteddata;
                    }
                    $operatorDetails = array_merge(array_slice($operatorDetails, 0, 0), $regenId, array_slice($operatorDetails, 0));
                    //insertData($table,$operatorDetails,$conn);
                }
            }

            if ($sectionKeyarray['s3'] == 'S-3') {
                //$table ="regen_station_details";
                $numrows = findRegenId($table, $getRegenId, $conn);
                if ($numrows > 0) {
                    updateRecord($table, $stationDetails, $getRegenId, $conn);
                } else {
                    if ($getRegenId) {
                        $regenId['regen_id'] = $getRegenId;
                    } else {
                        $regenId['regen_id'] = @$lasinserteddata;
                    }
                    $stationDetails = array_merge(array_slice($stationDetails, 0, 0), $regenId, array_slice($stationDetails, 0));
                    insertData($table, $stationDetails, $conn);
                }
                /*unit detils*/
                //$table ="regen_units";
                $numrowsunit = findRegenId($table, $getRegenId, $conn);
                if ($numrowsunit > 0) {
                    deleteRecord($table, $getRegenId, $conn);
                    for ($i = 0; $i < count($unitDetails); $i++) {
                        $regenId['regen_id'] = $getRegenId;
                        $unitDetails[$i] = array_merge(array_slice($unitDetails[$i], 0, 0), $regenId, array_slice($unitDetails[$i], 0));
                        insertData($table, $unitDetails[$i], $conn);
                    }
                } else {
                    if ($getRegenId) {
                        $regenId['regen_id'] = $getRegenId;
                    } else {
                        $regenId['regen_id'] = $lasinserteddata;
                    }
                    for ($i = 0; $i < count($unitDetails); $i++) {
                        $unitDetails[$i] = array_merge(array_slice($unitDetails[$i], 0, 0), $regenId, array_slice($unitDetails[$i], 0));
                        //insertData($table,$unitDetails[$i],$conn);
                    }
                }
                /*unit detils*/
            }

            if ($sectionKeyarray['s4'] == 'S-4') {
                $table = "regen_licensee";
                $numrows = findRegenId($table, $getRegenId, $conn);
                if ($numrows > 0) {
                    updateRecord($table, $connectivityDetails, $getRegenId, $conn);
                } else {
                    if ($getRegenId) {
                        $regenId['regen_id'] = $getRegenId;
                    } else {
                        $regenId['regen_id'] = $lasinserteddata;
                    }
                    $connectivityDetails['regen_id'] = $regenId['regen_id'];
                    //$connectivityDetails = array_merge(array_slice($connectivityDetails, 0, 0), $regenId, array_slice($connectivityDetails,0));
                    //insertData($table,$connectivityDetails,$conn);						
                }

                /*network detils*/
                //$table ="regen_network";
                $numrowsnetwork = findRegenId($table, $getRegenId, $conn);
                if ($numrowsnetwork > 0) {
                    deleteRecord($table, $getRegenId, $conn);
                    $regenId['regen_id'] = $getRegenId;
                    for ($i = 0; $i < count($newnetworkMetering); $i++) {
                        $newnetworkMetering[$i] = array_merge(array_slice($newnetworkMetering[$i], 0, 0), $regenId, array_slice($newnetworkMetering[$i], 0));
                        insertData($table, $newnetworkMetering[$i], $conn);
                    }
                } else {
                    if ($getRegenId) {
                        $regenId['regen_id'] = $getRegenId;
                    } else {
                        $regenId['regen_id'] = $lasinserteddata;
                    }
                    for ($i = 0; $i < count($newnetworkMetering); $i++) {
                        $newnetworkMetering[$i] = array_merge(array_slice($newnetworkMetering[$i], 0, 0), $regenId, array_slice($newnetworkMetering[$i], 0));
                        //insertData($table,$newnetworkMetering[$i],$conn);
                    }
                }
                /*network detils*/
            }

            if ($sectionKeyarray['s5'] == 'S-5') {
                $table = "regen_metering_details";
                $numrows = findRegenId($table, $getRegenId, $conn);
                if ($numrows > 0) {
                    updateRecord($table, $meteringDetails, $getRegenId, $conn);
                } else {
                    if ($getRegenId) {
                        $regenId['regen_id'] = $getRegenId;
                    } else {
                        $regenId['regen_id'] = $lasinserteddata;
                    }
                    $meteringDetails['regen_id'] = $regenId['regen_id'];
                    //insertData($table,$meteringDetails,$conn);
                }
            }

            if ($sectionKeyarray['s6'] == 'S-6') {
                $table = "regen_clearances";
                $numrows = findRegenId($table, $getRegenId, $conn);
                if ($numrows > 0) {
                    updateRecord($table, $clearanceDetails, $getRegenId, $conn);
                } else {
                    if ($getRegenId) {
                        $regenId['regen_id'] = $getRegenId;
                    } else {
                        $regenId['regen_id'] = $lasinserteddata;
                    }
                    $clearanceDetails['regen_id'] = $regenId['regen_id'];
                    //insertData($table,$clearanceDetails,$conn);
                }
            }


            /*Save accredition*/
            $indemnification = json_decode($declarationDetails['indemnification_val1'], true);
            $accredationApplydate = str_replace('/', '-', $indemnification['date']);
            $declarationPlace = $declarationDetails['indemnification_val2'];
            if (!empty($paymentInsertedId)) {
                $date = date("Y-m-d h:i:s");
                $sql = "INSERT INTO regen_accreditation (regen_id,declaration_period_from,declaration_place,agree_declaration,status,revoke_accrd_date,created_on,is_accr_init_doc,is_accr_final_doc) VALUES ($getId,'" . $accredationApplydate . "','" . $declarationPlace . "','Y','1','N','" . $date . "','N','N')";
                $exec = mysqli_query($conn, $sql);
            }
            /*Save accredition*/
            /*save end*/


            //}
            /*accreditation close*/
        }

        //echo "<pre>";
        //print_r($operatorDetails);

    }
}




function accreditationApi($method, $api_url, $jsondata, $api_name, $headeraddress)
{

    //print_r($jsondata);
    //echo "<br>";
    //print_r($headeraddress);	
    //die;
    //Set the CURLOPT_RETURNTRANSFER option to true
    $url = $api_url . $api_name;
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    switch ($method) {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);
            if ($jsondata)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $jsondata);
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
            if ($jsondata)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $jsondata);
            break;
        default:
            if ($jsondata)
                $url = sprintf("%s?%s", $url, http_build_query($data));
    }
    // OPTIONS:
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headeraddress);
    /*
		if ($api_name == "getLicensesList") {			
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headeraddress);
        }

	   if ($api_name == "getPaymentDetails") {			
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headeraddress);
        }
		*/
    $response = curl_exec($curl);
    if (!$response) {
        die("Connection Failure");
    }
    curl_close($curl);
    return json_decode($response);
}






function insertData($tablename, $arrayess, $conn)
{
    $keyarray = array();
    $valuearray = array();
    foreach ($arrayess as $key => $value) {
        array_push($keyarray, $key);
        array_push($valuearray, $value);
    }
    $keyarray = implode(',', $keyarray);
    $valuearray = implode(',', $valuearray);
    echo $sql = "INSERT INTO " . $tablename . " ($keyarray) VALUES ($valuearray)";
    $exec = mysqli_query($conn, $sql);
    $returnid =  mysqli_insert_id($conn);
    return $returnid;
    //die;				
}


function getRegenId($entityName, $roleid, $conn)
{
    //echo "SELECT regen_id FROM re_generator_login WHERE regen_login_name='".$entityName."' AND role_id='".$roleid."'";
    //die;		
    $sql = mysqli_query($conn, "SELECT regen_id FROM re_generator_login WHERE regen_login_name='" . $entityName . "' AND role_id='" . $roleid . "'");
    $fetchData = mysqli_fetch_assoc($sql);
    return $fetchData['regen_id'];
}

function findRegenId($tableName, $regenId, $conn)
{
    //echo "SELECT regen_id FROM $tableName WHERE regen_id='".$regenId."'";

    $sql = mysqli_query($conn, "SELECT regen_id FROM $tableName WHERE regen_id='" . $regenId . "'");
    $fetchData = mysqli_num_rows($sql);
    return $fetchData;
}

function updateRecord($tableName, $data, $updatedid, $conn)
{
    $valueSets = array();
    foreach ($data as $key => $items) {
        $valueSets[] = $key . " = $items ";
    }
    $updateQuery = mysqli_query($conn, "UPDATE " . $tableName . " SET " . join(",", $valueSets) . " WHERE regen_id = $updatedid");
    return $updateQuery;
}

function deleteRecord($tableName, $regenId, $conn)
{
    $sql = mysqli_query($conn, "delete FROM $tableName WHERE regen_id='" . $regenId . "'");
    return $sql;
}

function random_password()
{
    $password_length = 8;
    //srand($this->make_seed());
    $alfa = "123456789$@*abcdefghijklmnopqrstuvwxyz";
    $token = "";
    for ($i = 0; $i < $password_length; $i++) {
        $token .= @$alfa[rand(0, strlen($alfa))];
    }
    return $token;
}


function getStateId($stateCode, $conn)
{
    $sql = mysqli_query($conn, "SELECT state_id FROM mast_state WHERE state_code=$stateCode");
    $fetchData = mysqli_fetch_assoc($sql);
    return $fetchData['state_id'];
}

function getAccredition($regenId, $conn)
{
    $sql = mysqli_query($conn, "SELECT regen_id FROM regen_accreditation WHERE regen_id=$regenId");
    $fetchData = @mysqli_fetch_assoc($sql);
    return $fetchData['regen_id'];
}
	
		/*
	$expiry = mktime(0, 0, 0, date("m"), date("d") + 15, date("Y"));
    $expiry_date = date("Y-m-d", $expiry);		
	$encod_password = hash("sha256", $password);

	function make_seed() {
        list($usec, $sec) = explode(' ', microtime());
        return (float) $sec + ((float) $usec * 100000);
    }
	*/