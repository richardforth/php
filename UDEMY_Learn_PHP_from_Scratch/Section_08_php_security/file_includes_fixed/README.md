# Fixed code

## what did we do?

We added validation by setting up an allow list of files found in the pages folder.

We could make thing even more secure by creating a static array, but this $allow_list geneeated with the scandir() function, does allow it to dynamically update the allow list as we add code to the pages directory.

The only downside is if an attacker is able to somehow put files into the pages folder to influence the allow list.
