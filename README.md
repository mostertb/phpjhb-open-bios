# phpjhb-open-bios
This is a fun project intended to provide a safe environment in which to practice the mechanics of contributing to a 
GitHub project.
It was spawn out of the [PHP South Africa Conference](http://phpsouthafrica.com/). For more details, visit our
[homepage](http://phpjhb.sinkwa.com/).

# View this project online

The master branch is regularly rolled out to production. It can be viewed online at [http://phpjhb.sinkwa.com/](http://phpjhb.sinkwa.com/)

## Instructions 

### Step One
Fork this Repo

### Step Two

Extend the `mostertb\PhpJhbOpenBios\bios\ios\AbstractBio` class as `mostertb\PhpJhbOpenBios\bios\<YourName>Bio`

### Step Three 

Implement the following methods:
* getName()
* getDescription()
* getGitHubUsername()
* getProfileImageURL() (optional)
* getMaintainedProjects() (optional)

### Step Three
Add your new Bio class to the construction of `mostertb\PhpJhbOpenBios\Kernel`

### Step Four
Submit Pull Request

### Step Five 
Tweet your Pull Request [@PHPSouthAfrica](https://twitter.com/PHPSouthAfrica). 

*Note that these submissions are not eligible 
for the JetBrains License Competition, but we'd appreciate the publicity as part of the joke*

### Step Five
PROFIT $$

## Where To Next
Now that you are one more 'OpenSource' contribution stronger, why not go have a look at Digital Ocean's 
[Hacktoberfest](https://hacktoberfest.digitalocean.com/) initiative.

Alternatively, have a look at the projects that the other contributors to PHPJHB Open Bios are involved in and go code
  with your fellow conference attendees
  
## Running Locally
You can easily run a version of this project on your local dev environment by:
 
 First running a `composer install` to generate an autoloader:
 ```bash
    $ composer install
 ```
 
 Switch to the `public` directory
  ```bash
    $ cd public
  ```
  Serve using the built-in PHP webserver:
  ```bash
    $ php -S 127.0.0.1:8000
  ```
  
  Open the page in your web browser by going to [http://127.0.0.1:8000/index.php](http://127.0.0.1:8000/index.php)