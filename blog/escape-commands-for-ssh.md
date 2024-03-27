escape commands for ssh

Apparently this isn't as well known as it (IMO) should, so... here it is:

There are escape sequences on SSH, ie., if you are running an ssh session, you can control it by sending commands to it.

Useful commands:

<pre>
 ~.   - terminate connection (and any multiplexed sessions)
 ~B   - send a BREAK to the remote system
 ~C   - open a command line
 ~R   - request rekey
 ~V/v - decrease/increase verbosity (LogLevel)
 ~^Z  - suspend ssh
 ~#   - list forwarded connections
 ~&   - background ssh (when waiting for connections to terminate)
 ~?   - this message
 ~~   - send the escape character by typing it twice
(Note that escapes are only recognized immediately after newline.)
</pre>

tags: escape, ssh, en
