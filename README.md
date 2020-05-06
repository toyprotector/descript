# descript
de-script a web page


*Usage*

php -S localhost:8080

Then access localhost:8080 from a web browser
Enter desired web page's url to the input element and press enter

Alternatively go directly to

localhost:8080/descript.php?url=<url>

The url needs to contain the protocol, either http or https, it does not follow redirects automatically

E.g.

http://www.example.com or https://www.example.com

Though strangely it seems to work without protocols on some urls, there's no guarantee

E.g.

localhost:8080/descript.php?url=example.com

*This is a work in progress*
