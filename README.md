# descript
de-script a web page


# Usage
Inside the project's directory type

> php -S localhost:8080

Then access localhost:8080 from a web browser, enter desired web page's url to the input element and press enter

Alternatively go directly to

> localhost:8080/descript.php?url=\<url\>

The url needs to contain the protocol, either http or https; it does not follow redirects automatically

E.g.

> localhost:8080/descript.php?url=http://www.example.com

or

> localhost:8080/descript.php?url=https://www.example.com

Though it seems to work without protocols on some urls, there's no guarantee

E.g.

> localhost:8080/descript.php?url=example.com

**This is a work in progress**
