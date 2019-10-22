# simpleFrameworkPHP
Simple Framework based on MVC (Model-View-Controller) pattern in PHP programming language. The purpose of this project is to
practice understanding OOP and programming fundamentals. Then, I'll use this framework to create a blog.

Framework works on a local server Ampps and uses MySQL database.
Created with:

- JetBrains PHPStorm 
- Ampps local server
- colorlib.com

Issue with connection .js - files in <script>.

Ony many such services, the file system is often by default read-only as it is meant to be shared across multiple nodes.
You need to set up and configure a shared, writable file system.

Or you can 

1. Open MySQL Tab -> Configuration.

2. In [mysqld] section, add the following line:
innodb_force_recovery = 1

3. Save the file and try starting MySQL

4. Remove that line which you just added and Save.
