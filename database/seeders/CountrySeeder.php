<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $deneme = [

            [
                "id" => 1,
                "name" => "Afghanistan",
                "country_code" => "AF",
                "phone_code" => "93"
            ],
            [
                "id" => 2,
                "name" => "Albania",
                "country_code" => "AL",
                "phone_code" => "355"
            ],
            [
                "id" => 3,
                "name" => "Algeria",
                "country_code" => "DZ",
                "phone_code" => "213"
            ],
            [
                "id" => 4,
                "name" => "American Samoa",
                "country_code" => "AS",
                "phone_code" => "1684"
            ],
            [
                "id" => 5,
                "name" => "Andorra",
                "country_code" => "AD",
                "phone_code" => "376"
            ],
            [
                "id" => 6,
                "name" => "Angola",
                "country_code" => "AO",
                "phone_code" => "244"
            ],
            [
                "id" => 7,
                "name" => "Anguilla",
                "country_code" => "AI",
                "phone_code" => "1264"
            ],
            [
                "id" => 8,
                "name" => "Antarctica",
                "country_code" => "AQ",
                "phone_code" => "0"
            ],
            [
                "id" => 9,
                "name" => "Antigua And Barbuda",
                "country_code" => "AG",
                "phone_code" => "1268"
            ],
            [
                "id" => 10,
                "name" => "Argentina",
                "country_code" => "AR",
                "phone_code" => "54"
            ],
            [
                "id" => 11,
                "name" => "Armenia",
                "country_code" => "AM",
                "phone_code" => "374"
            ],
            [
                "id" => 12,
                "name" => "Aruba",
                "country_code" => "AW",
                "phone_code" => "297"
            ],
            [
                "id" => 13,
                "name" => "Australia",
                "country_code" => "AU",
                "phone_code" => "61"
            ],
            [
                "id" => 14,
                "name" => "Austria",
                "country_code" => "AT",
                "phone_code" => "43"
            ],
            [
                "id" => 15,
                "name" => "Azerbaijan",
                "country_code" => "AZ",
                "phone_code" => "994"
            ],
            [
                "id" => 16,
                "name" => "Bahamas The",
                "country_code" => "BS",
                "phone_code" => "1242"
            ],
            [
                "id" => 17,
                "name" => "Bahrain",
                "country_code" => "BH",
                "phone_code" => "973"
            ],
            [
                "id" => 18,
                "name" => "Bangladesh",
                "country_code" => "BD",
                "phone_code" => "880"
            ],
            [
                "id" => 19,
                "name" => "Barbados",
                "country_code" => "BB",
                "phone_code" => "1246"
            ],
            [
                "id" => 20,
                "name" => "Belarus",
                "country_code" => "BY",
                "phone_code" => "375"
            ],
            [
                "id" => 21,
                "name" => "Belgium",
                "country_code" => "BE",
                "phone_code" => "32"
            ],
            [
                "id" => 22,
                "name" => "Belize",
                "country_code" => "BZ",
                "phone_code" => "501"
            ],
            [
                "id" => 23,
                "name" => "Benin",
                "country_code" => "BJ",
                "phone_code" => "229"
            ],
            [
                "id" => 24,
                "name" => "Bermuda",
                "country_code" => "BM",
                "phone_code" => "1441"
            ],
            [
                "id" => 25,
                "name" => "Bhutan",
                "country_code" => "BT",
                "phone_code" => "975"
            ],
            [
                "id" => 26,
                "name" => "Bolivia",
                "country_code" => "BO",
                "phone_code" => "591"
            ],
            [
                "id" => 27,
                "name" => "Bosnia and Herzegovina",
                "country_code" => "BA",
                "phone_code" => "387"
            ],
            [
                "id" => 28,
                "name" => "Botswana",
                "country_code" => "BW",
                "phone_code" => "267"
            ],
            [
                "id" => 29,
                "name" => "Bouvet Island",
                "country_code" => "BV",
                "phone_code" => "0"
            ],
            [
                "id" => 30,
                "name" => "Brazil",
                "country_code" => "BR",
                "phone_code" => "55"
            ],
            [
                "id" => 31,
                "name" => "British Indian Ocean Territory",
                "country_code" => "IO",
                "phone_code" => "246"
            ],
            [
                "id" => 32,
                "name" => "Brunei",
                "country_code" => "BN",
                "phone_code" => "673"
            ],
            [
                "id" => 33,
                "name" => "Bulgaria",
                "country_code" => "BG",
                "phone_code" => "359"
            ],
            [
                "id" => 34,
                "name" => "Burkina Faso",
                "country_code" => "BF",
                "phone_code" => "226"
            ],
            [
                "id" => 35,
                "name" => "Burundi",
                "country_code" => "BI",
                "phone_code" => "257"
            ],
            [
                "id" => 36,
                "name" => "Cambodia",
                "country_code" => "KH",
                "phone_code" => "855"
            ],
            [
                "id" => 37,
                "name" => "Cameroon",
                "country_code" => "CM",
                "phone_code" => "237"
            ],
            [
                "id" => 38,
                "name" => "Canada",
                "country_code" => "CA",
                "phone_code" => "1"
            ],
            [
                "id" => 39,
                "name" => "Cape Verde",
                "country_code" => "CV",
                "phone_code" => "238"
            ],
            [
                "id" => 40,
                "name" => "Cayman Islands",
                "country_code" => "KY",
                "phone_code" => "1345"
            ],
            [
                "id" => 41,
                "name" => "Central African Republic",
                "country_code" => "CF",
                "phone_code" => "236"
            ],
            [
                "id" => 42,
                "name" => "Chad",
                "country_code" => "TD",
                "phone_code" => "235"
            ],
            [
                "id" => 43,
                "name" => "Chile",
                "country_code" => "CL",
                "phone_code" => "56"
            ],
            [
                "id" => 44,
                "name" => "China",
                "country_code" => "CN",
                "phone_code" => "86"
            ],
            [
                "id" => 45,
                "name" => "Christmas Island",
                "country_code" => "CX",
                "phone_code" => "61"
            ],
            [
                "id" => 46,
                "name" => "Cocos (Keeling) Islands",
                "country_code" => "CC",
                "phone_code" => "672"
            ],
            [
                "id" => 47,
                "name" => "Colombia",
                "country_code" => "CO",
                "phone_code" => "57"
            ],
            [
                "id" => 48,
                "name" => "Comoros",
                "country_code" => "KM",
                "phone_code" => "269"
            ],
            [
                "id" => 49,
                "name" => "Republic Of The Congo",
                "country_code" => "CG",
                "phone_code" => "242"
            ],
            [
                "id" => 50,
                "name" => "Democratic Republic Of The Congo",
                "country_code" => "CD",
                "phone_code" => "242"
            ],
            [
                "id" => 51,
                "name" => "Cook Islands",
                "country_code" => "CK",
                "phone_code" => "682"
            ],
            [
                "id" => 52,
                "name" => "Costa Rica",
                "country_code" => "CR",
                "phone_code" => "506"
            ],
            [
                "id" => 53,
                "name" => "Cote D'Ivoire (Ivory Coast)",
                "country_code" => "CI",
                "phone_code" => "225"
            ],
            [
                "id" => 54,
                "name" => "Croatia (Hrvatska)",
                "country_code" => "HR",
                "phone_code" => "385"
            ],
            [
                "id" => 55,
                "name" => "Cuba",
                "country_code" => "CU",
                "phone_code" => "53"
            ],
            [
                "id" => 56,
                "name" => "Cyprus",
                "country_code" => "CY",
                "phone_code" => "357"
            ],
            [
                "id" => 57,
                "name" => "Czech Republic",
                "country_code" => "CZ",
                "phone_code" => "420"
            ],
            [
                "id" => 58,
                "name" => "Denmark",
                "country_code" => "DK",
                "phone_code" => "45"
            ],
            [
                "id" => 59,
                "name" => "Djibouti",
                "country_code" => "DJ",
                "phone_code" => "253"
            ],
            [
                "id" => 60,
                "name" => "Dominica",
                "country_code" => "DM",
                "phone_code" => "1767"
            ],
            [
                "id" => 61,
                "name" => "Dominican Republic",
                "country_code" => "DO",
                "phone_code" => "1809"
            ],
            [
                "id" => 62,
                "name" => "East Timor",
                "country_code" => "TP",
                "phone_code" => "670"
            ],
            [
                "id" => 63,
                "name" => "Ecuador",
                "country_code" => "EC",
                "phone_code" => "593"
            ],
            [
                "id" => 64,
                "name" => "Egypt",
                "country_code" => "EG",
                "phone_code" => "20"
            ],
            [
                "id" => 65,
                "name" => "El Salvador",
                "country_code" => "SV",
                "phone_code" => "503"
            ],
            [
                "id" => 66,
                "name" => "Equatorial Guinea",
                "country_code" => "GQ",
                "phone_code" => "240"
            ],
            [
                "id" => 67,
                "name" => "Eritrea",
                "country_code" => "ER",
                "phone_code" => "291"
            ],
            [
                "id" => 68,
                "name" => "Estonia",
                "country_code" => "EE",
                "phone_code" => "372"
            ],
            [
                "id" => 69,
                "name" => "Ethiopia",
                "country_code" => "ET",
                "phone_code" => "251"
            ],
            [
                "id" => 70,
                "name" => "External Territories of Australia",
                "country_code" => "XA",
                "phone_code" => "61"
            ],
            [
                "id" => 71,
                "name" => "Falkland Islands",
                "country_code" => "FK",
                "phone_code" => "500"
            ],
            [
                "id" => 72,
                "name" => "Faroe Islands",
                "country_code" => "FO",
                "phone_code" => "298"
            ],
            [
                "id" => 73,
                "name" => "Fiji Islands",
                "country_code" => "FJ",
                "phone_code" => "679"
            ],
            [
                "id" => 74,
                "name" => "Finland",
                "country_code" => "FI",
                "phone_code" => "358"
            ],
            [
                "id" => 75,
                "name" => "France",
                "country_code" => "FR",
                "phone_code" => "33"
            ],
            [
                "id" => 76,
                "name" => "French Guiana",
                "country_code" => "GF",
                "phone_code" => "594"
            ],
            [
                "id" => 77,
                "name" => "French Polynesia",
                "country_code" => "PF",
                "phone_code" => "689"
            ],
            [
                "id" => 78,
                "name" => "French Southern Territories",
                "country_code" => "TF",
                "phone_code" => "0"
            ],
            [
                "id" => 79,
                "name" => "Gabon",
                "country_code" => "GA",
                "phone_code" => "241"
            ],
            [
                "id" => 80,
                "name" => "Gambia The",
                "country_code" => "GM",
                "phone_code" => "220"
            ],
            [
                "id" => 81,
                "name" => "Georgia",
                "country_code" => "GE",
                "phone_code" => "995"
            ],
            [
                "id" => 82,
                "name" => "Germany",
                "country_code" => "DE",
                "phone_code" => "49"
            ],
            [
                "id" => 83,
                "name" => "Ghana",
                "country_code" => "GH",
                "phone_code" => "233"
            ],
            [
                "id" => 84,
                "name" => "Gibraltar",
                "country_code" => "GI",
                "phone_code" => "350"
            ],
            [
                "id" => 85,
                "name" => "Greece",
                "country_code" => "GR",
                "phone_code" => "30"
            ],
            [
                "id" => 86,
                "name" => "Greenland",
                "country_code" => "GL",
                "phone_code" => "299"
            ],
            [
                "id" => 87,
                "name" => "Grenada",
                "country_code" => "GD",
                "phone_code" => "1473"
            ],
            [
                "id" => 88,
                "name" => "Guadeloupe",
                "country_code" => "GP",
                "phone_code" => "590"
            ],
            [
                "id" => 89,
                "name" => "Guam",
                "country_code" => "GU",
                "phone_code" => "1671"
            ],
            [
                "id" => 90,
                "name" => "Guatemala",
                "country_code" => "GT",
                "phone_code" => "502"
            ],
            [
                "id" => 91,
                "name" => "Guernsey and Alderney",
                "country_code" => "XU",
                "phone_code" => "44"
            ],
            [
                "id" => 92,
                "name" => "Guinea",
                "country_code" => "GN",
                "phone_code" => "224"
            ],
            [
                "id" => 93,
                "name" => "Guinea-Bissau",
                "country_code" => "GW",
                "phone_code" => "245"
            ],
            [
                "id" => 94,
                "name" => "Guyana",
                "country_code" => "GY",
                "phone_code" => "592"
            ],
            [
                "id" => 95,
                "name" => "Haiti",
                "country_code" => "HT",
                "phone_code" => "509"
            ],
            [
                "id" => 96,
                "name" => "Heard and McDonald Islands",
                "country_code" => "HM",
                "phone_code" => "0"
            ],
            [
                "id" => 97,
                "name" => "Honduras",
                "country_code" => "HN",
                "phone_code" => "504"
            ],
            [
                "id" => 98,
                "name" => "Hong Kong S.A.R.",
                "country_code" => "HK",
                "phone_code" => "852"
            ],
            [
                "id" => 99,
                "name" => "Hungary",
                "country_code" => "HU",
                "phone_code" => "36"
            ],
            [
                "id" => 100,
                "name" => "Iceland",
                "country_code" => "IS",
                "phone_code" => "354"
            ],
            [
                "id" => 101,
                "name" => "India",
                "country_code" => "IN",
                "phone_code" => "91"
            ],
            [
                "id" => 102,
                "name" => "Indonesia",
                "country_code" => "ID",
                "phone_code" => "62"
            ],
            [
                "id" => 103,
                "name" => "Iran",
                "country_code" => "IR",
                "phone_code" => "98"
            ],
            [
                "id" => 104,
                "name" => "Iraq",
                "country_code" => "IQ",
                "phone_code" => "964"
            ],
            [
                "id" => 105,
                "name" => "Ireland",
                "country_code" => "IE",
                "phone_code" => "353"
            ],
            [
                "id" => 106,
                "name" => "Israel",
                "country_code" => "IL",
                "phone_code" => "972"
            ],
            [
                "id" => 107,
                "name" => "Italy",
                "country_code" => "IT",
                "phone_code" => "39"
            ],
            [
                "id" => 108,
                "name" => "Jamaica",
                "country_code" => "JM",
                "phone_code" => "1876"
            ],
            [
                "id" => 109,
                "name" => "Japan",
                "country_code" => "JP",
                "phone_code" => "81"
            ],
            [
                "id" => 110,
                "name" => "Jersey",
                "country_code" => "XJ",
                "phone_code" => "44"
            ],
            [
                "id" => 111,
                "name" => "Jordan",
                "country_code" => "JO",
                "phone_code" => "962"
            ],
            [
                "id" => 112,
                "name" => "Kazakhstan",
                "country_code" => "KZ",
                "phone_code" => "7"
            ],
            [
                "id" => 113,
                "name" => "Kenya",
                "country_code" => "KE",
                "phone_code" => "254"
            ],
            [
                "id" => 114,
                "name" => "Kiribati",
                "country_code" => "KI",
                "phone_code" => "686"
            ],
            [
                "id" => 115,
                "name" => "Korea North",
                "country_code" => "KP",
                "phone_code" => "850"
            ],
            [
                "id" => 116,
                "name" => "Korea South",
                "country_code" => "KR",
                "phone_code" => "82"
            ],
            [
                "id" => 117,
                "name" => "Kuwait",
                "country_code" => "KW",
                "phone_code" => "965"
            ],
            [
                "id" => 118,
                "name" => "Kyrgyzstan",
                "country_code" => "KG",
                "phone_code" => "996"
            ],
            [
                "id" => 119,
                "name" => "Laos",
                "country_code" => "LA",
                "phone_code" => "856"
            ],
            [
                "id" => 120,
                "name" => "Latvia",
                "country_code" => "LV",
                "phone_code" => "371"
            ],
            [
                "id" => 121,
                "name" => "Lebanon",
                "country_code" => "LB",
                "phone_code" => "961"
            ],
            [
                "id" => 122,
                "name" => "Lesotho",
                "country_code" => "LS",
                "phone_code" => "266"
            ],
            [
                "id" => 123,
                "name" => "Liberia",
                "country_code" => "LR",
                "phone_code" => "231"
            ],
            [
                "id" => 124,
                "name" => "Libya",
                "country_code" => "LY",
                "phone_code" => "218"
            ],
            [
                "id" => 125,
                "name" => "Liechtenstein",
                "country_code" => "LI",
                "phone_code" => "423"
            ],
            [
                "id" => 126,
                "name" => "Lithuania",
                "country_code" => "LT",
                "phone_code" => "370"
            ],
            [
                "id" => 127,
                "name" => "Luxembourg",
                "country_code" => "LU",
                "phone_code" => "352"
            ],
            [
                "id" => 128,
                "name" => "Macau S.A.R.",
                "country_code" => "MO",
                "phone_code" => "853"
            ],
            [
                "id" => 129,
                "name" => "Macedonia",
                "country_code" => "MK",
                "phone_code" => "389"
            ],
            [
                "id" => 130,
                "name" => "Madagascar",
                "country_code" => "MG",
                "phone_code" => "261"
            ],
            [
                "id" => 131,
                "name" => "Malawi",
                "country_code" => "MW",
                "phone_code" => "265"
            ],
            [
                "id" => 132,
                "name" => "Malaysia",
                "country_code" => "MY",
                "phone_code" => "60"
            ],
            [
                "id" => 133,
                "name" => "Maldives",
                "country_code" => "MV",
                "phone_code" => "960"
            ],
            [
                "id" => 134,
                "name" => "Mali",
                "country_code" => "ML",
                "phone_code" => "223"
            ],
            [
                "id" => 135,
                "name" => "Malta",
                "country_code" => "MT",
                "phone_code" => "356"
            ],
            [
                "id" => 136,
                "name" => "Man (Isle of)",
                "country_code" => "XM",
                "phone_code" => "44"
            ],
            [
                "id" => 137,
                "name" => "Marshall Islands",
                "country_code" => "MH",
                "phone_code" => "692"
            ],
            [
                "id" => 138,
                "name" => "Martinique",
                "country_code" => "MQ",
                "phone_code" => "596"
            ],
            [
                "id" => 139,
                "name" => "Mauritania",
                "country_code" => "MR",
                "phone_code" => "222"
            ],
            [
                "id" => 140,
                "name" => "Mauritius",
                "country_code" => "MU",
                "phone_code" => "230"
            ],
            [
                "id" => 141,
                "name" => "Mayotte",
                "country_code" => "YT",
                "phone_code" => "269"
            ],
            [
                "id" => 142,
                "name" => "Mexico",
                "country_code" => "MX",
                "phone_code" => "52"
            ],
            [
                "id" => 143,
                "name" => "Micronesia",
                "country_code" => "FM",
                "phone_code" => "691"
            ],
            [
                "id" => 144,
                "name" => "Moldova",
                "country_code" => "MD",
                "phone_code" => "373"
            ],
            [
                "id" => 145,
                "name" => "Monaco",
                "country_code" => "MC",
                "phone_code" => "377"
            ],
            [
                "id" => 146,
                "name" => "Mongolia",
                "country_code" => "MN",
                "phone_code" => "976"
            ],
            [
                "id" => 147,
                "name" => "Montserrat",
                "country_code" => "MS",
                "phone_code" => "1664"
            ],
            [
                "id" => 148,
                "name" => "Morocco",
                "country_code" => "MA",
                "phone_code" => "212"
            ],
            [
                "id" => 149,
                "name" => "Mozambique",
                "country_code" => "MZ",
                "phone_code" => "258"
            ],
            [
                "id" => 150,
                "name" => "Myanmar",
                "country_code" => "MM",
                "phone_code" => "95"
            ],
            [
                "id" => 151,
                "name" => "Namibia",
                "country_code" => "NA",
                "phone_code" => "264"
            ],
            [
                "id" => 152,
                "name" => "Nauru",
                "country_code" => "NR",
                "phone_code" => "674"
            ],
            [
                "id" => 153,
                "name" => "Nepal",
                "country_code" => "NP",
                "phone_code" => "977"
            ],
            [
                "id" => 154,
                "name" => "Netherlands Antilles",
                "country_code" => "AN",
                "phone_code" => "599"
            ],
            [
                "id" => 155,
                "name" => "Netherlands The",
                "country_code" => "NL",
                "phone_code" => "31"
            ],
            [
                "id" => 156,
                "name" => "New Caledonia",
                "country_code" => "NC",
                "phone_code" => "687"
            ],
            [
                "id" => 157,
                "name" => "New Zealand",
                "country_code" => "NZ",
                "phone_code" => "64"
            ],
            [
                "id" => 158,
                "name" => "Nicaragua",
                "country_code" => "NI",
                "phone_code" => "505"
            ],
            [
                "id" => 159,
                "name" => "Niger",
                "country_code" => "NE",
                "phone_code" => "227"
            ],
            [
                "id" => 160,
                "name" => "Nigeria",
                "country_code" => "NG",
                "phone_code" => "234"
            ],
            [
                "id" => 161,
                "name" => "Niue",
                "country_code" => "NU",
                "phone_code" => "683"
            ],
            [
                "id" => 162,
                "name" => "Norfolk Island",
                "country_code" => "NF",
                "phone_code" => "672"
            ],
            [
                "id" => 163,
                "name" => "Northern Mariana Islands",
                "country_code" => "MP",
                "phone_code" => "1670"
            ],
            [
                "id" => 164,
                "name" => "Norway",
                "country_code" => "NO",
                "phone_code" => "47"
            ],
            [
                "id" => 165,
                "name" => "Oman",
                "country_code" => "OM",
                "phone_code" => "968"
            ],
            [
                "id" => 166,
                "name" => "Pakistan",
                "country_code" => "PK",
                "phone_code" => "92"
            ],
            [
                "id" => 167,
                "name" => "Palau",
                "country_code" => "PW",
                "phone_code" => "680"
            ],
            [
                "id" => 168,
                "name" => "Palestinian Territory Occupied",
                "country_code" => "PS",
                "phone_code" => "970"
            ],
            [
                "id" => 169,
                "name" => "Panama",
                "country_code" => "PA",
                "phone_code" => "507"
            ],
            [
                "id" => 170,
                "name" => "Papua new Guinea",
                "country_code" => "PG",
                "phone_code" => "675"
            ],
            [
                "id" => 171,
                "name" => "Paraguay",
                "country_code" => "PY",
                "phone_code" => "595"
            ],
            [
                "id" => 172,
                "name" => "Peru",
                "country_code" => "PE",
                "phone_code" => "51"
            ],
            [
                "id" => 173,
                "name" => "Philippines",
                "country_code" => "PH",
                "phone_code" => "63"
            ],
            [
                "id" => 174,
                "name" => "Pitcairn Island",
                "country_code" => "PN",
                "phone_code" => "0"
            ],
            [
                "id" => 175,
                "name" => "Poland",
                "country_code" => "PL",
                "phone_code" => "48"
            ],
            [
                "id" => 176,
                "name" => "Portugal",
                "country_code" => "PT",
                "phone_code" => "351"
            ],
            [
                "id" => 177,
                "name" => "Puerto Rico",
                "country_code" => "PR",
                "phone_code" => "1787"
            ],
            [
                "id" => 178,
                "name" => "Qatar",
                "country_code" => "QA",
                "phone_code" => "974"
            ],
            [
                "id" => 179,
                "name" => "Reunion",
                "country_code" => "RE",
                "phone_code" => "262"
            ],
            [
                "id" => 180,
                "name" => "Romania",
                "country_code" => "RO",
                "phone_code" => "40"
            ],
            [
                "id" => 181,
                "name" => "Russia",
                "country_code" => "RU",
                "phone_code" => "70"
            ],
            [
                "id" => 182,
                "name" => "Rwanda",
                "country_code" => "RW",
                "phone_code" => "250"
            ],
            [
                "id" => 183,
                "name" => "Saint Helena",
                "country_code" => "SH",
                "phone_code" => "290"
            ],
            [
                "id" => 184,
                "name" => "Saint Kitts And Nevis",
                "country_code" => "KN",
                "phone_code" => "1869"
            ],
            [
                "id" => 185,
                "name" => "Saint Lucia",
                "country_code" => "LC",
                "phone_code" => "1758"
            ],
            [
                "id" => 186,
                "name" => "Saint Pierre and Miquelon",
                "country_code" => "PM",
                "phone_code" => "508"
            ],
            [
                "id" => 187,
                "name" => "Saint Vincent And The Grenadines",
                "country_code" => "VC",
                "phone_code" => "1784"
            ],
            [
                "id" => 188,
                "name" => "Samoa",
                "country_code" => "WS",
                "phone_code" => "684"
            ],
            [
                "id" => 189,
                "name" => "San Marino",
                "country_code" => "SM",
                "phone_code" => "378"
            ],
            [
                "id" => 190,
                "name" => "Sao Tome and Principe",
                "country_code" => "ST",
                "phone_code" => "239"
            ],
            [
                "id" => 191,
                "name" => "Saudi Arabia",
                "country_code" => "SA",
                "phone_code" => "966"
            ],
            [
                "id" => 192,
                "name" => "Senegal",
                "country_code" => "SN",
                "phone_code" => "221"
            ],
            [
                "id" => 193,
                "name" => "Serbia",
                "country_code" => "RS",
                "phone_code" => "381"
            ],
            [
                "id" => 194,
                "name" => "Seychelles",
                "country_code" => "SC",
                "phone_code" => "248"
            ],
            [
                "id" => 195,
                "name" => "Sierra Leone",
                "country_code" => "SL",
                "phone_code" => "232"
            ],
            [
                "id" => 196,
                "name" => "Singapore",
                "country_code" => "SG",
                "phone_code" => "65"
            ],
            [
                "id" => 197,
                "name" => "Slovakia",
                "country_code" => "SK",
                "phone_code" => "421"
            ],
            [
                "id" => 198,
                "name" => "Slovenia",
                "country_code" => "SI",
                "phone_code" => "386"
            ],
            [
                "id" => 199,
                "name" => "Smaller Territories of the UK",
                "country_code" => "XG",
                "phone_code" => "44"
            ],
            [
                "id" => 200,
                "name" => "Solomon Islands",
                "country_code" => "SB",
                "phone_code" => "677"
            ],
            [
                "id" => 201,
                "name" => "Somalia",
                "country_code" => "SO",
                "phone_code" => "252"
            ],
            [
                "id" => 202,
                "name" => "South Africa",
                "country_code" => "ZA",
                "phone_code" => "27"
            ],
            [
                "id" => 203,
                "name" => "South Georgia",
                "country_code" => "GS",
                "phone_code" => "0"
            ],
            [
                "id" => 204,
                "name" => "South Sudan",
                "country_code" => "SS",
                "phone_code" => "211"
            ],
            [
                "id" => 205,
                "name" => "Spain",
                "country_code" => "ES",
                "phone_code" => "34"
            ],
            [
                "id" => 206,
                "name" => "Sri Lanka",
                "country_code" => "LK",
                "phone_code" => "94"
            ],
            [
                "id" => 207,
                "name" => "Sudan",
                "country_code" => "SD",
                "phone_code" => "249"
            ],
            [
                "id" => 208,
                "name" => "Suriname",
                "country_code" => "SR",
                "phone_code" => "597"
            ],
            [
                "id" => 209,
                "name" => "Svalbard And Jan Mayen Islands",
                "country_code" => "SJ",
                "phone_code" => "47"
            ],
            [
                "id" => 210,
                "name" => "Swaziland",
                "country_code" => "SZ",
                "phone_code" => "268"
            ],
            [
                "id" => 211,
                "name" => "Sweden",
                "country_code" => "SE",
                "phone_code" => "46"
            ],
            [
                "id" => 212,
                "name" => "Switzerland",
                "country_code" => "CH",
                "phone_code" => "41"
            ],
            [
                "id" => 213,
                "name" => "Syria",
                "country_code" => "SY",
                "phone_code" => "963"
            ],
            [
                "id" => 214,
                "name" => "Taiwan",
                "country_code" => "TW",
                "phone_code" => "886"
            ],
            [
                "id" => 215,
                "name" => "Tajikistan",
                "country_code" => "TJ",
                "phone_code" => "992"
            ],
            [
                "id" => 216,
                "name" => "Tanzania",
                "country_code" => "TZ",
                "phone_code" => "255"
            ],
            [
                "id" => 217,
                "name" => "Thailand",
                "country_code" => "TH",
                "phone_code" => "66"
            ],
            [
                "id" => 218,
                "name" => "Togo",
                "country_code" => "TG",
                "phone_code" => "228"
            ],
            [
                "id" => 219,
                "name" => "Tokelau",
                "country_code" => "TK",
                "phone_code" => "690"
            ],
            [
                "id" => 220,
                "name" => "Tonga",
                "country_code" => "TO",
                "phone_code" => "676"
            ],
            [
                "id" => 221,
                "name" => "Trinidad And Tobago",
                "country_code" => "TT",
                "phone_code" => "1868"
            ],
            [
                "id" => 222,
                "name" => "Tunisia",
                "country_code" => "TN",
                "phone_code" => "216"
            ],
            [
                "id" => 223,
                "name" => "Turkey",
                "country_code" => "TR",
                "phone_code" => "90"
            ],
            [
                "id" => 224,
                "name" => "Turkmenistan",
                "country_code" => "TM",
                "phone_code" => "7370"
            ],
            [
                "id" => 225,
                "name" => "Turks And Caicos Islands",
                "country_code" => "TC",
                "phone_code" => "1649"
            ],
            [
                "id" => 226,
                "name" => "Tuvalu",
                "country_code" => "TV",
                "phone_code" => "688"
            ],
            [
                "id" => 227,
                "name" => "Uganda",
                "country_code" => "UG",
                "phone_code" => "256"
            ],
            [
                "id" => 228,
                "name" => "Ukraine",
                "country_code" => "UA",
                "phone_code" => "380"
            ],
            [
                "id" => 229,
                "name" => "United Arab Emirates",
                "country_code" => "AE",
                "phone_code" => "971"
            ],
            [
                "id" => 230,
                "name" => "United Kingdom",
                "country_code" => "GB",
                "phone_code" => "44"
            ],
            [
                "id" => 231,
                "name" => "United States",
                "country_code" => "US",
                "phone_code" => "1"
            ],
            [
                "id" => 232,
                "name" => "United States Minor Outlying Islands",
                "country_code" => "UM",
                "phone_code" => "1"
            ],
            [
                "id" => 233,
                "name" => "Uruguay",
                "country_code" => "UY",
                "phone_code" => "598"
            ],
            [
                "id" => 234,
                "name" => "Uzbekistan",
                "country_code" => "UZ",
                "phone_code" => "998"
            ],
            [
                "id" => 235,
                "name" => "Vanuatu",
                "country_code" => "VU",
                "phone_code" => "678"
            ],
            [
                "id" => 236,
                "name" => "Vatican City State (Holy See)",
                "country_code" => "VA",
                "phone_code" => "39"
            ],
            [
                "id" => 237,
                "name" => "Venezuela",
                "country_code" => "VE",
                "phone_code" => "58"
            ],
            [
                "id" => 238,
                "name" => "Vietnam",
                "country_code" => "VN",
                "phone_code" => "84"
            ],
            [
                "id" => 239,
                "name" => "Virgin Islands (British)",
                "country_code" => "VG",
                "phone_code" => "1284"
            ],
            [
                "id" => 240,
                "name" => "Virgin Islands (US)",
                "country_code" => "VI",
                "phone_code" => "1340"
            ],
            [
                "id" => 241,
                "name" => "Wallis And Futuna Islands",
                "country_code" => "WF",
                "phone_code" => "681"
            ],
            [
                "id" => 242,
                "name" => "Western Sahara",
                "country_code" => "EH",
                "phone_code" => "212"
            ],
            [
                "id" => 243,
                "name" => "Yemen",
                "country_code" => "YE",
                "phone_code" => "967"
            ],
            [
                "id" => 244,
                "name" => "Yugoslavia",
                "country_code" => "YU",
                "phone_code" => "38"
            ],
            [
                "id" => 245,
                "name" => "Zambia",
                "country_code" => "ZM",
                "phone_code" => "260"
            ],
            [
                "id" => 246,
                "name" => "Zimbabwe",
                "country_code" => "ZW",
                "phone_code" => "263"
            ]

        ];
        Country::insert($deneme);
    }
}
