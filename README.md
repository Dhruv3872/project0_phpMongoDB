Project to demonstrate ability to work with HTML, CSS, Javascript,
PHP,
mongoDB.
Flow of the project:
"index.html" is executed and shows a link to another page. This will take the user to "well-spent.php".
Now there is an instruction and a text box below it. The user would type in the response and hit enter.
This will record the response in the online mongoDB database created by me.
This is called "create document" operation - one of the CRUD (Create, Read, Update, & Delete) operations.
Once this is done, the user is taken to the page "thanQ.php".
Here we thank the user, show them the response entered by them.
Below this, there are two buttons: one to record another resonse: This will take the user back to
"well-spent.php".
One to "Show All Responses" recorded by all the users so far.
All the documents from the database created within the cluster
alloted to me will be called and then showed on the screen when
this button is clicked.
This is called "Read document" operation.

The project works completely fine on the local server using xampp as I have installed php extension for mongoDB and mongoDB php library locally.
