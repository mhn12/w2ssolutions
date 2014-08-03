<?php

$name = $_GET['card'];
$page = $_GET['page'];


	if($name == 'home' && empty($page)) 
	{ 
		$tag = '<meta name="keywords" content="Mobile Application Development, RFID Solution Provider, Apps promotion, Web based application development, android application developer, android application development, mobile application developer"/>';
		$tag1 = '<meta name="description" content="Way2smile is a growing mobile application development company located in India. We provide android application development, iPhone application development and web based application development." />';
		$pagetitle = 'Way2smile | Mobile Apps Development Company, Mobile Application Development, Android Apps Development, iPhone Apps Development, iPad Apps development, iOs Apps development Company, Enterprise Mobility Solutions';
		include ('index.php');
	} 
	else if($name == 'aboutus' && empty($page)) 
	{  
		$tag = '<meta name="keywords" content="Way2Smile Solutions Toronto provides Software development, Professional IT Solutions, Consulting Business, Technology Service, Project Completion, Servicing Clients, Mobile products development with global business knowledge, Email : Info@way2smile.com"/>';
		$tag1 = '<meta name="description" content="Way2Smile Solutions provides the following benefits to our customer, and its growing!Our "Establishing Differentiation" strategy provides clients to differentiate their business from their competitors with high performance, best user experience web and mobile applications, which helps them to generate profit, increase sales and to create sustainable value for their customers." />';
		$pagetitle = 'Way2Smile-Customer Benefits';
		$abtheadcla = 'current';
		include ('company.php'); 
	}
	else if($name == 'aboutus' && $page == 'values') 
	{ 	
		$tag = '<meta name="keywords" content="Core Values, Mobile Applications, Sustainable Value, Clients Business, Innovative Training, User Experience Design"/>';
		$tag1 = '<meta name="description" content="At Way2Smile Solutions, We add value for our customer by providing professional IT solutions, services and consulting businesses." />';
		$pagetitle = 'Why Way2Smile Solutions – About us';
		$abtheadcla = 'current';
		include ('core.php'); 
	}
	else if($name == 'aboutus' && $page == 'company') 
	{ 
		$tag = '<meta name="keywords" content="Professional IT Solutions, Consulting Business, Technology Service, High Performance, Project Completion, Servicing Clients, Customer Benefits, Associated Timeframe, Mobile Products development, Global Business Knowledge" />';
		$tag1 = '<meta name="description" content="Way2Smile Solutions is a software development company focusing on Web, Mobile application development, Management consulting and outsourcing, Email : Info@way2smile.com" />';
		$pagetitle = 'Mobile Apps developer | Way2smile.Solutions';
		$abtheadcla = 'current';
		include ('company.php'); 
	}
else if($name == 'aboutus' && $page == 'technology') 
	{ 
		$tag = '<meta name="keywords" content="CRM Strategies, Content Management system, Management Solutions, Integrating Enterprise Applications, Requirement Analysis, iPhone Application Development, Blackberry Application Development, Android Application Development, Symbian Application Development, iPad Application Development, Mobile Websites" />';
		$tag1 = '<meta name="description" content="Way2Smile Solutions helps individual and business to create mobile application.For more information, contact us or email us at marketing@way2smile.com"/>';
		$pagetitle = 'iPhone Application Development | BlackBerry Application Development | iPad Application Development | Way2smile';
		$abtheadcla = 'current';
		include ('technology.php'); 
	}
else if($name == 'aboutus' && $page == 'client') 
	{ 
		$tag = '<meta name="keywords" content="Storyfruit, Web Application, Web Server, Flash Media Server, Architecture Design, Upcoming Eventz, Business and Networking Events, Strategic Partners, Card2Contact App, Manual Transcription, Business card, Power trucking, Energy Product, Management Team, Application Servers, Apache Servers, Ashokrexine, AST Educational and    Social Welfare Template, Card2Contact, Deccan Furnishings Template, GGRaj Exports, Horizon Modular Kitchen, Power Trucking, Story Fruit Template, Upcomingeventz Template, Card2Contact Blogs, Building & Construction, Choice Decors, Deepamalai, Malavika Sarukkai Template, Sourcebull.co, TSS Power Systems" />';
		$tag1 = '<meta name="description" content="Testimonial: Way2Smile solutions took my ideas, my data and a vision I had for a future tool, and made it possible. They haveve also built something that I trust to be reliable and accurate and will stand the test of time. It’s now a core part of our business, and something we anticipate will grow and grow, with the help of Way2Smile" />';
		$pagetitle = 'Way2Smile Solutions | Client’s portfolio ';
		$abtheadcla = 'current';
		include ('client.php'); 
	}
	else if($name == 'service' && empty($page)) 
	{ 
	$tag = '<meta name="keywords" content="Flash Media Application, Migration and Re-engineering, Performance Engineering, Application Management, System Integration Testing, Mobile Apps Marketing" />';
		$tag1 = '<meta name="description" content="Way2Smile provide the built-in flexibility to adapt to constantly changing global market and the ability to strategize, develop and execute new initiatives with optimal speed to remain competitive" />';
		$pagetitle = 'Way2Smile Solutions Services';
		$serheadcla = 'current';
		include ('webservice.php'); 
	} 
