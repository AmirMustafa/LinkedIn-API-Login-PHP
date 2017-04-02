# LinkedIn API client in PHP

[![Latest Version](https://img.shields.io/github/release/Happyr/LinkedIn-API-client.svg?style=flat-square)](https://github.com/Happyr/LinkedIn-API-client/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build Status](https://img.shields.io/travis/Happyr/LinkedIn-API-client/master.svg?style=flat-square)](https://travis-ci.org/Happyr/LinkedIn-API-client)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/44c425af-90f6-4c25-b789-4ece28b01a2b/mini.png)](https://insight.sensiolabs.com/projects/44c425af-90f6-4c25-b789-4ece28b01a2b)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/Happyr/LinkedIn-API-client.svg?style=flat-square)](https://scrutinizer-ci.com/g/Happyr/LinkedIn-API-client)
[![Quality Score](https://img.shields.io/scrutinizer/g/Happyr/LinkedIn-API-client.svg?style=flat-square)](https://scrutinizer-ci.com/g/Happyr/LinkedIn-API-client)
[![Total Downloads](https://img.shields.io/packagist/dt/happyr/linkedin-api-client.svg?style=flat-square)](https://packagist.org/packages/happyr/linkedin-api-client)


A PHP library to handle authentication and communication with LinkedIn API. The library/SDK helps you to get an access
token and when authenticated it helps you to send API requests. You will not get *everything* for free though... You
have to read the [LinkedIn documentation][api-doc-core] to understand how you should query the API. 

To get an overview what this library actually is doing for you. Take a look at the authentication page from
the [API docs][api-doc-authentication].

<br/><br/><br/>
![Screenshot of LinkedIn Basic Data Flow ](https://cloud.githubusercontent.com/assets/15896579/24588639/a3908bec-17e9-11e7-8e70-19dbdebd04c2.png?raw=true "LinkedIn Basic Data Flow")
<br/><br/><br/>


## LinkedIn Apps Creation

To access LinkedIn API you need to create LinkedIn App and specify App ID(linkedinApiKey) & App Secret(linkedinApiSecret) at the time of call LinkedIn API. Follow the step-by-step guide to creating and configure a LinkedIn App from the App Dashboard.

Log in with your LinkedIn account and go to the [LinkedIn App Dashboard](https://www.linkedin.com/secure/developer).
Create a new LinkedIn apps with your desired name (like Amir).
If you want to test LinkedIn login at the localhost server, then your App Domains should be localhost. Also, localhost domain will only work, once you add platform. For add a platform click on Settings link from the left side menu panel » Click on the Add Platform button » Choose Website category » Enter site URL.
Once you completed the above steps, your apps settings page would something like the below.

## Installation

1. Clone the Repository.<br>
2. Import users.sql file through phpMyAdmin<br>
3. Open the config.php file and specify the $linkedinApiKey, $linkedinApiSecret, and $callbackURL as per your LinkedIn App credentials.<br><br>
4. Browse the index.php file in the browser and test the Login with LinkedIn functionality.<br>

## Snippets

```<?php
$baseURL = 'http://w3tweaks.com/linkedinlogin/';				// base or site url is the site where code 																		linked in button is kept for signup
$callbackURL = 'http://w3tweaks.com/linkedinlogin/process.php';	//callback or redirect url is the page you 																	want to open after successful getting of data
																//i.e. index.php page (must be same in linkedin dashboard)
$linkedinApiKey = '81zcng0zmoae54';								//APP ID(will receive from linkedin dashboard)
$linkedinApiSecret = '4XRzuLanwsuy9JoA';						//APP Client 
$linkedinScope = 'r_basicprofile r_emailaddress';				//This is fixed no need to change
?>
```

## Tricks
In the LinkedIn App Dashboard: <br>1. Site Url / Mobile Site Url is the page where ln login button exists and <br/>2. OAuth redirect URIs / Callback URI's is the page you want to get into after successful login(i.e. Website Home Login page => index.php) and this should be same as redirect url in config.php code

## Preview


![Screenshot of LinkedIn Login API Page 1 ](https://cloud.githubusercontent.com/assets/15896579/24588640/a738540a-17e9-11e7-8598-c8584ebf0721.png?raw=true "Screenshot of LinkedIn Login API Page 1")
<br/><br/><br/>

![Screenshot of LinkedIn Login API Page 2](https://cloud.githubusercontent.com/assets/15896579/24588641/aa385376-17e9-11e7-9cf1-320aa39360f6.png?raw=true "Screenshot of LinkedIn Login API Page 2")
<br/><br/><br/>

![Screenshot of LinkedIn Login API Page 3](https://cloud.githubusercontent.com/assets/15896579/24588642/aea3e736-17e9-11e7-96fa-5c13f5e54358.png?raw=true "Screenshot of LinkedIn Login API Page 3")
<br/><br/><br/>

![Screenshot of LinkedIn Login API Page 4](https://cloud.githubusercontent.com/assets/15896579/24588643/b25e04b0-17e9-11e7-9c65-7d3749819624.png?raw=true "Screenshot of LinkedIn Login API Page 4")
<br/><br/><br/>

![Screenshot of LinkedIn APP Dashboard](https://cloud.githubusercontent.com/assets/15896579/24588644/b7978ea6-17e9-11e7-80ef-595f25b69b0d.png?raw=true "Screenshot of LinkedIn APP Dashboard")
<br/><br/><br/>

![Screenshot of LinkedIn APP Dashboard](https://cloud.githubusercontent.com/assets/15896579/24588646/bca3ecfa-17e9-11e7-9489-c92a8a00ae1c.png?raw=true "Screenshot of LinkedIn APP Dashboard")

![Screenshot of LinkedIn APP Dashboard](https://cloud.githubusercontent.com/assets/15896579/24588647/c0acdf00-17e9-11e7-98bf-7f4ee287a500.png?raw=true "Screenshot of LinkedIn APP Dashboard")
<br/><br/><br/>

![Screenshot of LinkedIn APP Dashboard](https://cloud.githubusercontent.com/assets/15896579/24588648/c44372fa-17e9-11e7-96c9-87a907f7139a.png?raw=true "Screenshot of LinkedIn APP Dashboard")


<br/><br/><br/>




## License

(The MIT License)

Copyright (c) 2016 Amir Mustafa

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
'Software'), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.





