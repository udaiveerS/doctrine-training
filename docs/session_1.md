Training Session 1:
===================

Section 1: General Understanding of Symfony Framework
-----------------------------------------------------

In this section we will go over basics of Symfony and how we can render views and submit simple forms.

Set up your apache web server.
Make sure permissions are given to the var directory.

Problem 1: Create New Bundle.

Easiest way to generate a new bundle is through the Symfony console.

From your terminal, navigate to your project directory and enter: `php bin/console` to list all available commands. To generate a new bundle we're specifically going to use the following command:

    php bin/console generate:bundle --namespace="Gaatu/CasinoBundle"

Let's also delete the unused default AppBundle that comes by default with the Symfony installation. Just delete the `AppBundle` directory from `src` directory. Make sure to remove line 18 in `app/AppKernel.php`:

    new AppBundle\AppBundle(),

We also need to remove all other AppBundle references from `app/routing.yml`.

Problem 2: Route, View, and Controller. display "Welcome to Gaa-sino!"

Let's start by generating a controller. The easiest way to do this is through the console: 

    php bin/console generate:controller --controller=GaatuCasinoBundle:Main

Now if you look under the `src/Gaatu/CasinoBundle/Controllers` directory, you will see a `MainController` generated from the command you just ran.

Controller & Route: Let's generate a controller action called `home` for the home page. And let's render a twig file called `home.html.twig`

Twig: Create a new file under `app/Resources/views/home.html.twig` and type in "Welcome to Gaa-sino!" in the file contents.

Problem 3: Twig. 
Extend the base layout `::base.html.twig` which is located in `app/Resources/views/base.html.twig`. Override the body block to show the text "Welcome to Gaa-sino". Once you override the base layout you should see a debugging toolbar on the bottom of the screen as well as some css changes to the page.

Problem 4: Create a form with post action.

Create a simple HTML form with just one input field called "bet" that posts to the same route. If the request is a post, then display what the user just gambled using the "bet" field. Also, based on any random event, display whether or not the user has won. So if a user submits "$12" then the display should show "Welcome to Gaa-sino! You gambled $12 and you lost!" 

Section 2: General Understanding of ORM & OOP
-----------------------------------------------------

In this section we will go over the basics of Doctrine/ORM (Object Relational Mapper) and the importance of truly programming from an object's perspective.

ORM is a way of mapping real life ideas, concepts, or goods into a model we can work with during our coding process. It's not just a tool, it is a coding lifestyle. 

Usually when we learn to program, we learn about the types of data: integers, text, boolean, datetime, etc. The data can be stored in a database where we insert data and query for relationships between our data set. It's pretty straightforward when you have very simple or very few tables to work with, but imagine a scenario where there are 500 tables in your database and you've got nothing but the code and data set to understand the system. Where do you even start to understand the logic & flow of the code & system, let alone manage this complex system?

ORM is a tool that lets programmers not worry so much about the actual queries and allows us to focus on the business models so that we may work at a higher and more complex level, rather thanthan struggling to manage tens of thousands of raw queries. ORM is not a new concept in PHP. It exists in other languages, such as Java (Java has an ORM called Spring), C#, C++, Python, and so much more. Doctrine is the name of the ORM tool that Symfony uses by default.

Problem 1: Map a product, category. 

When you create an entity, you are simply creating a row in a table (a whole collection of entities).

Problem 2: Map shipment, transaction. Create many-to-many shipment to transaction.

Problem 3: Use repository to query and return data.

Problem 4: Update/Delete Data.

Problem 5: Work with entities.