else if($name == 'service' && $page == 'webdevelopment') 
	{ 
		$tag = '<meta name="keywords" content="Way2Smile Services, BB Development, website development, iPhone development, System Interagtion Solutions, Custom Apllication Development, Application Management, Migration and Re-engineering, Performance Engineering, eCommerce Implementation, Mobile Apps Marketing" />';
		$tag1 = '<meta name="description" content="Way2Smile Solutions helps companies make most of their investments from providing system integration solutions, application development, management service, and testing solutions" />';
		$pagetitle = 'Enterprise application development | Way2Smile';
		$serheadcla = 'current';
		include ('webservice.php'); 
	} 
	else if($name == 'service' && $page == 'mobileapps') 
	{ 
		$serheadcla = 'current';
		include ('secondslide.php'); 
		//include ('mobileservice.php'); 
	} 
	else if($name == 'service'  && $page == 'ecommerce') 
	{ 
		$tag = '<meta name="keywords" content="Database driven web applications, Enterprise information portals, B2B integration, Catalog management System, Document management System, Content management System, Knowledge management System, Integrate shopping carts, Payement gateway for ecommerce" />';
		$tag1 = '<meta name="description" content="B2B and B2C E-commerce web apps design and development solution. Exclusive designs, Innovative technical solutions, on time and on budget. " />';
		$pagetitle = 'Way2Smile Solutions - ECommerce Application Development ';
		$serheadcla = 'current';
		include ('ecomservice.php'); 
	}
	else if($name == 'Internet-marketing' && empty($page))  
	{ 
		$tag = '<meta name="keywords" content="Internet marketing,internet promotion in Canada, internet marketing in UK, internet marketing company in UAE, internet marketing consultants in India" />';
		$tag1 = '<meta name="description" content="Way2Smile Solutions Internet marketing company in UAE, Dubai, Canada, Toronto, Usa and India.Internet promotion, Internet sales, Internet marketing consultation." />';
		$pagetitle = 'Way2Smile Solutions Internet marketing services';
		$serheadcla = 'current';
		include ('internetservice.php'); 
	} 
	else if($name == 'service' && $page == 'socialservice') 
	{ 
		$serheadcla = 'current';
		include ('socialservice.php'); 
	} 
	else if($name == 'service'  && $page == 'businessdevelopment') 
	{ 
		$serheadcla = 'current';
		include ('businessservice.php'); 
	} 
	else if($name == 'service'  && $page == 'consultingservice') 
	{ 
		$serheadcla = 'current';
		include ('consultingservice.php'); 
	} 
	else if($name == 'technology' && empty($page)) 
	{ 
	   $tag = '<meta name="keywords" content="iPhone Application Development, Blackberry Application Development, Android Application Development, Symbian Application Development, iPad Application Development, Mobile Websites" />';
		$tag1 = '<meta name="description" content="Way2Smile Solutions helps you with comprehensive, efficient and robust solutions that meet your unique requirements" />';
		$pagetitle = 'Way2Smile Solutions:Mobile Apps Developmet';
		$techheadcla = 'current';
		include ('technology.php'); 
	} 
	else if($name == 'technology' && $page == 'php-development') 
	{ 
		$tag = '<meta name="keywords" content="PHP Technology, Portal PHP Web Development, Link Building Campaigns, Sitemapr Creation & Submissions, Web Mail, Web Calender Development, Message Boards, Community Websites, Robots File Creation, Blogging Web Systems" />';
		$tag1 = '<meta name="description" content="Way2Smile provides effective PHP web development, integrative, robust and supports web standards that meet global demands, making it the perfect platform to develop and deploy modern web stuff" />';
		$pagetitle = 'PHP development | Way2smile Solutions';
		$techheadcla = 'current';
		include ('phptech.php'); 
	} 
	else if($name == 'technology' && $page == 'dotnet-development') 
	{ 
		$tag = '<meta name="keywords" content=".Net Development Services, .Net Applications, Data Management Solutions, .Net Mobile Application Development, .Net Consultants, Application Migration Services" />';
		$tag1 = '<meta name="description" content="We have an extensive competency in providing Microsoft .NET solutions and .Net development services. We have a team of qualified .NET consultants, offering custom Asp.Net applications, .NET programming, .NET based e-commerce solutions and data management solutions" />';
		$pagetitle = 'Dot Net Development | Way2smile Solutions';
		$techheadcla = 'current';
		include ('nettech.php'); 
	} 
	else if($name == 'technology' && $page == 'java-development') 
	{ 
		$tag = '<meta name="keywords" content="Software Development Life Cycle, Java Architect, Design Patterns, Object Oriented Programming, oAuth Implementation, Business Logic Component Design, Programming Using Servlets & EJBs, Client-Server Applications, Three tier & N-tier Apllications, Tomcat with Apache" />';
		$tag1 = '<meta name="description" content="Way2smile provides various design and development of enterprise application using platform-independent, Object oriented programming, Java /J2EE technologies" />';
		$pagetitle = 'Java Development | Way2smile Solutions';
		$techheadcla = 'current';
		include ('javatech.php'); 
	} 
	else if($name == 'technology' && $page == 'mobile-application-development') 	
	{ 
	$tag = '<meta name="keywords" content="Mobile Technology, Location Based Service, Mobile Coupons, Mobile Promotions Platrform, Blackberry Push Service Integration, Comprehensive set of Development Tools, User-friendly apps, Mobile Application Development, iPhone Application Development, Blackberry Application Development, Android Application Development" />';
		$tag1 = '<meta name="description" content="Way2smile solutions have developed customized iPhone based mobile application, BlackBerry Mobile Application, Android and Windows based mobile application solutions."/>';
		$pagetitle = 'Mobile Application Development | Way2smile';
		$techheadcla = 'current';
		include ('secondslide.php'); 
	} 
	else if($name == 'technology' && $page == 'cms') 
	{ 
		$techheadcla = 'current';
		include ('contenttech.php'); 
	} 
	else if($name == 'home' && $page == 'techcontent') 
	{ 
	   $tag = '<meta name="keywords" content="Architecture and Technology, Information Risk Management, IT Process and Service Management, IT Strategy and Governance, Master Data Management, Performance Engineering Solutions, Quality Assurance and Testing, Business Process Management, Change Management, Program Management" />';
		$tag1 = '<meta name="description" content="From devising CRM strategies, and deploying content management solutions to integrating enterprise-wide functions, Way2Smile Solutions helps you with comprehensive, efficient and robust solutions that meet your unique requirements. We help you in sustaining profitability in highly competitive rapidly changing environments. Also in building and managing complex customer information" />';
		$pagetitle = 'Technology Expertise | Way2smile';
		include ('techcontent.php'); 
	} 
	else if($name == 'home' && $page == 'mobilecontent') 
	{
		$tag = '<meta name="keywords" content="Mobile Website, Building and Managing Customer Information, Advertising Products, Vital Information, Minimal Ivestment, Maximum Returns, Movile Marketing Requirements, Unlimited Multimedia File Storage, Potential Customer" />';
		$tag1 = '<meta name="description" content="A mobile platform – mobile site – is so essential for every kind of business today. Mobile sites are the most effective ways of reaching your target audience. In todays age of technology, creating a mobile site is not a difficult task';
		$pagetitle = 'Mobile Website Development | Way2smile';
		$techheadcla = 'current';
		include ('mobilecontent.php'); 
	} 
	else if($name == 'home' && $page == 'webcontent') 
	{
	 $tag = '<meta name="keywords" content="eCommerce Management, Human Resources Outsourcing, Supply Chain Management, Application Servers, Enterprise Solutions, CRM Solutions, eLearning" />';
		$tag1 = '<meta name="description" content="Way2Smile Solutions understand the needs of a web presence for your business. We design, develop and promote sites in an attractive way to grow your business. Our Website design experience varies from Startups to enterprises with stunning User Experience" />';
		$pagetitle = 'Web Application | Way2smile';
	 include ('webcontent.php'); 
	 } 
	 else if($name == 'Search-Engine-Optimization' && empty($page)) 
	{
	    $tag = '<meta name="keywords" content="SEO, Search Engine Optimization,SEO Canada, SEO UK, SEO UAE, Google first page optimization dubai." />';
		$tag1 = '<meta name="description" content="Way2Smile Solutions Search Engine Optimization services in UAE, Dubai, UK, Canada, USA and India. Google ranking and first page optimization at affordable price." />';
		$pagetitle = 'Way2Smile Solutions Search Engine Optimization services';
	 include ('seocontent.php'); 
	 } 
	else if($name == 'storyfruit' && empty($page)) 
	{
	  $tag = '<meta name="keywords" content="Web Application, Parents and Guardians, Flash book, Flash Media Server, Info@way2smile.com, call us at +1-416-619-1189" />';
		$tag1 = '<meta name="description" content="Storyfruit is a web application built in LAMP Architecture integrating with Flash Media Server. Our Flash developers and expertise web developers created a perfect solution to read bed time stories virtually for kids. Its one of the complex design to record video and audio in a single window " />';
		$pagetitle = 'Way2Smile Solutions Web application | Storyfruit';
	 include ('storyfruit.php'); 
	 } 
	else if($name == 'upcomingeventz' && empty($page))
	 {
	    $tag = '<meta name="keywords" content="Web and Mobile Application, Business & Networking Events, Events & Strategic Partners, Blackberry Application, iPhone Application" />';
		$tag1 = '<meta name="description" content="UpcomingEventz is a web and Mobile application to find all the technology, business and networking events happening in the region" />';
		$pagetitle = 'Way2Smile Solution: Upcomingeventz';
	  include ('upcoming.php'); 
	  } 
	else if($name == 'powertruck' && empty($page)) 
	{
	 $tag = '<meta name="keywords" content="PHP Development, HTML/CSS Development, Video Integration, Jquerry, Ajax, Apache Server" />';
		$tag1 = '<meta name="description" content="Powertruck is a brochure website built for a Toronto Client. Client needs to promote his business through online and social media. Way2Smile solutions helped him to come up with a brochure site and launched its social media platforms with our SEO experts. As a result, client gains profit and new customer acquisition easily." />';
		$pagetitle = 'Way2Smile Solutions web application | Powertruck';
	 include ('powertrucking.php'); 
	 } 
	else if($name == 'energyproject' && empty($page)) { include ('energyproject.php'); }
	else if($name == 'ashokrexine' && empty($page)) 
	{ 
		$tag = '<meta name="keywords" content="Ashok Rexine, HTML/CSS Development, SEO, PHP Development, Apache in Linux Server" />';
		$tag1 = '<meta name="description" content="Way2Smile Solutions built a brochure website for Ashok Rexine. We built their core marketing strategy to showcase their products and services to their customers. It provides plenty of visitors and gained traction towards their services" />';
		$pagetitle = 'Way2Smile Solutions web application| Ashok Rexine';
		include ('ashokport.php'); 
	}
	else if($name == 'ast' && empty($page)) 
	{
	$tag = '<meta name="keywords" content="HTML/CSS Development, PHP Development, Apache in Linux Server" />';
		$tag1 = '<meta name="description" content="AST Trust is a brochure website that gives online access and broadcasts their services to clients. It’s built with PHP, MySQL, Html and Photoshop images. Reach us if you are looking for an online website at Info@way2smile.com" />';
		$pagetitle = 'Way2Smile Solutions brochure website | AST Trust'; 
		include ('astport.php'); 
		}
	else if($name == 'c2c' && empty($page)) 
	{
	    $tag = '<meta name="keywords" content="PHP Development, HTML/CSS Development, Video Integration, Jquerry, Ajax, Apache Server" />';
		$tag1 = '<meta name="description" content="Card2Contact.com is a informative brochure website for Card2Contact BlackBerry App. Users can find reviews, videos, blogs and the supporting models from the site" />';
		$pagetitle = 'Card2Contact:Way2Smile Portfolio'; 
	    include ('c2cport.php'); 
	}
	else if($name == 'deccan' && empty($page))
	 {
	 $tag = '<meta name="keywords" content="Deccanfurnishings, PHP Development, HTML/CSS Development, Video Integration, Jquery, Ajax, Apache Server" />';
		$tag1 = '<meta name="description" content="Online EPlatform to sell furniture products. Built with PHP, MySQL and integrated with shopping cart plugin. Users can purchase, pay and view their order details easily. Administrator can add products based on category and list items. Looking for a similar ePlatform site ? Contact us at Info@Way2Smile.com. " />';
		$pagetitle = 'Way2Smile solutions web application | Deccan Furniture'; 
	  include ('deccanport.php'); }
	else if($name == 'ggraj' && empty($page))
	 {
	 $tag = '<meta name="keywords" content="PHP Development, HTML/CSS Development, Video Integration, Jquerry, Ajax, Apache Server" />';
		$tag1 = '<meta name="description" content="To attract International Customers, GGRaj exports, A company that ships vegetables, fruits and spices needs a high standard, elegant website" />';
		$pagetitle = 'GGRaj Exports:Way2Smile Portfolio'; 
	  include ('ggrajport.php');
	   }
	else if($name == 'horizon' && empty($page)) 
	{
	    $tag = '<meta name="keywords" content="Horizon Modular Kitchen, PHP Development, HTML/CSS Development, Video Integration, Jquery, Ajax, Apache Server" />';
		$tag1 = '<meta name="description" content="Classic website designed by Way2Smile Solutions designers. Elegant look to promote business, products, services and their Interior furniture. Integrated with Social Media to ramp up communication" />';
		$pagetitle = 'Way2Smile Solutions web application | Horizon Modular kitchen'; 
	 include ('horizport.php'); 
	 }
	else if($name == 'rfid-solution-provider' && empty($page)) 
	{  
		$pagetitle = 'Way2Smile Solutions: RFID Technology'; 
		include ('rfid.php'); 
	}
	else if($name == 'careers' && empty($page)) { include ('careers.php'); }
	else if($name == 'portumbnile' && empty($page)) { include ('portfolio_tumbnile'); }
	else if($name == 'madhurai' && empty($page))
	 {
	 $tag = '<meta name="keywords" content="Madurai Vaidyanatha iyer, PHP Development, HTML/CSS Development, Video Integration, Jquery, Ajax, Apache Server" />';
		$tag1 = '<meta name="description" content="At Way2Smile Solutions, we make it our responsibility to help your app stand out from the competition. We deliver iPhone apps, Android apps, BlackBerry apps, .Net application, Php application at top notch quality and perfection" />';
		$pagetitle = 'Madurai Vaidyanatha iyer | Way2smile Solutions'; 
	  include ('mduport.php'); }
	else if($name == 'PowerTruck-logistics' && empty($page)) 
	{
	$tag = '<meta name="keywords" content="Way2Smile solutions brochure design portfolio, brochure design canada, power truck logistics web design, web design toronto" />'; 
			$tag1 = '<meta name="description" content="Toronto Based Web designing company Way2Smile Solutions  - Power Truck logistics brochure design and development." />';
		$pagetitle = 'Way2Smile Solutions brochure design portfolio - Power Truck logistics ';
	 include ('powerport.php'); }
	else if($name == 'hope' && empty($page)) 
	{
	$tag = '<meta name="keywords" content="Hope Charitable Trust, PHP Development, HTML/CSS Development, Video Integration, Jquery, Ajax, Apache Server, Card2Contact Blogs, Wordpress" />'; 
			$tag1 = '<meta name="description" content="Way2Smile Solutions built a brochure web application for Hope Charitable Trust.  It’s a social organization and needs web and social media presence. Way2Smile Solutions Search Engine Optimization team built a strategy to showcase trust`s features and activities to the market. It provides plenty of visitors and gained traction towards the charitable trust." />';
		$pagetitle = 'Way2Smile Solutions web application | Hope Charitable Trust ';
	 include ('hopeport.php');
	  }
	else if($name == 'c2cblog' && empty($page))
	 {
	 $tag = '<meta name="keywords" content="Card2contact, Blackberry app, Card2Contact Blogs, Wordpress" />'; 
			$tag1 = '<meta name="description" content="Wordpress blog built for Card2Contact. With customized themes, exclusive header and footer, inbuilt plugins, Way2Smile delivered wordpress blog with admin access. Reach us if you are looking for a blog " />';
		$pagetitle = 'Way2Smile Solutions | Wordpress Blog';
	  include ('c2cblogport.php'); }
	else if($name == 'culture' && empty($page)) 
	{
	$tag = '<meta name="keywords" content="Card2contact, Blackberry app, Card2Contact Blogs, Wordpress" />'; 
			$tag1 = '<meta name="description" content="The Culture Builders Profiling Tool is a technical implementation of two years research done for the book The culture builders" />';
		$pagetitle = 'Culture builders Tool| Way2smile Portfolio';
	
	 include ('cultureport.php'); }
	else if($name == 'buliding' && empty($page)) 
	{
	$tag = '<meta name="keywords" content="Card2contact, Blackberry app, Card2Contact Blogs, Wordpress" />'; 
			$tag1 = '<meta name="description" content="At Way2Smile Solutions, we make it our responsibility to help your app stand out from the competition. We develop iPhone apps, Android apps, BlackBerry apps, .Net application, Php application at top notch quality and perfection" />';
		$pagetitle = 'Building and Constructions | Way2smile Portfolio';
	 include ('bulidport.php'); 
	 }
	else if($name == 'choice' && empty($page)) 
	{
	 $tag = '<meta name="keywords" content="interior furnitures, PHP Development, HTML/CSS Development, Jquery, Ajax " />'; 
			$tag1 = '<meta name="description" content="Exclusive furniture showroom website to promote their products. Way2Smile Solutions built a unique design that provides an online platform to sell interior and home furniture. It’s an e-platform built with PHP, MySQL and hosted in Windows server." />';
		$pagetitle = 'Way2Smile Solutions | Choice Decors';
	 include ('choiceport.php'); }
	else if($name == 'deepmalai' && empty($page)) 
	{
	$tag = '<meta name="keywords" content="Deepamalai, PHP Development, HTML/CSS Development, Jquery, Ajax" />';
			$tag1 = '<meta name="description" content="Integrated with social media, tamil fonts and videos to convey the message about Thiruvannamalai deepam."/>';
		$pagetitle = 'Way2Smile Solutions web application | Deepamalai ';
	 include ('deepport.php');
	  }
	else if($name == 'malavika' && empty($page))
	 {
	 $tag = '<meta name="keywords" content="Deepamalai, PHP Development, HTML/CSS Development, Jquery, Ajax" />';
			$tag1 = '<meta name="description" content="At Way2Smile Solutions, we make it our responsibility to help your app stand out from the competition. We develop iPhone apps, Android apps, BlackBerry apps, .Net application, Php application at top notch quality and perfection"/>';
		$pagetitle = 'Malavika Sarukkai | Way2smile Portfolio';
	  include ('malaport.php'); }
	else if($name == 'source' && empty($page)) 
	{
	$tag = '<meta name="keywords" content="Sourcebull.co, Java Development, Tomcat Server, HTML/CSS Development" />';
			$tag1 = '<meta name="description" content="It’s a niche website integrated with Facebook, Twitter and other social media platforms." />';
		$pagetitle = 'Way2Smile Solutions web application | Sourcebull';
		 include ('sourceport.php'); 
		 }
		 
		 else if($name == 'php-projects' && $page == 'energy') 
	{ 
	   $tag = '<meta name="keywords" content="Way2Smile Solutions PHP development, Php development portfolio,content management system, CMS project,energyproject UK" />';
		$tag1 = '<meta name="description" content="Way2Smile Solutions php development project - UK based human resource management company name  EnergyProject. Developed under Content Management System ( CMS )" />';
		$pagetitle = 'Way2Smile Solutions php project - The Energy Project UK';
		include ('energyproject.php'); 
	} 
	
	else if($name == 'tsspowersystem' && empty($page)) 
	{
	$tag = '<meta name="keywords" content="TSS Power Systems, HTML/CSS Development" />';
			$tag1 = '<meta name="description" content="TSS Power Systems is specialized in providing Infrastructure support services in High Voltage power transmission sector. TSS Power systems focus on servicing International clients and wanted a web presence to tell their services, previous projects, galleries. When Way2Smile Solutions approached TSS Power Systems, It understands the needs of their web presence and built a simple site with Ruby on Rails, Html and CSS." />';
		$pagetitle = 'Way2Smile Solutions web application| TSS Power Systems';
	 include ('tssport.php');
	  }
	else if($name == 'sendaquote' && empty($page)) { include ('sendaquote.php'); }
	else if($name == 'privacy-policy' && empty($page)) 
	{
	$tag = '<meta name="keywords" content="Way2Smile Solutions privacy policy" />';
	$tag1 = '<meta name="description" content="Way2Smile Solutions privacy policy" />';
	$pagetitle = 'Way2Smile Solutions privacy policy';
	include ('privacypolicy.php'); 
	 }
	else if($name == 'terms-and-conditions' && empty($page)) 
	{
	$tag = '<meta name="keywords" content="Way2Smile Solutions Terms and Conditions" />';
	$tag1 = '<meta name="description" content="Way2Smile Solutions Terms and Conditions" />';
	$pagetitle = 'Way2Smile Solutions Terms and Conditions'; 
	include ('termsconditions.php'); 
	}
	else if($name == 'iPhone' && empty($page)) { $pagetitle = 'Iphone:Way2Smile Portfolio'; include ('iphoneport.php'); }
	else if($name == 'blackberry' && empty($page)) { $pagetitle = 'Blackberry:Way2Smile Portfolio'; include ('blackberryport.php');  }
	else if($name == 'android' && empty($page)) {$pagetitle = 'Android:Way2Smile Portfolio';  include ('androidport.php'); }
	else if($name == 'symbian' && empty($page)) {$pagetitle = 'Symbian:Way2Smile Portfolio';  include ('symbianport.php'); }
	else if($name == 'ipad' && empty($page)) {$pagetitle = 'Ipad:Way2Smile Portfolio';  include ('ipadport.php'); }
	else if($name == 'mobileweb' && empty($page)) {$pagetitle = 'Mobilewebs:Way2Smile Portfolio'; include ('mobilewebsport.php'); }
	
	else if($name == 'card2contact-pressrelease' && empty($page)) {$pagetitle = 'Card2Contact Press Release'; include ('c2c-android-pressRelease.php'); }
	
	else if($name == 'card2contact-mediadocument' && empty($page)) {$pagetitle = 'Card2Contact Media Document'; include ('c2c-media-document.php'); }
	else if($name == 'androidupdate' && empty($page)) {$pagetitle = 'Android App Update Info'; include ('blog/index.php'); }
	
	else if($name == 'Products-W2S' && empty($page)) {$pagetitle = 'W2S Products'; include ('w2s_products.php'); }
	else if($name == 'E-Commerce' && empty($page)) {$pagetitle = 'Android App Update Info'; include ('e-commerce.php'); }
	else if($name == 'Card2Contact' && empty($page)) {$pagetitle = 'Android App Update Info'; include ('c2c.php'); }
	else if($name == 'Hotel-Management-System' && empty($page)) {$pagetitle = 'Android App Update Info'; include ('hms.php'); }
	else if($name == 'Document-Management-System' && empty($page)) {$pagetitle = 'Android App Update Info'; include ('dms.php'); }
	
	else if($name == 'php-application-storyfruit' && empty($page)) 
	{
	 $tag = '<meta name="keywords" content="PHP Developers, Lamp Developers, Wamp Developers, PHP Development,online shopping, e-commerce website development,Social networking websites" />';
	 $tag1 = '<meta name="description" content="Our development team counts on experienced PHP web developers who have effectively completed a number of PHP web programming projects like online shopping / e-commerce website development, CRM, CMS, social networking websites, community websites, web- chat environments, message boards sites etc" />';
	 $pagetitle = 'Php development Storyfruit | Way2Smile Solutions '; 
	 include ('storyfruit_new.php');
	 }
	else if($name == 'portofolioc2c' && empty($page)) { $pagetitle = 'Portfolio:C2C'; include ('portfolio.php');}
	else if($name == 'Microsoft-Application-Profiling-Tool' && empty($page)) 
	{ 
	$tag = '<meta name="keywords" content=".Net Development, Microsoft .NET solutions, .Net development services, Custom Asp.Net applications, e-commerce solutions" />';
	$tag1 = '<Meta name="description" content=" We have a team of qualified .NET consultants, offering custom Asp.Net applications, .NET programming, .NET based e-commerce solutions and data management solutions" />';
	$pagetitle = 'Microsoft Application Profiling Tool/';
	include ('tcb_new.php');
	}
	
	else if($name == 'android-apps-development-methodology' && empty($page)) 
	{
	$tag = '<meta name="keywords" content="Android Apps development company Canada, Android apps developers Dubai, Android developers Qatar, Austin based apps development company" />';
	$tag1 = '<meta name="description" content="Android Apps development in Canada, Austin, Qatar, Dubai, Toronto and India. Android Smartphone, Tablet apps development solutions." />';
	 $pagetitle = 'Android Apps Development company in Canada | Way2Smile Solutions/'; 
	include ('android_apps_develop_methodology.php');
	}
	
	else if($name == 'iphone-apps-development-methodology' && empty($page)) 
	{
	$tag = '<meta name="keywords" content="iPhone Apps development company Doha, Austin, USA. Apps developers Toronto, Apple iPhone developers Qatar, Dubai." />';
	$tag1 = '<meta name="description" content="iPhone Apps development in Doha, Austin, Dubai, Toronto and India. iPhone smartphone, smartphone custom apps development solutions." />';
    $pagetitle = 'iPhone Apps development company in Doha | Way2Smile Solutions/'; 
	include ('iphone_apps_develop_methodology.php');
	}
	
	else if($name == 'ipad-apps-development-methodology' && empty($page)) 
	{
	$tag = '<meta name="keywords" content="iPad Apps development company Austin, USA. Apps developers Toronto, Apple iPad developers Qatar, Dubai." />';
	$tag1 = '<meta name="description" content="iPad Apps development in Austin, Qatar, Dubai, Toronto and India. iPad Tablet, Tablet custom apps development solutions." />';
	$pagetitle = 'iPad Apps development company in Austin | Way2Smile Solutions/'; 
	include ('ipad_apps_develop_methodology.php');
	}
	else if($name == 'blackberry-apps-development-methodology' && empty($page)) 
	{
	$tag = '<meta name="keywords" content="BlackBerry Apps development company Waterloo, BlackBerry apps developers Toronto, BlackBerry developers Qatar, Austin based apps development company" />';
	$tag1 = '<meta name="description" content="BlackBerry Apps development in Toronto, Canada, Waterloo, Qatar, Dubai, Austin and India." />';
	$pagetitle = 'BlackBerry Apps Development company in Waterloo, Toronto | Way2Smile Solutions/'; 
	include ('bb_apps_develop_methodology.php');
	}
	
	else if($name == 'Enterprise-application-development' && empty($page)) 
	{
	$tag = '<meta name="keywords" content="Enterprise Apps Development, User Experience Design, Offline and Online App Development, Server Setup and Configuration,  Enterprise application development, enterprise server setup, enterprise apps developer, enterprise service provider, web technology provider, small business developer" />';
	$tag1 = '<meta name="description" content="At Way2Smile Solutions, we make it our responsibility to help your app stand out from the competition. We deliver iPhone apps, Android apps, BlackBerry apps, .Net application, Php application at top notch quality and perfection." />';
	 $pagetitle = 'Enterprise Apps Development | Way2Smile Solutions'; 
	include ('sparetime_new.php');
	}
	else if($name == 'Enterprise-Reporting-Tool-Using-Microsoft-Framework' && empty($page)) 
	{
	 $tag = '<meta name="keywords" content="" />';
	$tag1 = '<meta name="description" content="Way2Smile  Solutions create a flexible online tool that leverages three years of research for a leading business book to measure leaders against a global population, giving insight into management style and engagement capacity'; 
	include ('case_study.php');
	}
	
	
	else if($name == 'Enterprise-mobility' && empty($page)) 
	{
	$tag = '<meta name="keywords" content="Small business web solutions, medium business mobile solutions in Doha, Enterprise business solutions providers, Enterprise apps development company" />';
	$tag1 = '<meta name="description" content="Way2Smile Solutions offer web and mobile solutions for Small and Medium Enterprises in Doha." />';
	$pagetitle = 'Small Business web | Mobile solutions development company in Doha | Way2Smile Solutions'; 
	include ('enterprisemobility.php');
	}
	
	else if($name == 'Enterprise-mobility-solutions' && empty($page))
	 { 
	 $tag = '<meta name="keywords" content="Enterprise Web application development company Dubai, UAE, Doha, Qatar, Austin USA, Toronto Canada. Enterprise apps development. Custom Apps developers in USA." />';
	$tag1 = '<meta name="description" content="Enterprise web solutions company Dubai, UAE, Chennai, Bangalore,India.  Web and Mobile Enterrprise apps offshore development company." />';
	 $pagetitle = 'Enterprise Solutions development company in Dubai | Way2Smile Solutions'; 
	 include ('enterprise_more.php');
	 }
	else if($name == 'Apps-development-methodology' && empty($page)) 
	{
	$tag = '<meta name="keywords" content="Mobile application development dubai, Mobile apps development canada, Mobile developers Qatar, toronto based apps development company" />';
	$tag1 = '<meta name="description" content="Mobile Application development in Dubai, Qatar, Toronto, Austin. iPhone,Android and Smartphone apps development solutions. Custom App developers" />';
	$pagetitle = 'Mobile Apps Development methodology in Dubai | Way2smile Solutions';  
	include ('mobileapp_methodology.php');
	}
		
	else if($name == 'Android-application-development' && empty($page)) 
	{
	$tag = '<meta name="keywords" content="Android Apps Developer, Android Apps Development Company, Samsung Apps, HTC Apps Developer, Android Apps Development, Mobile Innovations, Mobile Solutions, Enterprise Apps Development" />';
			$tag1 = '<meta name="description" content="At Way2Smile Solutions, our Android app development team is able to help you decide how to take best advantage of android platform" />';
	 $pagetitle = 'Android Apps Development | Way2Smile Solutions'; 
	 include ('android.php');
	 }
	
	else if($name == 'BlackBerry-apps-development' && empty($page)) 
	{
	$tag = '<meta name="keywords" content="BlackBerry Apps developers, Cascades applications for BlackBerry, BlackBerry Apps development, Enterprise Apps Development" />';
			$tag1 = '<meta name="description" content="Way2smile Solutions BlackBerry App developers use BlackBerry proprietary APIs to develop Java or cascades applications for BlackBerry" />';
	 $pagetitle = 'BlackBerry Apps Development | Way2Smile Solutions';
	  include ('blackberry.php');
	  }
	else if($name == 'iPad-apps-development' && empty($page)) 
	{
	$tag = '<meta name="keywords" content="iPad Apps Developers, iPad Apps Development Team, Apple Developers, Apple Development Team, iOS Developers, Business leaders, iPad Mobile Apps, Smartphone Apps development team,  Enterprise Apps Development" />';
			$tag1 = '<meta name="description" content="We are confident that our iPad developers produce top notch quality apps and the collaboration with delivery manager, developers and UX designers’ results in pixel perfect award winning iPad applications" />';
	 $pagetitle = 'iPad Apps Development | Way2Smile Solutions'; 
	 include ('ipad.php');
	 }
	else if($name == 'iPhone-apps-development' && empty($page)) 
	{
	$tag = '<meta name="keywords" content="iPhone applications, iPhone apps development team, Apple Developers, Apple Development Team, iOS Developers, iPhone developers, Enterprise Apps Development" />';
			$tag1 = '<meta name="description" content="We are confident that our iPhone developers produce top notch quality apps and the collaboration with delivery manager, developers and UX designers’ results in pixel perfect award winning iPhone applications" />';
	 $pagetitle = 'iPhone Apps Development | Way2Smile Solutions ';
	  include ('iphone.php');
	 }
	else if($name == 'Mobile-apps-marketing' && empty($page)) 
	{
		$tag = '<meta name="keywords" content="Mobile apps marketing, mobile app world, iPhone apps Marketing, BlackBerry apps Marketing, Android apps Marketing, Windows Mobile apps Marketing" />';
			$tag1 = '<meta name="description" content="At Way2Smile solutions, we engage in application marketing for almost all kinds of popular mobile apps - iPhone apps, BlackBerry apps, Android apps, Windows Mobile apps and others" />';
	 $pagetitle = 'Mobile Apps Marketing | Way2Smile Solutions '; 
	 include ('mobappsmarket.php');
	 }
	else if($name == 'Mobile-apps-marketing-methodology' && empty($page)) 
	{
	$tag = '<meta name="keywords" content="Application marketing, App developers, Expertise apps development team, Mobile promotion" />';
			$tag1 = '<meta name="description" content="Our mobile app marketing process starts with creating buzz around your app, pitch Industry Influencers and leverage social media to promote" />';
	 $pagetitle = 'Mobile Apps Marketing Approach | Way2Smile Solutions ';
	  include ('mobappsmarket_methodology.php');
	  }
	else if($name == 'Web-apps-development' && empty($page)) 
	{ 
	$tag = '<meta name="keywords" content="Web Development, System integration solutions, Management service, Testing Solutions" />';
			$tag1 = '<meta name="description" content="We offer PHP Development, Microsoft .Net Development, Java Development, Wordpress Development. Our team has expertise developers in various skillsets and we develop enterprise, ecommerce, web design and mobile applications" />';
	$pagetitle = 'Web Apps development | Way2Smile Solutions'; 
	include ('webdevelop.php');
	}
	else if($name == 'Web-apps-development' && $page == 'php-app-development')
	 {
	 $tag = '<meta name="keywords" content="PHP Development, online shopping / e-commerce website development, Social networking websites" />';
	 $tag1 = '<meta name="description" content="Our development team counts on experienced PHP web developers who have effectively completed a number of PHP web programming projects like online shopping / e-commerce website development, CRM, CMS, social networking websites, community websites, web- chat environments, message boards sites etc" />';
	  $pagetitle = 'Php development | Way2Smile Solutions '; 
	  include ('php_develop.php');
	  }
	else if($name == 'Web-apps-development' && $page == 'java-app-development')
	 { 
	 $tag = '<meta name="keywords" content="Java Development, Software Development Life Cycle, Object Oriented Analysis & Design" />';
			$tag1 = '<meta name="description" content="We have wealthy expertise in the entire software Development Life Cycle (SDLC) and have strong hands on experience in J2EE, Web 3.0 and Object Oriented Analysis & Design" />';
	 $pagetitle = 'Java development | Way2Smile Solutions';
	  include ('java_develop.php');
	  }
	else if($name == 'Web-apps-development' && $page == 'dotnet-app-development')  
	{
	$tag = '<meta name="keywords" content=".Net Development, Microsoft .NET solutions, .Net development services, Custom Asp.Net applications, e-commerce solutions" />';
	$tag1 = '<Meta name="description" content=" We have a team of qualified .NET consultants, offering custom Asp.Net applications, .NET programming, .NET based e-commerce solutions and data management solutions" />';
	 $pagetitle = 'Microsoft framework developers | Way2Smile Solutions ';
	  include ('dotnet_develop.php');
	  }
	else if($name == 'Mobile-apps-marketing' && $page == 'Leveraging-social-media')
	{
	$tag = '<meta name="keywords" content="Mobile Apps Social Media Promotion in Dubai,  Mobile Application Social media Marketing methods in Toronto, Apps social media strategy  developer in Bangalore" />';
			$tag1 = '<meta name="description" content="Mobile apps social media promotion, mobile application social media marketing methods in Dubai, Increase number of downloads for mobile apps" />';
	 $pagetitle = 'Mobile Apps Social Media Marketing and Promotion company in Dubai | Way2Smile Solutions'; 
	 include ('leveraging_social_media.php');
	 }
	else if($name == 'Mobile-apps-marketing' && $page == 'Industry-influencer-approach') 
	 {
	 $tag = '<meta name="keywords" content="Mobile Apps Promotion, Mobile Application Marketing methods in Qatar,  Apps Marketing methods in Dubai" />';
			$tag1 = '<meta name="description" content="Mobile Apps promotion strategy in Qatar, revenue generation from mobile apps, increase number of downloads for mobile apps." />';
	  $pagetitle = 'Mobile Apps Marketing and promotion company in Qatar | Way2Smile Solutions'; 
	  include ('industry_influencers.php');
	  }
	
	else if($name == 'about-us' && empty($page))  { 
	$tag = '<meta name="keywords" content="Providing professional IT solutions, Services and consulting businesses, Smartphone apps." />';
	$tag1 = '<Meta name="description" content=" At Way2Smile Solutions, We add value for our customer by providing professional IT solutions, services and consulting businesses" />';
	$pagetitle = 'Why Way2Smile Solutions – About us'; 
	include ('about_us.php');
	}
	
	else if($name == 'storyfruitport' && empty($page))
	 {
	    $tag = '<meta name="keywords" content="Storyfruit, HTML/CSS Development, PHP Development" />';
		$tag1 = '<meta name="description" content="Storyfruit is a web application built in LAMP Architecture integrating with Flash Media Server. Our Flash developers and expertise web developers created a perfect solution to read bed time stories virtually for kids. It’s one of the complex design to record video and audio in a single window" />';
		$pagetitle = 'Way2Smile Solutions Web application | Storyfruit'; 
	  include ('storyport.php');
	   }
	else if($name == 'upcomingport' && empty($page)) 
	{
	    $tag = '<meta name="keywords" content="UpcomingEventz, web and Mobile application, Java Development, GWT Development" />';
		$tag1 = '<meta name="description" content="UpcomingEventz is a web application built with Java, Jsp, GWT and GXT framework. It provides free listing of events, easy search to find events based on categories, name and location. UpcomingEventz iPhone and BlackBerry Mobile App is also built to gain more traction and users.  Reach us if you are looking for a Mobile App at Info@Way2Smile.com" />';
		$pagetitle = 'Way2Smile Solutions Java Development | UpcomingEventz '; 
	 include ('upport.php'); 
	 }

	else if($name == 'products' && empty($page)) 
	{ 
	   include ('products.php'); 
	 } 
	
	else if($name == 'portofolio') 
	{
		$proheadcla = 'current';
		if($page == '' || $page == '1')
		{
			$tag = '<meta name="keywords" content="Culture builders Tool, Profiling Tool, Technical implementation, Employee performance, Complex algorithms, .Net Framework, Customized PDF report generator, Storyfruit, Flash Media Servers, LAMP Architecture, eBook Store, Record their video and audio, Enthusiastic Entrepreneur." />'; 
			$tag1 = '<meta name="description" content="The Culture Builders Profiling Tool is a technical implementation of two years research done for the book The culture builders; leadership strategies for employee performance." />';
		$pagetitle = 'Culture Builders Tool:Way2Smile Portfolio';
		}
		else if($page == '2')
		{
			$tag = '<meta name="keywords" content="Card2Contact, Blackberry App, Business card, Android, BlackBerry 10, Integrates your contact, Add notes, Follow-up, SpareTime App, Maintenance Management System., CMMS, Image processing techniques, iOS Native platform." />'; 
			$tag1 = '<meta name="description" content="Card2Contact is a patent pending mobile app that shows everything about your contacts right inside your smartphone." />';
		$pagetitle = 'Card2Contact:Way2Smile Portfolio';
		}
		else if($page == '3')
		{
			$tag = '<meta name="keywords" content="GGRaj Exports, PHP Development, HTML/CSS Development, Video Integration, Jquerry, Ajax, Apache Server, Horizon Modular Kitchen" />';
			$tag1 = '<meta name="description" content="Way2Smile Created an website to attract International Customers, A company that ships vegetables, fruits and spices needs a high standard, elegant website" />';
		$pagetitle = 'GGRaj exports:Way2Smile Portfolio'; 
		}
		else if($page == '4')
		{
			$tag = '<meta name="keywords" content="Madurai Vaidyanatha Iyer, Tamil Fonts, PHP Development, HTML/CSS Development, Video Integration, Jquerry, Ajax, Apache Server, Power Trucking" />'; 
			$tag1 = '<meta name="description" content="Way2Smile Solutions met Powertrucking in Canada, the client is in a real hurry to get into online presence. The market is so demanding and the client wanted to promote their site in a week. We realised their urgency and acted accordingly" />';
		$pagetitle = 'Powertrucking:Way2Smile Portfolio'; 
		}
		else if($page == '5')
		{
			$tag = '<meta name="keywords" content="Hope Charitable Trust, PHP Development, HTML/CSS Development, Video Integration, Jquerry, Ajax, Apache Server, Card2Contact Blogs, Wordpress" />'; 
			$tag1 = '<meta name="description" content="Hope Charitable Trust its a social organisation with an objective to serve poor and needy people. its an informative jquery site conveys the message clearly.Wordpress blogs to express the views and PR news to users" />';
		$pagetitle = 'Card2Contact Blogs:Way2Smile Portfolio';
		}
		else if($page == '6')
		{
			$tag = '<meta name="keywords" content="Bilding and Construction, Online magazine, PHP Development, HTML/CSS Development, Jquerry, Ajax, Choice Decors" />'; 
			$tag1 = '<meta name="description" content="Building and Construction is an online magazine that covers Real estate, buildings, construction and home loans" />';
		$pagetitle = 'Building and Constructions:Way2Smile Portfolio';
		}
		else if($page == '7')
		{
			$tag = '<meta name="keywords" content="Deepamalai, PHP Development, HTML/CSS Development, Jquerry, Ajax, Malavika Sarukkai" />';
			$tag1 = '<meta name="description" content="Gorgeous and delegated website to project Malavika Sarukkais dance performance!. Second to none in design and quality" />';
		$pagetitle = 'Malavika Sarukkai:Way2Smile Portfolio';
		}
		else if($page == '8')
		{
			$tag = '<meta name="keywords" content="Sourcebull.co, Java Development, Tomcat Server, HTML/CSS Development, TSS Power System" />';
			$tag1 = '<meta name="description" content="Integrated with Social Media, videos and flash.TSS Power System Clearly shows the Operational process and product management systems" />';
		$pagetitle = 'Sourcebull.co:Way2Smile Portfolio';
		}
		else if($page == '9')
		{
			$tag = '<meta name="keywords" content="Upcoming Eventz, UX Design, GWT Development, JAVA Development, Social Media Integration, Internet Marketing, Blackberry OS 5, 6 and 7
" />'; 
            $tag1 = '<meta name="UpcomingEventz is a web and Mobile application to find all the technology, business and networking events " />';
		$pagetitle = 'Upcoming Eventz:Way2Smile Portfolio';
		}
		else if($page == '10')
		{
			$tag = '<meta name="keywords" content="Upcoming Eventz iPhone App, IOS Development, Customer Needz, Online Reservation, Paypal Integration, Netbanking, Cretis Card Payment Integration, Quick Search, Ajax, Jquerry, LAMP, HTML/CSS Development" />'; 
			$$tag1 = '<meta name="description" content="iPhone App for UpcomingEventz.It helps the users to search and find the events based on their search criteria and gets the results" />';
		$pagetitle = 'Upcoming Eventz iPhone App:Way2Smile Portfolio';
		}
		else if($page == '11')
		{
			$tag = '<meta name="keywords" content="Storyfruit, Requirement Analysis, DB Design, Flash Media Integration, PHP Web Development, Video Module Recording, HTML/CSS Development, Jquerry, Ajax, The Energy Product, Linux Ser Configuration, WHM Panel Setup, Drupal Initialization, Cornjob Setup" />';
			$tag1 = '<meta name="description" content="Storyfruit is a web application that helps parents and guardians to read bed time stories virtually for their kids" />';
		$pagetitle = 'Storyfruit:Way2Smile Portfolio';
		}
		else if($page == '12')
		{
			$tag = '<meta name="keywords" content="Co-ignite, JSP, Java-Beans, GWT, Struts, Ajax, Jquerry, Hibernate, Mysql, Tomcat Web Server, Linux Server, FTP Tool, Spring, Jboss Server, Linux" />'; 
			$tag1 = '<meta name="description" content="Co-ignite is a 360 degree performance appraisal tool between the appraiser, appraise and peers" />';
		$pagetitle = 'Co-ignite:Way2Smile Portfolio';
		}
		else if($page == '13')
		{
			$tag = '<meta name="keywords" content="Dpa Library Pages, HTML/CSS Development, Mysql, PHP Development, Apache and Linux Server, Way2rental, Ruby on Rails, Grails" />'; 
			$tag1 = '<meta name="description" content="The web application helps admin to post their books,  reviews and ratings. Users can view dpa library to find whats their rating about a book"/>';
			$pagetitle = 'Dpa library Pages:Way2Smile Portfolio';
		}
		
	include ('portfolio.php'); 
	}
	
	else if($name == 'ashokport' && empty($page)) 
	{
	 include ('ashokport.php'); 
	}
	else if($name == 'astport' && empty($page)) 
	{
	 include ('astport.php'); 
	}
	else if($name == 'portofolio'  && $page == 'bulidport') 
	{
	 include ('bulidport.php'); 
	}
	else if($name == 'portofolio'  && $page == 'c2cport') 
	{
	 include ('c2cport.php'); 
	}
	else if($name == 'portofolio'  && $page == 'choiceport') 
	{
	 include ('choiceport.php'); 
	}
	else if($name == 'portofolio'  && $page == 'cultureport') 
	{
	 include ('cultureport.php'); 
	}
	else if($name == 'portofolio'  && $page == 'deccanport') 
	{
	 include ('deccanport.php'); 
	}
	else if($name == 'portofolio'  && $page == 'deepport') 
	{
	 include ('deepport.php'); 
	}
	else if($name == 'portofolio'  && $page == 'ggrajport') 
	{
	 include ('ggrajport.php'); 
	}
	else if($name == 'portofolio'  && $page == 'hopeport') 
	{
	 include ('hopeport.php'); 
	}
	else if($name == 'portofolio'  && $page == 'horizport') 
	{
	 include ('horizport.php'); 
	}
	else if($name == 'portofolio'  && $page == 'malaport') 
	{
	 include ('malaport.php'); 
	}
	else if($name == 'portofolio'  && $page == 'mduport') 
	{
	 include ('mduport.php'); 
	}
	else if($name == 'portofolio'  && $page == 'powerport') 
	{
	 include ('powerport.php'); 
	}
	else if($name == 'portofolio'  && $page == 'sourceport') 
	{
	 include ('sourceport.php'); 
	}
	else if($name == 'portofolio'  && $page == 'spareport') 
	{
	 include ('spareport.php'); 
	}
	else if($name == 'portofolio'  && $page == 'energyproject') 
	{
	 include ('energyproject.php'); 
	}
	else if($name == 'portofolio'  && $page == 'storyport') 
	{
	 include ('storyport.php'); 
	}
	else if($name == 'portofolio'  && $page == 'tssport') 
	{
	 include ('tssport.php'); 
	}
	else if($name == 'portofolio'  && $page == 'upport') 
	{
	 include ('upport.php'); 
	}
	else if($name == 'firstslide' && empty($page)) 
	{ 
	        $tag = '<meta name="keywords" content="Way2Smile Solutions is a premier IT company located in Canada, Provide innovative Web and Mobile solutions, Well-structured development methodologies, Project management methodologies, Customized applications,  enterprise solutions, Scalable and cost effective solutions" />'; 
			$tag1 = '<meta name="description" content="Way2Smile Solutions, we have the potential and experience to deliver what your business needs. If you want to know more about our IT expertise, project management methodologies, work culture or technical infrastructure, contact us via this form or look at our Technology page"/>';
			$pagetitle = 'Way2Smile Solutions Professional IT Solutions';
		include ('firstslidecontent.php'); 
	}
