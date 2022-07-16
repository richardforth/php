# PHP Security

## Cookies vs Sessions

Key Take Aways:

Dont store anything that controls user sessions in cookes eg

```
logged_in = 1
```

Instead you can store the email and a sha1 of the password and set the control variable 'logged_in' as a session variable that the user cant edit, other wise if they were to inspect the cookie they could theoretically modify the cookie and set the username to admin and logged_in to 1 and be able to access an admin area without knowing the password:

https://developer.chrome.com/docs/devtools/storage/cookies/

## File includes

File includes can be useful as a simple templating system, however including arbitrary files from user inputs opens you up to all kinds of abuse that could lead to a system wide compromise or loss of or exposure of sensitive data. So its important to validate user inputs and for example set up an allowed list of includable files, to ensure bad actors cant go snooping on your server to look at files they shouldnt be looking at.