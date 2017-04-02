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
![Screenshot of Facebook Basic Data Flow ](https://cloud.githubusercontent.com/assets/15896579/24586352/430d7294-17bc-11e7-80a0-e864e9062de1.png?raw=true "Facebook Basic Data Flow")
<br/><br/><br/>


## LinkedIn Apps Creation

To access LinkedIn API you need to create LinkedIn App and specify App ID(linkedinApiKey) & App Secret(linkedinApiSecret) at the time of call Facebook API. Follow the step-by-step guide to creating and configure a Facebook App from the App Dashboard.

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
In the LinkedIn App Dashboard: <br>1. Site Url / Mobile Site Url is the page where fb login button exists and <br/>2. OAuth redirect URIs / Callback URI's is the page you want to get into after successful login(i.e. Website Home Login page => index.php) and this should be same as redirect url in config.php code

## Preview

![Screenshot of Facebook Login API](https://cloud.githubusercontent.com/assets/15896579/24581274/f7bfc444-1735-11e7-9f06-4144823512d2.png?raw=true "Screenshot of Facebook Login API")
<br/><br/><br/>

![Screenshot of Facebook Login API](https://cloud.githubusercontent.com/assets/15896579/24581272/f7be37be-1735-11e7-984a-79078e8d9120.png?raw=true "Screenshot of Facebook Login API")
<br/><br/><br/>

![Screenshot of Facebook Login API](https://cloud.githubusercontent.com/assets/15896579/24581338/e6266d22-1736-11e7-86e4-d1f00aa679b3.png?raw=true "Screenshot of Facebook Login API")
<br/><br/><br/>

![Screenshot of Facebook Login API](https://cloud.githubusercontent.com/assets/15896579/24581269/f7b96b6c-1735-11e7-833a-015dd36515f6.png?raw=true "Screenshot of Facebook Login API")
<br/><br/><br/>

![Screenshot of Facebook App Dashboard](https://cloud.githubusercontent.com/assets/15896579/24581271/f7bc5f16-1735-11e7-8382-1165cfc9d62d.png?raw=true "Screenshot of Facebook App Dashboard")
<br/><br/><br/>

![Screenshot of Facebook App Dashboard](https://cloud.githubusercontent.com/assets/15896579/24581273/f7be772e-1735-11e7-8c80-89bf645cf934.png?raw=true "Screenshot of Facebook App Dashboard")
<br/><br/><br/>

![Screenshot of Facebook App Dashboard](https://cloud.githubusercontent.com/assets/15896579/24581270/f7baa720-1735-11e7-9d30-fe3b187e5ce3.png?raw=true "Screenshot of Facebook App Dashboard")
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





