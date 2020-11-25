<p>Scout Technologies Developer Assessment</p>
<p>Developed by: Charles Chabvonga</p>
<p>Date:26/11/20</p>
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


## How to clone and setup the Laravel Project

<h3>1. Clone your repo:</h3>
- git clone linktoyourpo.com/project name
<p>Note that you clone projects in 2 ways, one in HTTPS mode and one in SSH mode.
   PRO TIP:
   You can clone your project from a specific branch by doing 
   git clone -b nameofthebranch linktoyourepo.com/projectname</p>
   
<h3>2. Access your project directory:</h3>
After your clone, a new folder with the name of your Laravel project should be created in your current location.
You just need to access it by making:
- cd projectname

<h3>3. Install the project dependencies from composer:</h3>
Each time you clone a new Laravel project, you have to install all the dependencies of the project. This is what allows installing Laravel itself, among other packages needed to start the application.
When we run composer, it checks the composer.json file that is in your repo and lists all the composer packages your repo needs. As these packages are constantly changing, the source code is usually not submitted to git, thanks to the .gitignore that should always contain the vendor directory.
So to install all the necessary source code, we run composer with the following command:
- cd projectname


<h3>4 Install NPM dependencies (optional):</h3>
This is exactly like the previous step with the only difference that it will allow you to install Vue.js, Bootstrap.css, Lodash and Laravel Mix etc...
In short, instead of installing PHP code as in previous step, it's a matter of installing the required Javascript (or Node) packages.
The list of packages needed in this case are listed in 'packages.json' file.
If your project doesn't use vue.js, node or other you can skip this step, otherwise you have to do : 
- npm install

Others prefer Yarn, if that's the case, then you may. 
- Yarn

<h3>5 Create a copy of your .env file:</h3>
The .env files are generally not submitted to your repo, if this is not the case I invite you to correct this for security reasons.
But there is an example .env file, which is a template of the .env that every Laravel project needs to start. 
So we will make a copy of the .env.example file and create an .env file that we can fill in with our configuration settings.
- cp .env.example .env

<h3>6 Generate your encryption key:</h3>
Laravel requires that you have an encryption key for each application, this is usually randomly generated and stored in your .env. The application will use this encryption key to encrypt various elements of your application, such as cookies, password hashes and many other elements.
Fortunately Laravel's command line tools allows you to generate this key very easily. In the terminal, we can execute this command to generate this key.

- php artisan key:generate

Close and open your .env file again, you should notice that the key was generated in the variable: APP_KEY

<h3>7 Create an empty database for your project:</h3>
Create an empty database for your project using any database tools you prefer (My favorite is Datagrip for Mac, but sometimes I use DBForge, or Mysql Workbench or even good old Phpmyadmin).


<h3>8 Create an empty database for your project:</h3>
We will want to allow Laravel to connect to the database you just created in previous steps. To do this we need to add the connection references in the .env file and Laravel will take care of the connection from there.
In the .env file, fill in the options DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME and DB_PASSWORD so that they match the credentials of the database you have just created.

<h3>9 Add the tables and contents of your database with migrations or in SQL:</h3>
Migrations in Laravel allow you to have all your DB architecture in your code and with a simple command line you recreate all your tables.

- php artisan migrate

This command creates the structure of your database but does not fill any tables.
The repository has a seeder file, in order to fill your database with startup or dummy data.

- php artisan db:seed

PRO TIP: You can combine the 2 previous commands into one command which is this one: 

- php artisan migrate:fresh --seed

<h3>Conclusion</h3>
That is all we need to start our project. The last step is to run:
- php artisan serve
This command runs a development server, clicking on the displayed link will start the project in the browser. 
