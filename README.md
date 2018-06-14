# Forum

Forum is an experimental, non-existent, 'forum' system made with PHP.

## Installation

### Hosting locally

### Database

You will need [XAMPP](https://www.apachefriends.org/index.html) to host the 'forum' locally.
Install XAMPP and choose Apache and MySQL as the plugins. Then, copy the 'forum' and paste it into `C:\xampp\htdocs`.
Then, create a database named "forum". To generate the users table, copy the code in `users.sql` then click on SQL in your database. Paste the code and clock "Go".

### Configuration

In the `includes` folder, open the `dbh.php` file and change the lines labeled in comments.