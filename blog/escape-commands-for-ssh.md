escape commands for ssh

Apparently this isn't as well known as it (IMO) should, so... here it is:

There are escape sequences on SSH, ie., if you are running an ssh session, you can control it by sending commands to it.

Useful commands:

<pre>
[enter]~.  -- terminate sesssion
[enter]~^Z -- suspend session (note that ^Z means 'Ctrl-Z')
[enter]~&  -- put session into background
[enter]~#  -- lists the sessions' fwd connections
</pre>

If you ever wondered why aren't you able to type an ~ after an enter at the first attempt... here's why.

tags: escape, ssh, en
