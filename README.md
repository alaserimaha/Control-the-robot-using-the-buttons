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

We wrote a simple html code to represent this idea ، you can find the html code from the attachments above [getForm.php]()