else if($name == 'webdevelopment' && empty($page)) 
	{ 
		$tag = '<meta name="keywords" content="Mobile Technology, Location Based Service, Mobile Coupons, Mobile Promotions Platrform, Blackberry Push Service Integration, Comprehensive set of Development Tools, User-friendly apps, Mobile Application Development, iPhone Application Development, Blackberry Application Development, Android Application Development" />';
		$tag1 = '<meta name="description" content="Way2Smile Solutions team has sound experience and expertise in developing highly interactive mobile applications using the latest operating systems that are extremely user-friendly and functional"/>';
		$pagetitle = 'Web Application Development | Way2smile';
		include ('webservice.php'); 
	}
	else if($name == 'mobile-application-development' && empty($page)) 
	{ 
		$tag = '<meta name="keywords" content="Mobile Technology, Location Based Service, Mobile Coupons, Mobile Promotions Platrform, Blackberry Push Service Integration, Comprehensive set of Development Tools, User-friendly apps, Mobile Application Development, iPhone Application Development, Blackberry Application Development, Android Application Development" />';
		$tag1 = '<meta name="description" content="Way2smile solutions have developed customized iPhone based mobile application, BlackBerry Mobile Application, Android and Windows based mobile application solutions."/>';
		$pagetitle = 'Mobile Application Development | Way2smile';
		$techheadcla = 'current';
		include ('secondslide.php'); 
	}
		
	else if($name == 'c2c' && empty($page)) 
	{ 
		$tag = '<meta name="keywords" content="Card2Contact App, Business card reader Solution, Convert business cards to contacts, Scan a card, Integrate contacts with calendar, Business App, Android App" />';
		$tag1 = '<meta name="description" content="Card2Contact is an Android app built with our expertise Android developers. With the help of our best in class User Experience designers, Unique business concept identified by our business leaders, Extensive marketing from SEO team and Mobile strategy marketing team, Card2Contact is built successfully. It’s an app that shows everything about your contacts right inside your smartphone. Reach us if you are looking for similar app" />';
		$pagetitle = 'Way2Smile Solutions Android App development | Card2Contact';
		include ('c2cport.php'); 
	} 
