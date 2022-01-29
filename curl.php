<?php include('header.php'); ?>

http://code.tutsplus.com/tutorials/techniques-for-mastering-curl--net-8470
http://code.tutsplus.com/tutorials/a-beginners-guide-to-http-and-rest--net-16340

curl and restful webservices, andorid and iphone developers how they call put and delete method in rest api.
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));


rest is used to create Remote Requests
rest is used to create communication between different servers.
Curl is used to create RESTFUL services in php.
cURL is a PHP library which allows you to connect and communicate to many different types of servers with many different types of protocols.

curl is a command-line tool for transferring data using various protocols including HTTP. In this tutorial I am going to show how curl can be used to

Interact with RESTful web services with GET and PUT verbs over a secure connection
Use HTTP basic access authentication with base64 encoding
URL encode query string data for HTTP GET method
URL encode data for HTTP POST methods

PHP curl support GET and POST methods, but PUT and DELETE aren’t, so how to work with them
PHP curl has an extra setting for indicating a custom request type. So for DELETE, you could do this
$curl = curl_init($url . "/Contacts/{$recordId}");
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json',"OAuth-Token: $token"));

// Make the REST call, returning the result
$response = curl_exec($curl);
if (!$response) {
die("Connection Failure.n");
}

For PUT, we needs you to pass in a payload to the request.
$curl = curl_init($url . "/Contacts/{$recordId}");
$data = array(
'first_name' => 'John',
);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json',"OAuth-Token: $token"));
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));

// Make the REST call, returning the result
$response = curl_exec($curl);
if (!$response) {
die("Connection Failure.n");
}


curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");

curl is used to create restful web services in php , restful web services work on http and curl is also work on http.
cURL is a library that lets you make HTTP requests in PHP.
You can make HTTP requests without cURL, too, though it requires allow_url_fopen to be enabled in your php.ini file.
In order to use PHP's cURL functions you need to install the » libcurl package.
CURL is a way you can hit a URL from your code to get a html response from it.cURL means client URL which allows you to connect with other URLS and use there responses in your code.
curl ia used to create restful web services in php


1.1 What is cURL?
cURL is the name of the project. The name is a play on 'Client for URLs', originally with URL spelled in uppercase to make it obvious it deals with URLs. The fact it can also be pronounced 'see URL' also helped, it works as an abbreviation for "Client URL Request Library" or why not the recursive version: "Curl URL Request Library".
The cURL project produces two products:

libcurl
A free and easy-to-use client-side URL transfer library, supporting DICT, FILE, FTP, FTPS, GOPHER, HTTP, HTTPS, IMAP, IMAPS, LDAP, LDAPS, POP3, POP3S, RTMP, RTSP, SCP, SFTP, SMTP, SMTPS, TELNET and TFTP.
libcurl supports HTTPS certificates, HTTP POST, HTTP PUT, FTP uploading, kerberos, HTTP form based upload, proxies, cookies, user+password authentication, file transfer resume, http proxy tunneling and more!
libcurl is highly portable, it builds and works identically on numerous platforms, including Solaris, NetBSD, FreeBSD, OpenBSD, Darwin, HPUX, IRIX, AIX, Tru64, Linux, UnixWare, HURD, Windows, Amiga, OS/2, BeOS, Mac OS X, Ultrix, QNX, OpenVMS, RISC OS, Novell NetWare, DOS, Symbian, OSF, Android, Minix, IBM TPF and more...
libcurl is free, thread-safe, IPv6 compatible, feature rich, well supported and fast.

curl
A command line tool for getting or sending files using URL syntax.
Since curl uses libcurl, curl supports the same wide range of common Internet protocols that libcurl does.
We pronounce curl and cURL with an initial k sound: [kurl].
There are numerous sub-projects and related projects that also use the word curl in the project names in various combinations, but you should take notice that this FAQ is directed at the command-line tool named curl (and libcurl the library), and may therefore not be valid for other curl-related projects. (There is however a small section for the PHP/CURL in this FAQ.)
1.2 What is libcurl?
libcurl is a reliable and portable library which provides you with an easy interface to a range of common Internet protocols.
You can use libcurl for free in your application, be it open source, commercial or closed-source.
libcurl is most probably the most portable, most powerful and most often used C-based multi-platform file transfer library on this planet - be it open source or commercial.
1.3 What is curl not?
Curl is not a wget clone. That is a common misconception. Never, during curl's development, have we intended curl to replace wget or compete on its market. Curl is targeted at single-shot file transfers.
Curl is not a web site mirroring program. If you want to use curl to mirror something: fine, go ahead and write a script that wraps around curl to make it reality (like curlmirror.pl does).

Curl is not an FTP site mirroring program. Sure, get and send FTP with curl but if you want systematic and sequential behavior you should write a script (or write a new program that interfaces libcurl) and do it.

Curl is not a PHP tool, even though it works perfectly well when used from or with PHP (when using the PHP/CURL module).

Curl is not a program for a single operating system. Curl exists, compiles, builds and runs under a wide range of operating systems, including all modern Unixes (and a bunch of older ones too), Windows, Amiga, BeOS, OS/2, OS X, QNX etc.





<?php include('footer.php'); ?>