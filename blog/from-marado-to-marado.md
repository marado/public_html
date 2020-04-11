From ~marado to @marado

Speaking yesterday with someone about [tilde.pt](https://tilde.pt), which he
found out about due to my contributions to
[botany](https://github.com/marado/botany), it took me a while but I did
realize that there is a generational issue recognizing a ~, or, in particular,
recognizing it as a way to refer to someone.

Once upon a time, before @username was the common way to refer to a person (who
came with that first? twitter?), ~username was so. UNIX users will still be
probably used to do things like `cd ~` to go to their `$HOME`, or even `~user`
to refer to some other person's home. But I do not think that's where the most
common `~` recognition comes from: instead, what people will most remember is
the number of websites of "white pages" (as some other person refered about
them to me as), that had, as an address, `http://institution/~username`.

So, where does this `~` come from? Well, there was a time where every machine
connected to the web was more or less expected to have [Apache's
httpd](https://httpd.apache.org/) running, and it had a useful module, called
`mod_userdir`. UserDir actually was inherited: Apache's httpd started in 1995
as a continuation of the NCSA HTTPd webserver, and NCSA not only had the
UserDir directive, it was actually [active by
default](http://www6.uniovi.es/~antonio/ncsa_httpd/setup/srm/UserDir.html).
What does all this means? Well, it means that, by default, UNIX machines with a
webserver running would probably have NCSA or later Apache's httpd, which, by
default, would be allowing each of that server's users to have their own
website, at the address http://server.address/~username , and to have something
in there they'd just have to put some html pages into their `public_html`
directory.

tags: history, tilde, UNIX, username, apache, httpd, userdir, en
