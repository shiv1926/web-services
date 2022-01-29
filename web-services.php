<?php include('header.php'); ?>

<h4>What is web services?</h4>
<p>where we centralized our data and allow user to access that data from different sources like web, software, app etc. Web service provide Interoperability between two different language. web services are used to fetch the data from database across multiple devices and cross domains. There is a central database and multiple devices like android, ios or multiple platforms like php, java, dot net can access the data using web services.<p>
<p>Web services are platform independent, i.e. any platform can consume the web services, no need to use same platform in which web services are written.</p>
<p>There are 2 type of web services</p>
<ul>
	
</ul>
<li><strong>SOAP ( simple object access protocol ):</strong> SOAP is the Simple Object Access Protocol based on XML so it easy to read. It is a simple XML based protocol to exchange data between two different languages.</li>
<li><strong>REST (RE-presentational State Transfer) : </strong>REST is a simple stateless architecture that generally runs over HTTP. One of the major ideas behind REST is to not give operational methods as part of the argument, Instead, each resource has its unique URL and the HTTP verbs (GET, POST, PUT or DELETE) are used on those resources.
	<ul>
		<li>DELETE /comment/28 : this is correct restful web service for delete operation</li>
		<li>GET /services/rest/?method=flickr.photos.comments.deleteComment&comment_id=28 : this is not a restful web service.</li>
	</ul>
</li>
<?php include('footer.php'); ?>