# PHP Security

## Cookies vs Sessions

Key Take Aways:

Dont store anythign that controls user sessions in cookes eg

```
logged_in = 1
```

Instead you can store the email and a sha1 of the password and set the control variable 'logged_in' as a session variable that the user cant edit, other wise if they were to inspect the cookie they could theoretically modify the cookie and set the username to admin and logged_in to 1 and be able to access an admin area without knowing the password:

https://developer.chrome.com/docs/devtools/storage/cookies/

