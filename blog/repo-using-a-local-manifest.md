repo: using a local manifest

One of the useful and rarely mentioned configurations of
[repo](https://gerrit.googlesource.com/git-repo/+/refs/heads/master/README.md)
is the use of local manifests.

See, `repo` is a powerful tool when you need to deal with a project that uses
several git repositories at the same time, and those are controled by a
manifest file. However, on your local development environment, you will often
want to extend or change something on the environment described on the
manifest, either by removing, adding or more often replacing one of the entries
with a slightly different configuration.

You can do that by using a local manifest, that will be applied on the top of
the other manifest files. The CyanogenMod project used to have a pretty nice
documentation about this, but that's one of the contents that were not migrated
into Lineage OS's wiki, so I decided to make this blog post, reproducing the
old wiki's content.

## The local manifest

Creating a *local manifest* allows you to customize the list of repositories
used in your copy of the source code by overriding or supplementing the default
manifest. In this way, you can add, remove, or replace source code in the
official manifest with your own. By including repositories (which need not even
reside on GitHub) in a local manifest, you can continue to synchronize with the
`repo sync` command just as you would have previously. Only now, both the
official repositories from the default manifest and the additional repositories
you specify will be checked for updates. 

## Adding and replacing repositories

To add to the contents of the default manifest, create a folder called
`local_manifests` under the `.repo` directory, then create an XML file (text
file with .xml extension) inside that directory. You can call the XML file
anything you like, as long as it ends in `.xml`. The default however is
`roomservice.xml`. Also, you can create separate XML files for different groups
of repositories. e.g. mako.xml for Google Nexus 4 related repositories and
cat-eater.xml for an unofficial device on which you're working.

Let's start with an example which we can use to describe the syntax:

> `<?xml version="1.0" encoding="UTF-8"?>`
>
> `<manifest>`
>
> `  <remote name="omap" fetch="git://git.omapzoom.org/" />`
>
> `  <remove-project name="CyanogenMod/android_hardware_ti_omap3" />`
>
> `  <project path="hardware/ti/omap3" name="platform/hardware/ti/omap3" remote="omap" revision="jb-dev"/>`
>
> `</manifest>`

The first line containing `<?xml version="1.0" encoding="UTF-8"?>` is a
standard XML declaration, telling interpreters this is an eXtensible Markup
Language file. Once this is established, the `<manifest>` and `</manifest>`
tags enclose some contents which the `repo` command will recognize.

First, a *remote* for git is declared and given the name "omap". In git, a
remote essentially refers to a place and method for accessing a git repository.
In this case, omapzoom.org is a site that contains special up-to-date
repositories for Texas Instrument's OMAP platform. This is equivalent to the
following `git` command:

> git remote add omap git://git.omapzoom.org/

The next line removes a project (specifically,
`cyanogenmod/android_hardware_ti_omap3`) declared in the default manifest.
After running `repo sync`, it will no longer be available in the source tree.

The next line defines a *new* project. In this case, it replaces the removed
project `android_hardware_ti_omap3` with one from Texas Instruments, using the
"omap" remote that was defined above.

When adding a new project that replaces an existing project, you should always
remove that project before defining the replacement. However, not every new
project need replace an existing cyanogenmod project. You can simply add a new
project to the source code, such as when you want to add your own app to the
build.

Note that when adding new projects, there are at least three parts defined:

* *remote* -- the name of the remote. this can be one that was defined in either the default `manifest` or `local_manifest.xml`.
* *name* -- the name of the git project-- for github it has the format `account_name/project_name`.
* *path* -- where the git repository should go in your local copy of the source code.
* *revision* -- *(optional)* which branch or tag to use in the repository. If this attribute is omitted, `repo sync` will use the revision specified by the `<default ... />` tag in the default manifest.

After creating `.repo/local_manifests/your_file.xml`, you should be able to
`repo sync` and the source code will be updated accordingly.

**Note:** You can use local repositories in the manifest by creating a remote
that points to `file:///path/to/source`. For example: `<remote
name="local-omap" fetch="file:///home/username/myomap" />`

#### License

All textual content of the CyanogenMod Wiki was released under the [Creative
Commons Attribution-Share Alike 3.0
Unported](https://creativecommons.org/licenses/by-sa/3.0/) license (CC-BY-SA),
and so this blog post should be considered licensed under the same terms.

tags: repo, manifest, local-manifest, local_manifests, git, en
