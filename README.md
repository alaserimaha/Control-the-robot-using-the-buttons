# Control the robot using the buttons

Do you want to control your robot's behavior through some buttons on a web page?
This requires creating a web page and a database and then linking it to the Arduino to move it to your board

Let's see how we can do that
First of all, we will create a local web page and a database (localhost) using XAMPP, we talked about that earlier, to see [click here](https://github.com/alaserimaha/Save-HTML-Form-value-to-MySQL-using-PHP)

Now let's start with the steps of creating our project

## 1- Create a web page that includes robot control buttons
## 2- Create a database to store the instructions in
## 3- Create a php page to connect the web page and the database
## 4- Connect the Arduino to the database to read and apply the commands

## 1- Create a web page that includes robot control buttons
We will create a simple page, which includes 5 navigation buttons (Backward ، Forward, Right, Left and Stop) and when you press any of them, it will convert the value of the button to a php page with the help of GET mehthod .

We wrote a simple html code to represent this idea ، you can find the html code from the attachments above [control_robot.php](https://github.com/alaserimaha/Control-the-robot-using-the-buttons/blob/main/control_robot.php)

<img width="1294" alt="control_robot.php" src="https://user-images.githubusercontent.com/60073836/183419797-eb91e506-9307-496e-96c3-69170dc460da.png">

## 2- Create a database to store the instructions in

As we mentioned in the [previous repository](https://github.com/alaserimaha/Control-the-robot-using-the-buttons/blob/main/control_robot.php), the steps for creating a local database using XAMPP, we do the same, but the change is in the type of variable that will be stored
Since we want to store a letter where the letter represents the direction of movement, if the command is `left`, the letter `l` will be stored in the database, and so on

To view the steps to create the database again:
1) Open XAMPP and run Apache Web Server and MySQL Database
2) Go to application and open phpmyadmin by searching http://localhost/phpmyadmin/
3) From the bar, create a new database ( from new button ), let's say its name is (db)
4) Create a table inside the database, let's say its name is (table)
5) For our example, we only need one column of type VARCHAR , let's say its name is (value)
<img width="1314" alt="database" src="https://user-images.githubusercontent.com/60073836/183421266-7b9247f6-75d4-47a7-8e9b-cac28a7b6d04.png">

## 3- Create a php page to connect the web page and the database
To connect the web page to the database, we need to create a php page where it receives the movement from the web page (for example `right`) and takes the letter that represents it (in this case `r`) and then connects with the database to store this character, if the storage process is successful it appears Message (The char .... has been stored Successfully)
We wrote a php page to represent it ، you can find it from the attachments above [functioncalling.php](https://github.com/alaserimaha/Control-the-robot-using-the-buttons/blob/main/functioncalling.php)


<img width="648" alt="functioncalling.php" src="https://user-images.githubusercontent.com/60073836/183422616-1a3ddc92-5375-4f60-86d9-dcc1ce96cdd0.png">
د
## 4- Connect the Arduino to the database to read and apply the commands
In order to be able to connect the Arduino to the database first we have to download the MySQL library in our Arduino IDE, for more information on how to download [click here] add here the link


Then we have to add the Arduino user to the database and give him permissions to read the data
Let's say the username is `arduino_user` and the password is `1234`

      CREATE USER 'arduino_user'@'localhost' IDENTIFIED BY '1234';
