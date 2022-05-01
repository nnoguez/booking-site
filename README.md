# php_portfolio_2

**MCO e-Ticket Booking**

This project is a booking site where users can Sign up, Log in, Update their password, Delete their accounts, and view their Ticket Information.

Upon entering the website the user is directed to a screen that allows them to pick between signing up or logging in. The values the user enters are passed into phpMyAdmin where their information is secure through the various functions being passed from database.php to security.php. 

Once the user has signed up then logged in, they may enter the site and view the flight listing. From here they may pick a country and then 'Book Flight.'

Upon selecting this button they're directed to ticket.php (which can also be found under the Profile tab in the nav bar) and are able to see a styled "ticket" displaying their firstName, lastName, and destination. 