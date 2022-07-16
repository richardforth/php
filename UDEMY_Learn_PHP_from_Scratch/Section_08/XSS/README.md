# Guestbook example of XSS attacks

## inserting html tags
You will notice that guestbook_app_bad is suceptible to html tags being inserted and interpretetd by the browser.

While this seems harmless enough, such as making text bold etc there can be all sots of badness, including page hijacking with iframes

guestbook_app_good is not susceptible to this attack, as the html is not rendred on the page.

## inserting iframes to deface the site or hijack the page and serve other content
same as above

## the fix

mush as we encapsulate mysql inputs with mysql_real_escape_string or its equivalents, it in not enough to protect agains XSS, so we must also use htmlentities() to escape html in the input:

```php
$message = htmlentities($db->escape_string($message));
```