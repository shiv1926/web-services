<?php include('header.php'); ?>
<ul>
	<li><strong>REST (RE-presentational State Transfer) : </strong>REST is a simple stateless architecture that generally runs over HTTP. One of the major ideas behind REST is to not give operational methods as part of the argument, Instead, each resource has its unique URL and the HTTP verbs (GET, POST, PUT or DELETE) are used on those resources.
		<ul>
			<li>DELETE /comment/28 : this is correct restful web service for delete operation</li>
			<li>GET /services/rest/?method=flickr.photos.comments.deleteComment&comment_id=28 : this is not a restful web service.</li>
		</ul>
	</li>
	<li>REST is very easy to learn.</li>
	<li>HTTP verbs (GET, POST, PUT or DELETE), these are request methods passed when calling an api.</li>
	<li>REST is often used in mobile applications.</li>
	<li> the REST architectural style, data and functionality are considered resources and are accessed using Uniform Resource Identifiers (URIs), typically links on the Web.</li>
	<li>REST is designed to use a stateless communication protocol, typically HTTP.</li>
	<li>REST is stateless and SOAP is stateful.</li>
	<li>"Stateful" means that the server stores information about the client and uses that information over a series of requests. Subsequent requests are related to each other.</li>
	<li>In SOAP web services first we sent the username and password to the login web service and get an object corresponding to that request, than we use this object for all subsequent web services. We can create session and cookies in the SOAP web services. But in RESTful web services we never create session or cookies, for all secured web services we send username and password every time. This is the stateless.</li>
	<li>
		In REST Api we prefer to create Sefurl ( search engine friendly url ) with http verb. We can use framework like codeigniter/laraval for sefurl. there are several other frameworks are exists, which we can create restful webservices, most famous are Slim and Epiphany.
		<ul>
			<li>Note how the URL's "method" part is not called "GetUserDetails", but simply "users". It is a common convention in REST design to use nouns rather than verbs to denote simple resources.</li>
			<li>http://xyz.com/api/user/2 : GET GIVE THE DETAILS OF USER WITH ID 2 USERID: 2</li>
			<li>http://xyz.com/api/user : POST CREATE NEW USER ALL PARAMS WILL BE GIVEN IN POST STRING</li>
			<li>http://xyz.com/api/user/2 : PUT UPDATE THE EXISTING USER WITH ID 2 USER ID: 2</li>
			<li>http://xyz.com/api/user/2 : DELETE DELTE USER WITH ID 2 USERID : 2</li>
		</ul>
	</li>
	<li>It is not mandatory to have sefurl for rest api, we can use usual urls in REST api. sometimes we do not have sefurl like custom website or where we do not using any framework or cms.</li>
	<li>
		We can use query string in REST api
		<ul>
			<li>http://xyz.com/api/users : it is a GET method and it will give the list of all users, if you want to filter users on some values, we can to use query string, because this is a GET method we can not pass payload, the second url is the example of filterig users on some values.</li>
			<li>http://xyz.com/api/users?start=2&end=5&name=shiv&category=mens</li>
			<li>More example with query string</li>
			<li>http://xyz.com/api-user.php?method=getuserlist&start=2&end=5&fname=shiv : Get We can add as many parameters in query string, because it is a get method</li>
			<li>http://xyz.com/api-user.php?method=userdetail&userid=5 : Get Get user detail</li>
			<li>http://xyz.com/api-user.php?method=deleteuser&userid=5 : Get Delete user</li>
			<li>http://xyz.com/api-user.php?method=createuser : Post Send payload using post string</li>
			<li>http://xyz.com/api-user.php?method=updateuser&userid=5 : Post Send payload using post string and userid can also send in query string or payload string to update user.</li>
		</ul>
	</li>
	<li>frameworks list : http://davss.com/tech/php-rest-api-frameworks/</li>
</ul>
<h4>Refrences</h4>
<ul>
	<li>stateless means : http://whatis.techtarget.com/definition/stateless</li>
	<li>https://www.packetizer.com/ws/rest.html</li>
	<li>https://trinitytuts.com/build-first-web-service-php/</li>
	<li>http://coreymaynard.com/blog/creating-a-restful-api-with-php/ : best</li>
</ul>

<?php include('footer.php'); ?>