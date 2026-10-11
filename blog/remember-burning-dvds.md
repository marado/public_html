Remember burning DVDs?

It has been 0 days since I've burned a DVD.

That's right, trying to "recover" an old laptop, one of those that won't boot from USB thumb drives. Found out that it is still possible to buy blank DVD media where I live (DVD-R or DVD+R, but not DVD-RW; 90 cents per disc). I still remember when Debian could boast of being "The Universal Operating System" (it still does, I know) but nowadays that's far from the case - Debian no longer supports i686 machines, so I had to opt for an alternative...

[Void Linux](https://voidlinux.org/) was the answer: it is actively developed and its latest version still supports machines with the target specifications (i686, 1Gb RAM), with graphical interface (xfce). So, that's what I aimed for, and burnt `void-live-i686-20250202-xfce.iso` (an ISO too big to fit a CD, but fortunately that was not a limitation I had to deal with this time)...

...which fails to install (actually, it fails to boot) on this machine. It seems that I wasn't the first person stumbling into [this issue](https://www.reddit.com/r/voidlinux/comments/1r6k03d/void_linux_i686_live_iso_wont_boot_with_more_than/) (apparently if it had only 512Mb it would boot, but I did not open the machine to see if the RAM in it is in how many modules...).

My "solution" was to burn another DVD, with an older version - and just to raise my chances, I went for the oldest version available: `void-live-i686-20230628-xfce.iso`. And, go figure, it boots! So I installed this version, and then updated the system. Well, before updating, I had to configure the keyboard again (the installer choice wasn't enough), and the machine's date (the hardware clock thought we were in 2004, just so you get an idea of what has this laptop been 'doing' these past few years...). Then, I configured it to autologin and not lock the screen when the screensaver starts (which meant editing a file, which meant installing vim; I should probably leave these kinds of configurations for after the upgrade, but I just did it when I remembered). While the upgrade was ongoing, I started Firefox just to skip the initial steps and remove its sponsored shortcuts (which isn't done how one would expect, and it is sad to see dark patterns in something that used to be given as a great example of Free Software...).

Don't worry - I am not planning on having this machine trying to go to the World Wide Web (and I know from experience that Firefox is not the browser to try to use in a low resources machine), but the browser comes installed by default, and to be honest it is a good idea to have it on the ready in case one is needed in an emergency...

After the upgrade I installed LibreOffice, tried it out and added a shortcut to it on the applications bar.

Finally, I rebooted the machine to see if everything was fine (it was!), and... well, an old laptop has just been given a new life! :-)

PS: after having experienced Xubuntu and Bodhi Linux with XFCE in old laptops that are not as old as this one, I must say I am surprised with how responsive this machine is with void linux (even if my experience with it wasn't much - just what I described).


tags: DVD, Linux, burn, laptop, USB, Debian, Void, VoidLinux, XFCE, i686, Firefox, LibreOffice, Xubuntu, Bodhi, BodhiLinux
