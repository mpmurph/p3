#Project 3

##Live URL
<http://p3.harvard-dwa15.me>

##Description
This site allows the user to generate random filler text and/or random users. Such data is commonly used to simulate the user experience and/or test websites in the development process.

##Demo
I will demonstrate my P3 in section on Friday.

##Details for teaching team
I imported the recommended packages for this project: 

    *badcow/lorem-ipsum
    *fzaninotto/faker

---

Here is a list of the new folders and files I created within my Laravel framework for this application:

#####Created folders:

    * p3/app/classes
    * p3/public/css
    * p3/public/images


#####Created files (ex images):

######* In folder: p3/app/classes
         * Warnings.php
         * Filler.php
         * User.php

######* In folder: p3/app/controllers
         * FillerController.php
         * UserController.php

######* In folder: p3/public/app/views
         * _master.blade.php
         * _child.blade.php (extends _master)
         * welcome.blade.php (extends _master)
         * fillertext.blade.php (extends _child)
         * randomusers.blade.php (extends _child)

######* In folder: p3/public/css
         * stylesheet.css

Please note that the file list does not include the built-in Laravel framework files that I modified (e.g. .gitignore or app.php).

---

#####View hierarchy:

master | *-master.blade.php* | *-master.blade.php* | *-master.blade.php* |
--- | --- | --- | ---
**child** | _child.blade.php | _child.blade.php | welcome.blade.php |
**grandchild** | randomusers.blade.php | fillertext.blade.php | |

##Outside code and source material
#####Image sources:

* [Link to: A Google search found this Snoopy picture that inspired the BFF stickman.](http://shopfurrytales.blogspot.com/2011/03/my-bff.html)

* [Link to: Image that inspired the BFF doggie.](http://www.shutterstock.com/pic-94264543/stock-photo-sitting-dog-cartoon-raster-version.html)