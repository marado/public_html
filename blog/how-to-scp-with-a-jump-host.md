How to scp with a jump host

The syntax isn't the most intuitive, I'm afraid.

If you want to scp files from a remote machine into yours, or vice versa, and
you only have access to the remote machine via a jump host...

ie, if you need to

`ssh -J jumphost:port remotehost`

then, to copy files from remotehost to your local machine, you can do it by doing

`scp -oProxyCommand="ssh -W %h:%p jumphost -p port" remotehost:/path .`

tags: scp, jump, en
