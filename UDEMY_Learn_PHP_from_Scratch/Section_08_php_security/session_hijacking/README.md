# session hijacking prevention

is about preventing access to session cookies and data that might be stolen to spoof an authenticated user to gain access to restricted areas of the website, such as an admin area.

Prevent access to sesion cookie date to javascripts:

```php
ini_set('session.cookie_httponly', true);
```

Put checks in place to verify the remote address matches the last_ip connected from:

```php
session_start(); 

if (isset($_SESSION['last_ip']) === false) {
    // this is useless if you're behind a proxy eg a load balancer
    // as the attacker might come through the same proxy, thus
    // passing this validation check also
    $_SESSION['last_ip'] = $_SERVER['REMOTE_ADDR'];
    // however be aware that $_SERVER["HTTP_X_FORWARDED_FOR"] can be spoofed.
    // If you don't own any trusted proxies, just use REMOTE_ADDR

}

if ($_SESSION['last_ip'] !== $_SERVER['REMOTE_ADDR']) {
    session_unset(); // clear all session variables
    session_destroy(); // log the user out
}
```

An alternative might also be to check the REMOTE_ADDR againsta whitelist, but again if youre whitelisting a proxy, you may need other security measures such as locking down IP's on the proxy or this check would pass from an attacker hitting the same proxy from elsewhere. 