else if($name == 'contact' && empty($page)) 
{
	   $tag = '<meta name="keywords" content="Name & Surname, Company, Subject, Message, Visit our office, 5800 Ambler Road, Mississauga, ON, Canada L4W 4J4, 19, P.S. Tower, Govindarajapuram 2nd Street, Adyar, Chennai-600020" />';
			$tag1 = '<meta name="description" content="If you think you have a project that we will work well together on, or just want to say hello, please feel free to fill out the contact form. We will get back to you as soon as possible!"/>';
		$pagetitle = 'Contact Way2Smile Solutions';
		$contheadcla = 'current';
 include ('contact.php'); 
 } 
 else if($name == 'mobileapp' && empty($page)) 
 {
   		$tag = '<meta name="keywords" content="Smart Business, Smartphone, Image Processing, Business Application, Home Maintenance Services, Logistics & Delivery Services, Field Sales Services, Logistics & Courier Companies, Smart App" />';
		$tag1 = '<meta name="description" content="A smart business is one who is using the smartphone smartly to serve their customers better. We have drafted a solution based on image processing, storing and integrating with your business applications directly. The solution stores images on server and align it with your customers order to make the service more effecient, quick and easy."/>';
		$pagetitle = 'Way2Smile - Click & Share';
		$techheadcla = 'current';
 include ('mobileappdev.php'); 
 } 
 else if($name == 'mbooks' && empty($page)) 
 {
   		$tag = '<meta name="keywords" content="ebook reader application, mbook reader application, Flash Media Server, Mobile based Solutions, Publishing Companies, Digital book reading experience, Flip books at your palm, m-book & e-book, Audio Book" />';
		$tag1 = '<meta name="description" content="Presenting this amazing web and mobile based solution for publishing companies to move from traditional publishing to e-pub 3.0. Give your customers a whole new digital book reading experience. Our rich media servers and latest web technology experts are all set to take your magazine business to next level."/>';
		$headcla = 'current';
		$pagetitle = 'Way2Smile solutions eBook and mBooks Software';
 include ('mbooks.php'); 
 } 
 else if($name == 'survey' && empty($page)) 
 {
   		$tag = '<meta name="keywords" content="Survey Tool, Customized report generation, Online Survey Made Easy, Way2Smile flagship solution, Online surveys and reports" />';
		$tag1 = '<meta name="description" content="Way2Smile  Solutions (www.way2smile.com) create a flexible online tool that leverages three years of research for a leading business book to measure leaders against a global population, giving insight into management style and engagement capacity"/>';
		$pagetitle = 'Way2Smile Solutions – Survey Tool';
 include ('survey.php'); 
 } 
 else if($name == 'edm' && $page == 'surveytool') 
 {
   		$tag = '<meta name="keywords" content="Survey Tool, Customized report generation, Online Survey Made Easy, Way2Smile flagship solution, Online surveys and reports" />';
		$tag1 = '<meta name="description" content="Tired of generating surveys and reports? Your search ends here. Presenting you one of its kinds Online Survey Tool for your organization. Creating users, generating questions, polls, and answer capturing forms are just a drag and drop away. And yes your report will be generated automatically in a very attractive designed PDF"/>';
		$pagetitle = 'Way2Smile Solutions – Survey Tool';
 include ('edm/surveytool.php'); 
 } 
 else if($name == 'edm' && $page == 'mbooks') 
 {
   		$tag = '<meta name="keywords" content="Survey Tool, Customized report generation, Online Survey Made Easy, Way2Smile flagship solution, Online surveys and reports" />';
		$tag1 = '<meta name="description" content="Tired of generating surveys and reports? Your search ends here. Presenting you one of its kind Online Survey Tool for your organization. Creating users, generating questions, polls, and answer capturing forms are just a drag and drop away. And yes your report will be generated automatically in a very attractive designed PDF. How\'s That?"/>';
		$pagetitle = 'Way2Smile Solutions - Email Campaign';

 include ('edm/mbooks.php'); 
 } 
 else if($name == 'edm' && $page == 'general') 
 {
   		$tag = '<meta name="keywords" content="Survey Tool, Customized report generation, Online Survey Made Easy, Way2Smile flagship solution, Online surveys and reports" />';
		$tag1 = '<meta name="description" content="At Way2Smile, we add value for our customers by providing a combination of Professional IT Solutions/Services and Consulting"/>';
		$pagetitle = 'Software Development - Way2Smile Solutions';

 include ('edm/general.php'); 
 } 
 else if($name == 'thumbnail' && empty($page))
	{ 
	$tag = '<meta name="keywords" content="Survey Tool, Customized report generation, Online Survey Made Easy, Way2Smile flagship solution, Online surveys and reports" />';
		$tag1 = '<meta name="description" content="=" At Way2Smile Solutions, we make it our responsibility to help your app stand out from the competition. We deliver iPhone apps, Android apps, BlackBerry apps, .Net application, Php application at top notch quality and perfection."/>';
		$pagetitle = 'Way2Smile Solutions portfolio';
		$serheadcla = 'current';
		include ('portfolio_thumbnail.php'); 
	}
	
	 else if($name == 'ecommerce-web-solution' && empty($page)) 
	{ 
		$serheadcla = 'current';
		include ('ecommerce-web-solution/index.php'); 
	}
	
	 else if($name == 'ecommerce-web-solution' && $page == 'features') 
	{ 
		$serheadcla = 'current';
		include ('ecommerce-web-solution/features.php'); 
	} 
	 else if($name == 'features' && empty($page))  
	{ 
		$serheadcla = 'current';
		include ('ecommerce-web-solution/features.php'); 
	}   
?>

