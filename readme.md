# CSCI E-15 Project 3.

## Live URL
http://P3.ryankucinski.com

## Demo/Screencast (requires quicktime player)


## Description / Process
Link to [Project Requirements](http://dwa15.com/Projects/P3)

Uses 1 "master" layout view with 3 views to yield the content for each page
* [http://P3.ryankucinski.com] will bring you to the main page (index.blade) where you can navigate via buttons or the top navigation to the Lorem Ipsum Generator and the Random User Generator.
* [http://P3.ryankucinski.com/user] is the random user generator that uses the fzaninotto/Faker to generate a list of random users and their address data via an html form. When a user lands on the page they are prompted to specify a number of users and submit to generate their first list. It then populates the list on the right using the JQuery Datatables widget which adds additional functionality like the ability to search, pagification of your result list, sorting and a display with the count of results for your terms. The form has validation on the front in that there is a minimum and maximum value set and the user will not be able to submit the form if the number they entered is outside that range. Additionally, should a user be able to bypass this piece, there is additional validation in the controller that processes the from to ensure the values passed meet the requirements and a warning text is displayed if the user submits the form with inadequate data.
* [http://P3.ryankucinski.com/lorem] is a lorem ipsum generator that also uses the fzaninotto/Faker. I researched some other suggested packages which also seemed fairly straightforward to use but could not justify adding the extra code when the fzaninotto/Faker is already built to do this. Similarly to the random user generator, when a user lands on the page they are prompted to specify a number of paragraphs and have the option to adjust the number of sentences/paragraph (the default falls to 4). A user can generate up to 99 paragraphs with up to 20 sentences per paragraph. Upon submitting the form, the data is passed through a controller and the resulting paragraph set is displayed on the right. This tool uses the same methods of validation as the user generator, ensuring on the front end that the values are compliant and then checking them on the back end to ensure the required fields are there, are integers and fall within the specified ranges before populating the data.


## Details
* No login required.
* Site validates and uses proper/modern HTML structure.
* CSS for bootstrap does not validate (as expected).
* Generates up to 99 random users and address.
* Generates up to 99 paragraphs with up to 20 sentences/paragraph.
* Validates all HTML form inputs.
* HTML form values will display most recent post values.
* links to all other CSCI E-15 assignments and their GitHub repos.

## Outside Sources
* Bootstrap [http://getbootstrap.com/]
* Bootswatch 'Flatly' Theme [http://bootswatch.com/flatly]
* JQuery 1.11.3 [https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js]
* fzaninotto/Faker [https://github.com/fzaninotto/Faker]
* Jquery Datatables Widget [https://www.datatables.net/]
* barryvdh/laravel-debugbar (dev only) [https://github.com/barryvdh/laravel-debugbar]
