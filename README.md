# phpMongoDB Project:
*Project to demonstrate ability to work with **HTML, CSS, Javascript, PHP**, and **mongoDB**.*

## Flow of the project:
1. `index.html` is executed and shows a link to another page. This will take the user to `well-spent.php`.
2. Now there is an instruction and a text box below it. The user would type the response and hit enter.
3. This will record the response in our cloud mongoDB database. This is called "create document" operation - one of the CRUD operations.
4. Once this is done, the user is taken to the page `thanQ.php`.
5. Here, we thank the user, and show them the response entered by them.
6. Below this, there are two buttons:
    1. To record another resonse: This will take the user back to `well-spent.php`.
    2. To "Show All Responses" recorded by all the users so far: All the documents from the database created within the cluster
will be called and then showed on the screen when this button is clicked. This is called "Read document" operation.

The project works completely fine on the local server using xampp.

### Requirements for successfully running mongoDB locally:
- Instal php extension for mongoDB
- Install mongoDB php library.
