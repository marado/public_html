creating wikidata items in batch: the Portuguese local elections example

Every four years there are new local elections in Portugal - the next will be in a couple of months. For a new Portuguese local election event there should be a new [wikidata item](https://www.wikidata.org/wiki/Q120913144)... only these election events actually have distinct (municipal) local elections, 308 of them. That means, the local election item has (or should have) 308 parts. How to create them?

This is what I did for the 2025 elections. It's quite probably not the best way to do this, but it got the task done:

1. I created [a query](https://w.wiki/EtZF) looking at the parts of the 2021 elections. I saved the output and changed the names, replacing 2021 to 2025 - and that gave me a list of all the new items I had to create;
1. I took the list of items names and turned it into a [quickstatements csv file](qs-local-elections.csv) - not only stating the names of the items I wanted to create, but also adding a very basic set of properties to them. I ran it through [the online tool](https://quickstatements.toolforge.org), 308 items were created;
1. I made a [new query](https://w.wiki/EtZb) to have a list of these 308 items that were created, and saved its output because we now need to add them as parts of the 2025 elections item;
1. created that [new quickstatements csv](qs-add-items-as-parts.csv) saying that the 2025 elections had as a part each of those new items, and ran it.

PS: I did this, possibly better, for the 2021 elections. I should have documented what I did but I didn't do it, and for 2025 at the begining I didn't even recall that I had been the one doing it for 2021. So, this blog post will hopefully help me know what I will need to do in 2029... but I hope it might also be useful to others, for similar tasks.

tags: wikidata, bulk, quickstatements, tutorial
