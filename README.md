#Buell Center

Website for the Buell Center

## Implementation Notes

### Homepage

Any type of content, organized by a node queue

### Research and Programs

Menu is made up of all taxonomy items from the Research and Programs vocabulary (defined by a view that creates a block that is set to the left sidebar).

`listing_by_taxonomy` view is used by taxonomy_term_page.tpl.php to collect the view elements for a taxonomy based listing (eg. a type of Research and Program item).

User can then click through to an individual node.

### Conferences (/conferences)

A node queue view that accepts nodes of type conference.

## NOTES

http://www.buellcenter.org/admin/build/path/pathauto