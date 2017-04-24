# Hackadev3.0

We are proposing a Resource Network Management system for the Disaster Management Centre(DMC). The major problem that we have identified in the existing Resource Network System is that all the data regarding resources are collected manually and then documented in to files. So Frequent updating of data has been a major issue since hardcopies are not easily updatable and also the process is not that simple. From the sources that we referred at http://www.dmc.gov.lk and during the pre-hack session we got know that resource network has not been updated since 2008. So clearly we have to move from collecting data till the analyzing part of the collected data within our system. So we came up with a combination of an android app and web application. 
Mainly our systems target 3 user categories,
  - Disaster Management Centre (DMC)
  - District Level coordinators (probably District Secretary’s Office)
  - General society of Sri Lanka
Our system has 2 phases,
  - General phase
  - Disaster phase
  
Web Application
  - General Phase
Through the web application the District level officers gets access to insert data regarding the existing resources (Item Description, Quantity, Department Name, Availability etc.). By the entry time of data for a particular resource the system will automatically try to mark the resource location in a google map. (System will ask for the confirmation of location and at any time the location can be changed by dragging the marker on the map). Main database will get updated only when the local data entered is accepted by a admin of district level. So in order to achieve this we’ll maintain 2 access levels in the system (Admin, User)

Android Application
By deploying an android application our target is to make the updates related to the resources more frequently. Also we can send notifications particularly for a relevant account (Registered at District level) at an end of a particular time period notifying them to make the updates. Also Application would facilitate the users at situations like that they would have to visit some departments or places in order to gather data. So by using the app at the moment of gathering data the local database can be updated. Also the GPS location of the mobile phone will be used to mark the resource location in the map.

- Disaster Phase
This phase should be triggered at a moment of a disaster (Particularly when the people of the district are looking for help or resources to come their way). Disaster Phase can be triggered by District Admin or by the DMC for a particular district. During this phase the web application asks for data like deaths, Injured, missing, Houses Destroyed, Houses Damaged etc. So the DMC can direct the resources from nearby districts as per the needed by the affected people. All the above functionality can be accessed even using the android application, so even if the user is not in a position to access the web app the procedure can be carried out.  
Also in our web Application there will be section for the common people, where they can voluntarily register and be a Resource provider for the Resource Network at a moment of disaster. (This can be even with a service).
Act of DMC in the System
DMC will hold the total control over the implemented system. They will be the ones who creates accounts for the District level users. And DMC will have the access to the main database and also to local databases which exists before the approval of district level admins. DMC’s end of the system has all functionality related analyzing and categorizing data as they need. Basically all the resources and help seeking areas will be marked in a single map, which can be used to analyze the status of the whole country at the moment. Also the system will provide easy and user friendly access to the resource providers so the DMC can take necessary actions in order to direct the resources for affected areas. 
As a team we strongly believe that this system will be a success as it contains few basic steps and yet can accomplish big things. Also with the time frames given this is the perfect match. The level of implementation (District, Gramaniladhari) can be decided accordingly with specific requirements of DMC. 





















